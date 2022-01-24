<?php
require_once(getabspath("classes/cipherer.php"));




$tdataJob_Titles = array();	
	$tdataJob_Titles[".truncateText"] = true;
	$tdataJob_Titles[".NumberOfChars"] = 80; 
	$tdataJob_Titles[".ShortName"] = "Job_Titles";
	$tdataJob_Titles[".OwnerID"] = "";
	$tdataJob_Titles[".OriginalTable"] = "hris_job";

//	field labels
$fieldLabelsJob_Titles = array();
$fieldToolTipsJob_Titles = array();
$pageTitlesJob_Titles = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsJob_Titles["English"] = array();
	$fieldToolTipsJob_Titles["English"] = array();
	$pageTitlesJob_Titles["English"] = array();
	$fieldLabelsJob_Titles["English"]["department"] = "Department";
	$fieldToolTipsJob_Titles["English"]["department"] = "";
	$fieldLabelsJob_Titles["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipsJob_Titles["English"]["jobtitle"] = "";
	$fieldLabelsJob_Titles["English"]["unit"] = "Unit";
	$fieldToolTipsJob_Titles["English"]["unit"] = "";
	if (count($fieldToolTipsJob_Titles["English"]))
		$tdataJob_Titles[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsJob_Titles[""] = array();
	$fieldToolTipsJob_Titles[""] = array();
	$pageTitlesJob_Titles[""] = array();
	$fieldLabelsJob_Titles[""]["department"] = "Department";
	$fieldToolTipsJob_Titles[""]["department"] = "";
	$fieldLabelsJob_Titles[""]["unit"] = "Unit";
	$fieldToolTipsJob_Titles[""]["unit"] = "";
	$fieldLabelsJob_Titles[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipsJob_Titles[""]["jobtitle"] = "";
	if (count($fieldToolTipsJob_Titles[""]))
		$tdataJob_Titles[".isUseToolTips"] = true;
}
	
	
	$tdataJob_Titles[".NCSearch"] = true;



$tdataJob_Titles[".shortTableName"] = "Job_Titles";
$tdataJob_Titles[".nSecOptions"] = 0;
$tdataJob_Titles[".recsPerRowList"] = 1;
$tdataJob_Titles[".mainTableOwnerID"] = "";
$tdataJob_Titles[".moveNext"] = 1;
$tdataJob_Titles[".nType"] = 1;

$tdataJob_Titles[".strOriginalTableName"] = "hris_job";




$tdataJob_Titles[".showAddInPopup"] = false;

$tdataJob_Titles[".showEditInPopup"] = false;

$tdataJob_Titles[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataJob_Titles[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataJob_Titles[".fieldsForRegister"] = array();

$tdataJob_Titles[".listAjax"] = false;

	$tdataJob_Titles[".audit"] = false;

	$tdataJob_Titles[".locking"] = false;


$tdataJob_Titles[".list"] = true;

$tdataJob_Titles[".inlineEdit"] = true;
$tdataJob_Titles[".inlineAdd"] = true;

$tdataJob_Titles[".import"] = true;

$tdataJob_Titles[".exportTo"] = true;

$tdataJob_Titles[".printFriendly"] = true;


$tdataJob_Titles[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataJob_Titles[".searchSaving"] = false;
//

$tdataJob_Titles[".showSearchPanel"] = true;
		$tdataJob_Titles[".flexibleSearch"] = true;		

if (isMobile())
	$tdataJob_Titles[".isUseAjaxSuggest"] = false;
else 
	$tdataJob_Titles[".isUseAjaxSuggest"] = true;

$tdataJob_Titles[".rowHighlite"] = true;



$tdataJob_Titles[".addPageEvents"] = false;

// use timepicker for search panel
$tdataJob_Titles[".isUseTimeForSearch"] = false;



$tdataJob_Titles[".useDetailsPreview"] = true;


$tdataJob_Titles[".allSearchFields"] = array();
$tdataJob_Titles[".filterFields"] = array();
$tdataJob_Titles[".requiredSearchFields"] = array();

$tdataJob_Titles[".allSearchFields"][] = "department";
	$tdataJob_Titles[".allSearchFields"][] = "unit";
	$tdataJob_Titles[".allSearchFields"][] = "jobtitle";
	
$tdataJob_Titles[".filterFields"][] = "department";	
$tdataJob_Titles[".filterFields"][] = "jobtitle";	

$tdataJob_Titles[".googleLikeFields"] = array();
$tdataJob_Titles[".googleLikeFields"][] = "department";
$tdataJob_Titles[".googleLikeFields"][] = "unit";
$tdataJob_Titles[".googleLikeFields"][] = "jobtitle";


$tdataJob_Titles[".advSearchFields"] = array();
$tdataJob_Titles[".advSearchFields"][] = "department";
$tdataJob_Titles[".advSearchFields"][] = "unit";
$tdataJob_Titles[".advSearchFields"][] = "jobtitle";

$tdataJob_Titles[".tableType"] = "list";

$tdataJob_Titles[".printerPageOrientation"] = 0;
$tdataJob_Titles[".nPrinterPageScale"] = 100;

$tdataJob_Titles[".nPrinterSplitRecords"] = 40;

$tdataJob_Titles[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataJob_Titles[".pageSize"] = 20;

$tdataJob_Titles[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY department, unit";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataJob_Titles[".strOrderBy"] = $tstrOrderBy;

$tdataJob_Titles[".orderindexes"] = array();
$tdataJob_Titles[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "department");
$tdataJob_Titles[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "unit");

$tdataJob_Titles[".sqlHead"] = "SELECT DISTINCT department,  unit,  jobtitle";
$tdataJob_Titles[".sqlFrom"] = "FROM hris_job";
$tdataJob_Titles[".sqlWhereExpr"] = "";
$tdataJob_Titles[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataJob_Titles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataJob_Titles[".arrGroupsPerPage"] = $arrGPP;

$tdataJob_Titles[".highlightSearchResults"] = true;

$tableKeysJob_Titles = array();
$tableKeysJob_Titles[] = "department";
$tableKeysJob_Titles[] = "unit";
$tableKeysJob_Titles[] = "jobtitle";
$tdataJob_Titles[".Keys"] = $tableKeysJob_Titles;

$tdataJob_Titles[".listFields"] = array();
$tdataJob_Titles[".listFields"][] = "department";
$tdataJob_Titles[".listFields"][] = "unit";
$tdataJob_Titles[".listFields"][] = "jobtitle";

$tdataJob_Titles[".hideMobileList"] = array();


$tdataJob_Titles[".viewFields"] = array();
$tdataJob_Titles[".viewFields"][] = "department";
$tdataJob_Titles[".viewFields"][] = "unit";
$tdataJob_Titles[".viewFields"][] = "jobtitle";

$tdataJob_Titles[".addFields"] = array();
$tdataJob_Titles[".addFields"][] = "department";
$tdataJob_Titles[".addFields"][] = "unit";
$tdataJob_Titles[".addFields"][] = "jobtitle";

$tdataJob_Titles[".inlineAddFields"] = array();
$tdataJob_Titles[".inlineAddFields"][] = "department";
$tdataJob_Titles[".inlineAddFields"][] = "unit";
$tdataJob_Titles[".inlineAddFields"][] = "jobtitle";

$tdataJob_Titles[".editFields"] = array();
$tdataJob_Titles[".editFields"][] = "department";
$tdataJob_Titles[".editFields"][] = "unit";
$tdataJob_Titles[".editFields"][] = "jobtitle";

$tdataJob_Titles[".inlineEditFields"] = array();
$tdataJob_Titles[".inlineEditFields"][] = "department";
$tdataJob_Titles[".inlineEditFields"][] = "unit";
$tdataJob_Titles[".inlineEditFields"][] = "jobtitle";

$tdataJob_Titles[".exportFields"] = array();
$tdataJob_Titles[".exportFields"][] = "department";
$tdataJob_Titles[".exportFields"][] = "unit";
$tdataJob_Titles[".exportFields"][] = "jobtitle";

$tdataJob_Titles[".importFields"] = array();
$tdataJob_Titles[".importFields"][] = "department";
$tdataJob_Titles[".importFields"][] = "unit";
$tdataJob_Titles[".importFields"][] = "jobtitle";

$tdataJob_Titles[".printFields"] = array();
$tdataJob_Titles[".printFields"][] = "department";
$tdataJob_Titles[".printFields"][] = "unit";
$tdataJob_Titles[".printFields"][] = "jobtitle";

//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Job_Titles","department"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hris_job";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "department";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "department";
	
		
	$edata["LookupOrderBy"] = "department";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataJob_Titles["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Job_Titles","unit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hris_job";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "unit";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "unit";
	
		
	$edata["LookupOrderBy"] = "unit";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataJob_Titles["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Job_Titles","jobtitle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobtitle"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobtitle";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataJob_Titles["jobtitle"] = $fdata;

	
$tables_data["Job Titles"]=&$tdataJob_Titles;
$field_labels["Job_Titles"] = &$fieldLabelsJob_Titles;
$fieldToolTips["Job Titles"] = &$fieldToolTipsJob_Titles;
$page_titles["Job_Titles"] = &$pageTitlesJob_Titles;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Job Titles"] = array();
//	hris_job
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_job";
		$detailsParam["dOriginalTable"] = "hris_job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_job";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["Job Titles"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Job Titles"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Job Titles"][$dIndex]["masterKeys"][]="department";

	$detailsTablesData["Job Titles"][$dIndex]["masterKeys"][]="unit";

	$detailsTablesData["Job Titles"][$dIndex]["masterKeys"][]="jobtitle";

				$detailsTablesData["Job Titles"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Job Titles"][$dIndex]["detailKeys"][]="department";

		
	$detailsTablesData["Job Titles"][$dIndex]["detailKeys"][]="unit";

		
	$detailsTablesData["Job Titles"][$dIndex]["detailKeys"][]="jobtitle";
	
// tables which are master tables for current table (detail)
$masterTablesData["Job Titles"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Job_Titles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "department,  unit,  jobtitle";
$proto0["m_strFrom"] = "FROM hris_job";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY department, unit";
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
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Job Titles"
));

$proto5["m_sql"] = "department";
$proto5["m_srcTableName"] = "Job Titles";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Job Titles"
));

$proto7["m_sql"] = "unit";
$proto7["m_srcTableName"] = "Job Titles";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Job Titles"
));

$proto9["m_sql"] = "jobtitle";
$proto9["m_srcTableName"] = "Job Titles";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "hris_job";
$proto12["m_srcTableName"] = "Job Titles";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "empID";
$proto12["m_columns"][] = "department";
$proto12["m_columns"][] = "unit";
$proto12["m_columns"][] = "jobtitle";
$proto12["m_columns"][] = "jobdescription";
$proto12["m_columns"][] = "datehired";
$proto12["m_columns"][] = "reference";
$proto12["m_columns"][] = "dateend";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "category";
$proto12["m_columns"][] = "empstatus";
$proto12["m_columns"][] = "personnelID";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "hris_job";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Job Titles";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Job Titles"
));

$proto15["m_column"]=$obj;
$proto15["m_bAsc"] = 1;
$proto15["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto15);

$proto0["m_orderby"][]=$obj;					
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Job Titles"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 1;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Job Titles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Job_Titles = createSqlQuery_Job_Titles();


	
			
	
$tdataJob_Titles[".sqlquery"] = $queryData_Job_Titles;

$tableEvents["Job Titles"] = new eventsBase;
$tdataJob_Titles[".hasEvents"] = false;

?>