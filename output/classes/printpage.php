<?php
class PrintPage extends RunnerPage
{
	public $allPagesMode = false;
	public $selectedRecords = array();
	public $masterKeys = array();
	public $masterTable = "";
	public $recordset = null;
	public $keyField = array();
	public $pdfWidth = PDF_PAGE_WIDTH;
	public $fetchedRecordCount = 0;
	public $splitByRecords = 0;
	
	public $pdfContent = "";
	
	public $pageBody = array();

	
	/**
	 * Array of field names that used for totals
	 * @type array
	 * totalsFields = array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();

	/**
	 * Temporary totals results
	 * @type array
	 */
	public $totals = array();

	
	public $sql = "";
	
	public $sqlParts = array( "searchCriteria" => "and" );
	
	/**
	 *	Total number of records in the query
	 */
	public $totalRowCount = false;

	public $queryPageNo = 1;
	public $queryPageSize = 0;

	public $_eof = false;
	
	public $customFieldForSort;
	public $customHowFieldSort;
	
	public $pageNo = 1;
	
	/**
	 * @constructor
	 */
	function PrintPage(&$params = "")
	{
		parent::RunnerPage($params);
		if( $this->selectedRecords )
			$this->allPagesMode = true;
	
		$this->printGridLayout = $this->pSet->getPrintGridLayout();
		
		for($i = 0; $i < count($this->detailKeysByM); $i++)
		{
			$this->masterKeys[] = $_SESSION[ $this->sessionPrefix . "_masterkey" . ( $i + 1 ) ];
		}
		$this->masterTable = $_SESSION[$this->sessionPrefix . "_mastertable"];
		$this->totalsFields = $this->pSet->getTotalsFields();
		$this->splitByRecords = $this->pSet->getPrinterSplitRecords();
		if( $this->pdfMode )
			$this->splitByRecords = $this->pSet->getPrinterPDFSplitRecords();
	}

	function init()
	{
		parent::init();
	}

