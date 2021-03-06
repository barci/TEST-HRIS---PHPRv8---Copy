<?php
class DashboardPage extends RunnerPage
{
	protected $elementsPermissions = array();
	
	/**
	 * @constructor
	 * @param &Array params
	 */
	function DashboardPage(&$params)
	{
		parent::RunnerPage($params);
		
		// Set language params, if have more than one language
		$this->setLangParams();
		
		$this->jsSettings['tableSettings'][ $this->tName ]['dashElements'] = array();
		
		//	calculate additional element settings
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			$permissions = false;
			$newElem = $elem;
			
			if( $elem['type'] == DASHBOARD_RECORD)
			{
				// check tables (add, view, edit) permissinons befor add to js
				$newElem['tabsPageTypes'] = array();
				foreach( $elem['tabsPageTypes'] as $idx => $pageType )
				{
					if( $this->CheckPermissions( $elem['table'], $pageType ) )
					{
						$permissions = true;
						$newElem['tabsPageTypes'][] = $pageType;
					}
				}
			}
			elseif( $elem['type'] == DASHBOARD_DETAILS)
			{
				$eset = new ProjectSettings( $elem['table'] );
				$details = $eset->getDetailTablesArr();
				
				// add details shortTableNames
				$newElem['details'] = array();
				foreach( $details as $idx => $d )
				{
					if( in_array( $d['dDataSourceTable'], $elem['notUsedDetailTables'] ) )
						continue;
						
					if( $this->CheckPermissions( $d['dDataSourceTable'], $d['dType'] ) )
					{
						$permissions = true;
						$newElem['details'][$idx] = $d;
						$this->jsSettings['tableSettings'][ $d['dDataSourceTable'] ]['shortTName'] = $d[ 'dShortTable' ];
					}
				}
			}
			elseif( $elem['type'] == DASHBOARD_CHART || $elem['type'] == DASHBOARD_REPORT || $elem['type'] == DASHBOARD_SEARCH)
					$permissions = $this->CheckPermissions($elem['table'], "Search" );
			elseif( $elem['type'] == DASHBOARD_LIST)
				$permissions = $this->CheckPermissions($elem['table'], "list" );
			
			$this->elementsPermissions[$key] = $permissions;
			if ( !$permissions )
				continue;
			
			// add shortTableNames and element
			$this->jsSettings['tableSettings'][ $elem['table'] ]['shortTName'] = GetTableURL( $elem['table'] );
			$this->jsSettings['tableSettings'][ $this->tName ]['dashElements'][$key] = $newElem;
		}
	}
	
	function CheckPermissions( $table, $permis )
	{
		foreach( $this->getPermissionType( $permis ) as $val )
		{
			if( CheckTablePermissions( $table, $val ) )
				return true;
		}
		
		return false;
	}
	
	/**
	 * @param String $pageType
	 * @return Array permission types
	 */
	function getPermissionType($pageType)
	{
		$result = array();
		$type = parent::getPermisType($pageType);
		
		if ($pageType == "view" || $pageType == "chart" || $pageType == "report" || $pageType == "list")
			$type = "S";
		elseif ($pageType == "add")
			$type = "A";
		elseif ($pageType == "edit")
			$type = "E";
		/*elseif ($pageType == "list")
			$result = array("E", "S", "A");*/
		
		return $type ? array($type) : $result;
	}
	
	function init() 
	{
		parent::init();

		$this->createElementContainers();
	}
	
	function createElementContainers()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			
			$this->xt->assign( "db_".$elem["elementName"] , "<div class=\"" . $this->getElementClass( $elem ) . "\" id=\"dashelement_" . $elem["elementName"] . $this->id . "\"></div>");
		}
	}
	
	/**
	 * Clear the page's and elements pages' session keys 
	 * if the page is loaded with "empty" params
	 */
	function clearSessionKeys()
	{
		parent::clearSessionKeys();
		
		if( !count($_POST) && ( !count($_GET) || count($_GET) == 1 && isset($_GET["menuItemId"]) ) )
		{
			$this->unsetAllPageSessionKeys();
		}
		
		foreach( $this->pSet->getDashboardElements() as $elem ) 
		{
			$this->unsetAllPageSessionKeys( $this->tName."_".$elem["table"] );
		}
	}
	
	/**
	 * Set session variables
	 */
	function setSessionVariables() 
	{
		parent::setSessionVariables();
		
		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
	}
	
	/**
	 * Add extra JS and CSS files 
	 */
	public function addDashElementsJSAndCSS() 
	{
		if( $this->hasSingleRecordOrDetailsElement() )
		{
			$this->AddJSFile("include/jquery-ui/jquery-ui-1.10.4.custom.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui-1.10.4.custom.css");
		}
	}
	
	/**
	 * Check if the dashboard has any 'single record' or 'details' element
	 * @return Boolean
	 */
	protected function hasSingleRecordOrDetailsElement()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			
			if( $elem["type"] == DASHBOARD_RECORD || $elem["type"] == DASHBOARD_DETAILS )
				return true;
		}
		
		return false;
	}
	
	/**
	 * Assign 'body' element
	 */
	public function addCommonHtml()
	{
		// assign body begin
		$this->body['begin'] = GetBaseScriptsForPage(false);
		// assign body end
		$this->body['end'] = array();
		AssignMethod($this->body['end'], 'assignBodyEnd', $this);

		$this->xt->assignbyref('body', $this->body);
	}
	
	/**
	 * Common xt assignments
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("asearch_link", true);
	}
	
	/**
	 * Add common assign
	 */	
	function commonAssign() 
	{
		parent::commonAssign();
		
		if( isMobile() )
		{
			$this->xt->displayBrickHidden("search_dashboard_m");
		}
		
		$this->xt->assign("languages_block", true);	
	
	}
	
	/**
	 * Process the page
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessDashboard") )
			$this->eventsObject->BeforeProcessDashboard( $this );
		
		// add button events if exist
		$this->addButtonHandlers();
		$this->addDashElementsJSAndCSS();
		$this->addCommonJs();
		$this->commonAssign();
		$this->doCommonAssignments();
		$this->addCommonHtml();
		if( $this->eventsObject->exists("BeforeShowDashboard") )
		{
			$this->eventsObject->BeforeShowDashboard( $this->xt, $this->templatefile, $this );
		}
		$this->display( $this->templatefile );
	}

	protected function getElementClass( &$element )
	{
		if( $element[ "type" ] != DASHBOARD_DETAILS && $element[ "type" ] != DASHBOARD_RECORD )
			return "rnr-dbbordered";
		return "";
	}
}
?>