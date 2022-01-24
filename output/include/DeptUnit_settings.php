<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDeptUnit = array();	
	$tdataDeptUnit[".truncateText"] = true;
	$tdataDeptUnit[".NumberOfChars"] = 80; 
	$tdataDeptUnit[".ShortName"] = "DeptUnit";
	$tdataDeptUnit[".OwnerID"] = "";
	$tdataDeptUnit[".OriginalTable"] = "hris_job";

//	field labels
$fieldLabelsDeptUnit = array();
$fieldToolTipsDeptUnit = array();
$pageTitlesDeptUnit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDeptUnit["English"] = array();
	$fieldToolTipsDeptUnit["English"] = array();
	$pageTitlesDeptUnit["English"] = array();
	if (count($fieldToolTipsDeptUnit["English"]))
		$tdataDeptUnit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDeptUnit[""] = array();
	$fieldToolTipsDeptUnit[""] = array();
	$pageTitlesDeptUnit[""] = array();
	if (count($fieldToolTipsDeptUnit[""]))
		$tdataDeptUnit[".isUseToolTips"] = true;
}
	
	
	$tdataDeptUnit[".NCSearch"] = true;



$tdataDeptUnit[".shortTableName"] = "DeptUnit";
$tdataDeptUnit[".nSecOptions"] = 0;
$tdataDeptUnit[".recsPerRowList"] = 1;
$tdataDeptUnit[".mainTableOwnerID"] = "";
$tdataDeptUnit[".moveNext"] = 1;
$tdataDeptUnit[".nType"] = 1;

$tdataDeptUnit[".strOriginalTableName"] = "hris_job";




$tdataDeptUnit[".showAddInPopup"] = false;

$tdataDeptUnit[".showEditInPopup"] = false;

$tdataDeptUnit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDeptUnit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDeptUnit[".fieldsForRegister"] = array();

$tdataDeptUnit[".listAjax"] = false;

	$tdataDeptUnit[".audit"] = false;

	$tdataDeptUnit[".locking"] = false;


$tdataDeptUnit[".list"] = true;


$tdataDeptUnit[".import"] = true;

$tdataDeptUnit[".exportTo"] = true;

$tdataDeptUnit[".printFriendly"] = true;


$tdataDeptUnit[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDeptUnit[".searchSaving"] = false;
//

$tdataDeptUnit[".showSearchPanel"] = true;
		$tdataDeptUnit[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDeptUnit[".isUseAjaxSuggest"] = false;
else 
	$tdataDeptUnit[".isUseAjaxSuggest"] = true;

$tdataDeptUnit[".rowHighlite"] = true;



$tdataDeptUnit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDeptUnit[".isUseTimeForSearch"] = false;





$tdataDeptUnit[".allSearchFields"] = array();
$tdataDeptUnit[".filterFields"] = array();
$tdataDeptUnit[".requiredSearchFields"] = array();

$tdataDeptUnit[".allSearchFields"][] = "Dept Unit";
	

$tdataDeptUnit[".googleLikeFields"] = array();
$tdataDeptUnit[".googleLikeFields"][] = "Dept Unit";


$tdataDeptUnit[".advSearchFields"] = array();
$tdataDeptUnit[".advSearchFields"][] = "Dept Unit";

$tdataDeptUnit[".tableType"] = "list";

$tdataDeptUnit[".printerPageOrientation"] = 0;
$tdataDeptUnit[".nPrinterPageScale"] = 100;

$tdataDeptUnit[".nPrinterSplitRecords"] = 40;

$tdataDeptUnit[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataDeptUnit[".pageSize"] = 20;

$tdataDeptUnit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDeptUnit[".strOrderBy"] = $tstrOrderBy;

$tdataDeptUnit[".orderindexes"] = array();

$tdataDeptUnit[".sqlHead"] = "SELECT Distinct concat(department, '-', unit) AS `Dept Unit`";
$tdataDeptUnit[".sqlFrom"] = "FROM hris_job";
$tdataDeptUnit[".sqlWhereExpr"] = "";
$tdataDeptUnit[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDeptUnit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDeptUnit[".arrGroupsPerPage"] = $arrGPP;

$tdataDeptUnit[".highlightSearchResults"] = true;

$tableKeysDeptUnit = array();
$tdataDeptUnit[".Keys"] = $tableKeysDeptUnit;

$tdataDeptUnit[".listFields"] = array();
$tdataDeptUnit[".listFields"][] = "Dept Unit";

$tdataDeptUnit[".hideMobileList"] = array();


$tdataDeptUnit[".viewFields"] = array();
$tdataDeptUnit[".viewFields"][] = "Dept Unit";

$tdataDeptUnit[".addFields"] = array();

$tdataDeptUnit[".inlineAddFields"] = array();

$tdataDeptUnit[".editFields"] = array();

$tdataDeptUnit[".inlineEditFields"] = array();

$tdataDeptUnit[".exportFields"] = array();
$tdataDeptUnit[".exportFields"][] = "Dept Unit";

$tdataDeptUnit[".importFields"] = array();
$tdataDeptUnit[".importFields"][] = "Dept Unit";

$tdataDeptUnit[".printFields"] = array();
$tdataDeptUnit[".printFields"][] = "Dept Unit";

//	Dept Unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Dept Unit";
	$fdata["GoodName"] = "Dept_Unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DeptUnit","Dept_Unit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dept Unit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(department, '-', unit)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDeptUnit["Dept Unit"] = $fdata;

	
$tables_data["DeptUnit"]=&$tdataDeptUnit;
$field_labels["DeptUnit"] = &$fieldLabelsDeptUnit;
$fieldToolTips["DeptUnit"] = &$fieldToolTipsDeptUnit;
$page_titles["DeptUnit"] = &$pageTitlesDeptUnit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DeptUnit"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["DeptUnit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DeptUnit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT Distinct";
$proto0["m_strFieldList"] = "concat(department, '-', unit) AS `Dept Unit`";
$proto0["m_strFrom"] = "FROM hris_job";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "department"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "unit"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "concat(department, '-', unit)";
$proto5["m_srcTableName"] = "DeptUnit";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Dept Unit";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hris_job";
$proto11["m_srcTableName"] = "DeptUnit";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "empID";
$proto11["m_columns"][] = "department";
$proto11["m_columns"][] = "unit";
$proto11["m_columns"][] = "jobtitle";
$proto11["m_columns"][] = "jobdescription";
$proto11["m_columns"][] = "datehired";
$proto11["m_columns"][] = "reference";
$proto11["m_columns"][] = "dateend";
$proto11["m_columns"][] = "type";
$proto11["m_columns"][] = "category";
$proto11["m_columns"][] = "empstatus";
$proto11["m_columns"][] = "personnelID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hris_job";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "DeptUnit";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DeptUnit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DeptUnit = createSqlQuery_DeptUnit();


	
	
	
$tdataDeptUnit[".sqlquery"] = $queryData_DeptUnit;

$tableEvents["DeptUnit"] = new eventsBase;
$tdataDeptUnit[".hasEvents"] = false;

?>