	static function readSelectedRecordsFromRequest( $table )
	{
		if(!$_REQUEST["selection"])
			return array();
		$selected_recs = array();
		$pSet = new ProjectSettings( $table );
		$keyFields = $pSet->getTableKeys();
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr = explode("&",refine($keyblock));
			if(count($arr) < count($keyFields))
				continue;
			$keys = array();
			foreach($arr as $i => $value)
			{
				$keys[ $keyFields[$i] ] = urldecode( $value );
			}
			$selected_recs[] = $keys;
		}
		return $selected_recs;
	}

	protected function buildSQL()
	{
		global $gQuery, $gstrOrderBy;
		//	build Where expression
		if( $this->selectedRecords )
		{
			$selectionSQL = array();
			foreach($this->selectedRecords as $keys)
			{
				
				$selectionSQL[] = $this->keysSQLExpression( $keys );
			}
			$sWhere = implode(" or ", $selectionSQL );
			$this->sqlParts["sql"] = $gQuery->gSQLWhere($sWhere);
			$this->sqlParts["where"] = $sWhere;
		
		}
		else
		{
			$this->sqlParts["where"] = @$_SESSION[$this->sessionPrefix . "_where"];
			$this->sqlParts["having"] = @$_SESSION[$this->sessionPrefix . "_having"];
			$this->sqlParts["searchCriteria"] = @$_SESSION[$this->sessionPrefix . "_criteria"];
			$this->sqlParts["join"] = @$_SESSION[$this->sessionPrefix . "_joinFromPart"];
			$this->sqlParts["sql"] = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), 
				$gQuery->FromToSql().$this->sqlParts["join"], 
				$gQuery->WhereToSql(),
				$gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), 
				$this->sqlParts["where"], 
				$this->sqlParts["having"], 
				$this->sqlParts["searchCriteria"]);	
		}
		$this->sqlParts["orderby"] = $_SESSION[$this->sessionPrefix . "_order"];
		if(!$this->sqlParts["orderby"])
			$this->sqlParts["orderby"] = $gstrOrderBy;
		$this->sqlParts["sql"] .= " " . trim( $this->sqlParts["orderby"] );

	}
	
	protected function calcRowCount()
	{
		global $gQuery;
		
		$strSQLbak = $this->sqlParts["sql"];
		$sql = $this->sqlParts["sql"];
		$where = $this->sqlParts["where"];
		$orderby = $this->sqlParts["orderby"];
		if($this->eventsObject->exists("BeforeQueryPrint"))
			$this->eventsObject->BeforeQueryPrint($sql, $where, $orderby, $this);

		//	Rebuild SQL if needed
		
		if($sql != $strSQLbak)
		{
			//	changed $strSQL - old style	
			$this->totalRowCount = GetRowCount($sql, $this->connection);
			return;
		}

		// rebuild sql

		$this->sqlParts["where"] = $where;
		$this->sqlParts["orderby"] = $orderby;
		$this->sqlParts["sql"] = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), 
			$gQuery->FromToSql().$this->sqlParts["join"], 
			$gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), 
			$gQuery->Having()->toSql($gQuery), 
			$this->sqlParts["where"], 
			$this->sqlParts["having"], 
			$this->sqlParts["searchCriteria"]);	
		$this->sqlParts["sql"] .= " ".trim( $this->sqlParts["orderby"] );
		
		if($this->eventsObject->exists("ListGetRowCount"))
		{
			$this->totalRowCount = $this->eventsObject->ListGetRowCount($this->searchClauseObj, 
				$this->masterTable, 
				$this->masterKeys, 
				$this->selectedRecords, 
				$this);
		}
		
		if($this->totalRowCount === false)
		{
			$this->totalRowCount = SQLQuery::gSQLRowCount_int( $gQuery->HeadToSql(), 
				$gQuery->FromToSql().$this->sqlParts["join"], 
				$gQuery->WhereToSql(), 
				$gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), 
				$this->sqlParts["where"], 
				$this->sqlParts["having"], 
				$this->connection, 
				$this->sqlParts["searchCriteria"] );		
		}
	
	}
	
	protected function prepareCustomListQueryLegacySorting()
	{
		if( !$this->eventsObject->exists("ListQuery") )
			return;
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize( $_SESSION[ $this->sessionPrefix . "_orderFieldsList" ] );
		for($i = 0; $i < count($fieldList); $i++)
		{
			$this->customFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$this->customHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
	}

	protected function calcPageSizeAndNumber()
	{
		if( $this->allPagesMode )
			return;
		
		$this->queryPageNo = (integer)$_SESSION[ $this->sessionPrefix . "_pagenumber" ];
		if( !$this->queryPageNo )
			$this->queryPageNo = 1;

		//	page size
		$this->queryPageSize = (integer)$_SESSION[$this->sessionPrefix . "_pagesize"];
		if(!$this->queryPageSize)
			$this->queryPageSize = $this->pSet->getInitialPageSize();

		if($this->queryPageSize < 0)
			$this->allPagesMode = true;	
	}
	
	protected function openQuery()
	{

		$this->prepareCustomListQueryLegacySorting();
		$this->calcPageSizeAndNumber();
		
		$listarray = false;
		if($this->eventsObject->exists("ListQuery"))
		{
			$this->recordset = $this->eventsObject->ListQuery($this->searchClauseObj, 
				$this->customFieldForSort, 
				$this->customHowFieldSort,
				$this->masterTable,
				$this->masterKeys, 
				$this->selectedRecords, 
				$this->queryPageSize, 
				$this->queryPageNo, 
				$this);
		}
		if(!$this->recordset)
		{
			if( $this->allPagesMode )
				$this->recordset = $this->connection->query( $this->sqlParts["sql"] )->getQueryHandle(); 
			else
				$this->recordset = $this->connection->queryPage( $this->sqlParts["sql"], 
					$this->queryPageNo, 
					$this->queryPageSize, 
					$this->totalRowCount );
		}
	}
	
	protected function setMapParams()
	{
		$fieldsArr = array();
		foreach( $this->pSet->getPrinterFields() as $f )
		{
			$fieldsArr[] = array( 'fName' => $f, 'viewFormat' => $this->pSet->getViewFormat($f) );
		}
		$this->setGoogleMapsParams( $fieldsArr );
	}
	/**
	 * Process the page 
	 */
	public function process()
	{
		// do PDF conversion only
		if($this->pdfMode == "convert")
		{
			$this->convertToPDF();
			return;
		}


	//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessPrint") )
			$eventsObject->BeforeProcessPrint( $this );
			
		
		$this->prepareJsSettings();
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->commonAssign();
		$this->setMapParams();

		$this->printMasterTableInfo();
		
		$this->buildSQL();
		$this->calcRowCount();
		$this->openQuery();
		
		$this->doFirstPageAssignments();
		if( !$this->splitByRecords )
		{
			$this->fillGridPage();
			$this->showTotals();
			// display the 'Back to Master' link and master table info
			$this->printMasterTableInfo();
			$this->body["data"][] = $this->pageBody;
		}
		else
		{
			$masterAdded = false;
			while( true )
			{
				if( !$masterAdded )
				{
					$this->printMasterTableInfo();
					$masterAdded = true;
				}
				$this->fillGridPage();
				if($this->EOF())
					break;
				$this->wrapPageBody();					
				$this->body["data"][] = $this->pageBody;
				++$this->pageNo;
			}
			//	add totals to the last page
			$this->showTotals();
			$this->wrapPageBody();					
			$this->body["data"][] = $this->pageBody;
		}
		$this->xt->assign( "pagecount", $this->pageNo );


		$this->doCommonAssignments();
		$this->displayPrintPage();		
	}
	
	protected function wrapPageBody()
	{
		if( $this->pdfMode )
			$this->pageBody["begin"] = "<div class=\"rp-page\">";
		else
			$this->pageBody["begin"] = "<div class=\"rp-presplitpage rp-page\">";
		$this->pageBody["end"] = "</div>";
	}
	protected function showTotals()
	{
		if( $this->totalsFields )
			return;
		$record = array();
		$this->pageBody["totals_record"] = true;
		foreach( $this->totalsFields as $tf )
		{
			$total = GetTotals( $tf["fName"], 
				$this->totals[ $tf["fName"] ]["value"], 
				$tf[ "totalsType" ], 
				$totals[ $tf["fName"] ]["numRows"], 
				$tf[ "viewFormat" ],
				PAGE_PRINT);
			$this->pageBody[ GoodFieldName( $this->totalsFields[$i]['fName'] ) . "_total" ] = $total;
			$record[ GoodFieldName( $this->totalsFields[$i]['fName'] ) . "_showtotal"] = true;
		}
		$this->pageBody[ "totals_row" ] = array("data" => array(0 => $record));
	}
	
	protected function EOF()
	{
		return $this->_eof;
	}
	protected function readNextRecord()
	{
		if( !$this->allPagesMode && $this->fetchedRecordCount >= $this->queryPageSize )
		{
			$this->_eof = true;
			return false;
		}
		while(true)
		{
			if($this->eventsObject->exists("ListFetchArray"))
				$data = $this->eventsObject->ListFetchArray($this->recordset, $this);
			else
				$data = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $this->recordset ) );
			
			if( !$data )
			{
				$this->_eof = true;
				return $data;
			}
				
			if($this->eventsObject->exists("BeforeProcessRowPrint"))
			{
				if(!$this->eventsObject->BeforeProcessRowPrint($data, $this))
				{
					continue;
				}
			}
			++$this->fetchedRecordCount;
			return $data;
		}
	}
	
	protected function buildGridRecord( $data, &$row )
	{
		$this->genId();
		
		$record = array();
		$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";	

		$this->countTotals( $this->totals , $data );
		
		$keyFields = $this->pSet->getTableKeys();
		$keylink = "";
		for($i = 0; $i < count( $keyFields ); $i ++)
			$keylink.= "&key".($i + 1) . "=" . runner_htmlspecialchars( rawurlencode( @$data[ $keyFields[$i] ] ) );


		if($this->eventsObject->exists("BeforeMoveNextPrint"))
			$this->eventsObject->BeforeMoveNextPrint($data, $row, $record, $this);
		

		$printFields = &$this->pSet->getPrinterFields();
		for($i = 0; $i < count($printFields); $i++) 
		{
			$record[GoodFieldName($printFields[$i])."_value"] = $this->showDBValue( $printFields[$i], $data, $keylink );
			$this->setRowClassNames($record, $printFields[$i]);
		}
		$this->spreadRowStyles($data, $row, $record);
		$this->setRowCssRules($record);
		$record["grid_recordheader"] = true;
		$record["grid_vrecord"] = true;
		
		return $record;
	}
	
	protected function showGridHeader( $columns )
	{
		foreach( $this->pSet->getPrinterFields() as $f )
		{
			$gf = GoodFieldName($f);
			$this->pageBody[ $gf . "_fieldheadercolumn"] = true;
			$this->pageBody[ $gf . "_fieldheader"] = true;
			$this->pageBody[ $gf . "_class"] = $this->fieldClass( $f );
			$this->pageBody[ $gf . "_fieldcolumn"] = true;
			$this->pageBody[ $gf . "_fieldfootercolumn"] = true;
		}
		
		$this->pageBody[ "record_header" ] = array("data"=>array());
		$this->pageBody[ "record_footer" ] = array("data"=>array());

		for($i = 0; $i < $columns; $i++)
		{
			$rheader = array();
			$rfooter = array();
			if($i < $columns - 1)
			{
				$rheader["endrecordheader_block"] = true;
				$rfooter["endrecordheader_block"] = true;
			}
			$this->pageBody[ "record_header" ]["data"][] = $rheader;
			$this->pageBody[ "record_footer" ]["data"][] = $rfooter;
		}
		$this->pageBody[ "grid_header" ] = true;
		$this->pageBody[ "grid_footer" ] = true;
	}
	
	protected function fillGridPage()
	{

		$this->pageBody["grid_row"] = array();
		$this->pageBody["grid_row"]["data"] = array();
		$recno = 0;
		
		$recordsPrinted = 0;

		$this->totals = array();

		$row = false;
		$col = 0;
		while( $data = $this->readNextRecord() )
		{
			if(!$col)
			{
				//	create new row
				$row = array();
				$row["grid_record"] = array();
				$row["grid_record"]["data"] = array();
				
			}
			else
			{
				//	update previous record in the row
				$row["grid_record"]["data"][ $col - 1 ]["endrecord_block"] = true;
				//	add two empty cells to the vertical layout grid
				$row["grid_recordspace"]["data"][] = true;
				$row["grid_recordspace"]["data"][] = true;
			}

			//	add the record to the row
			if($this->printGridLayout == gltVERTICAL || $this->recsPerRowPrint != 1)
			{ 
				$row["grid_record"]["data"][] = $this->buildGridRecord( $data, $row );
			} 
			else
			{
				// simplify row/record structure - put everything to $row
				foreach( $this->buildGridRecord( $data, $row ) as $index => $value)
				{
					$row[ $index ] = $value;
				}
				$row["grid_record"] = true;
			}
			
			//	finalize row if needed
			++$col;
			++$recno;
			if( $col >= $this->recsPerRowPrint )
			{
				$row["grid_recordspace"]["data"][] = true;
				$row["grid_rowspace"] = true;
				$this->pageBody["grid_row"]["data"][] = $row;
				$col = 0;
			}
			
			if( $this->splitByRecords && $recno >= $this->splitByRecords )
				break;
		
		}
		//	finalize grid
		if($col)
		{
			$this->pageBody["grid_row"]["data"][] = $row;
		}
		
		$this->showGridHeader( $this->recsPerRowPrint < $recno ? $this->recsPerRowPrint : $recno);
		$this->pageBody["pageno"] = $this->pageNo;
	}

	
	
	/**
	 *
	 */
	public function doCommonAssignments() // TODO: make it protected
	{
		$this->body['begin'].= GetBaseScriptsForPage( false );

		// assign body end
		$this->body['end'] = array();
		AssignMethod($this->body['end'], "assignBodyEnd", $this);

		$this->xt->assignbyref('body', $this->body);	
		
		$this->xt->assign("grid_block", true);

		$this->xt->assign("page_number",true);
		
		if( !$this->splitByRecords )
		{
			$this->xt->assign("divideintopages_block", true);
		}
		
		//	display Prepare for printing or PDF buttons
		if( !$this->pdfMode && ( !$this->splitByRecords || $this->pSet->isPrinterPagePDF() ))
		{
			$this->xt->assign("printbuttons", true);
		}
	}	
	
	protected function prepareJsSettings()
	{
		if (isRTL())
			$this->jsSettings['tableSettings'][ $this->tName ]['isRTL'] = true;

		if ($this->pSet->isPrinterPagePDF())
			$this->jsSettings['tableSettings'][ $this->tName ]['printerPagePDF'] = true;


		$this->jsSettings['tableSettings'][$this->tName]['printerPageOrientation'] = $this->pSet->getPrinterPageOrientation();
		$this->jsSettings['tableSettings'][$this->tName]['printerPageScale'] = $this->pSet->getPrinterPageScale();
		$this->jsSettings['tableSettings'][$this->tName]['isPrinterPageFitToPage'] = $this->pSet->isPrinterPageFitToPage();
		$this->jsSettings['tableSettings'][$this->tName]['printerSplitRecords'] = $this->pSet->getPrinterSplitRecords();
		$this->jsSettings['tableSettings'][$this->tName]['printerPDFSplitRecords'] = $this->pSet->getPrinterPDFSplitRecords();

		$printGridLayout = $this->pSet->getPrintGridLayout();
		if ( $printGridLayout )
			$this->jsSettings['tableSettings'][$this->tName]['printGridLayout'] = $printGridLayout;
	}
	
	public function convertToPDF()
	{
		$this->preparePDFDimensions();
		$this->buildPdf($this->pSet->isLandscapePrinterPagePDFOrientation(), $this->pdfWidth, $this->pdfContent);
	}
	public function preparePDFDisplay()
	{
		if( !$this->pdfMode )
			return;
		$this->AddCSSFile("styles/defaultPDF.css");
		if( $this->pdfMode == "prepare")
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfPrinterPageOrientation'] = $this->pSet->isLandscapePrinterPagePDFOrientation();
			$this->setProxyValue('createPdf', 1);
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfFitToPage'] = $this->pSet->isPrinterPagePDFFitToPage();
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfPrinterPageScale'] = $this->pSet->getPrinterPagePDFScale();
		}
	}
	public function displayPrintPage()
	{
		$templateFile = $this->templatefile;
		if($this->eventsObject->exists("BeforeShowPrint"))
			$this->eventsObject->BeforeShowPrint($this->xt, $templateFile, $this);
		$this->preparePDFDisplay();

		if( $this->pdfMode == "build" )
		{

			$this->preparePDFDimensions();
			$this->assignStyleFiles( true );
			$this->xt->load_template($this->templatefile);
			$page = $this->xt->fetch_loaded();
			$this->buildPdf($this->pSet->isLandscapePrinterPagePDFOrientation(), $this->pdfWidth, $page);
		}
		else
		{
			$this->display($this->templatefile);
		}
		
	}	

	protected function preparePDFDimensions()
	{
		if( $this->pSet->isPrinterPagePDFFitToPage() )
			return;
		if( !$this->pSet->isLandscapePrinterPagePDFOrientation() )
		{
			$this->pdfWidth = PDF_PAGE_WIDTH * 100 / $this->pSet->getPrinterPagePDFScale();
		}
		else
		{
			$this->pdfWidth = PDF_PAGE_HEIGHT * 100 / $this->pSet->getPrinterPagePDFScale();
		}
	}
	
	/**
	 * Display master table info
	 */
	public function printMasterTableInfo() 
	{
		$masterTablesInfoArr = $this->pSet->getMasterTablesArr( $this->tName );
		if( !count($masterTablesInfoArr)  )
			return;
			
		foreach( $masterTablesInfoArr as $masterTableData )
		{
			if( $this->masterTable != $masterTableData['mDataSourceTable'] ) 
				continue;
				
			if( $masterTableData['dispInfo'] ) 
			{
				include_once( getabspath("include/". $masterTableData['mShortTable']. "_masterprint.php" ) );
				
				$this->pageBody[ "showmasterfile" ] = array();
				$params = array("detailtable" => $this->tName, "keys" => $this->masterKeys);
				AssignFunction($this->pageBody[ "showmasterfile" ], "DisplayMasterTableInfoForPrint_".$masterTableData['mShortTable'], $params);
				$this->pageBody[ "mastertable_block" ] = true;
			}
		}		
	}
	
	public function doFirstPageAssignments() 
	{
		if( $this->pSet->isPrinterPagePDF() && !$this->pdfMode )
			$this->pageBody["pdflink_block"] = true;
	}
	
	protected function buildPdf($_landscape, $_pagewidth, $_page)
	{
		$landscape = $_landscape;
		$pagewidth = $_pagewidth;
		$page = $_page;
		include(getabspath("plugins/page2pdf.php"));
	}

	
}
?>