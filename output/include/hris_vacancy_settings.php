<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_vacancy = array();	
	$tdatahris_vacancy[".truncateText"] = true;
	$tdatahris_vacancy[".NumberOfChars"] = 80; 
	$tdatahris_vacancy[".ShortName"] = "hris_vacancy";
	$tdatahris_vacancy[".OwnerID"] = "";
	$tdatahris_vacancy[".OriginalTable"] = "hris_vacancy";

//	field labels
$fieldLabelshris_vacancy = array();
$fieldToolTipshris_vacancy = array();
$pageTitleshris_vacancy = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_vacancy["English"] = array();
	$fieldToolTipshris_vacancy["English"] = array();
	$pageTitleshris_vacancy["English"] = array();
	$fieldLabelshris_vacancy["English"]["ID"] = "ID";
	$fieldToolTipshris_vacancy["English"]["ID"] = "";
	$fieldLabelshris_vacancy["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_vacancy["English"]["jobtitle"] = "";
	$fieldLabelshris_vacancy["English"]["jobdesc"] = "Jobdesc";
	$fieldToolTipshris_vacancy["English"]["jobdesc"] = "";
	$fieldLabelshris_vacancy["English"]["deptunit"] = "Deptunit";
	$fieldToolTipshris_vacancy["English"]["deptunit"] = "";
	$fieldLabelshris_vacancy["English"]["validity"] = "Validity";
	$fieldToolTipshris_vacancy["English"]["validity"] = "";
	if (count($fieldToolTipshris_vacancy["English"]))
		$tdatahris_vacancy[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_vacancy[""] = array();
	$fieldToolTipshris_vacancy[""] = array();
	$pageTitleshris_vacancy[""] = array();
	$fieldLabelshris_vacancy[""]["ID"] = "ID";
	$fieldToolTipshris_vacancy[""]["ID"] = "";
	$fieldLabelshris_vacancy[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_vacancy[""]["jobtitle"] = "";
	$fieldLabelshris_vacancy[""]["jobdesc"] = "Jobdesc";
	$fieldToolTipshris_vacancy[""]["jobdesc"] = "";
	$fieldLabelshris_vacancy[""]["deptunit"] = "Deptunit";
	$fieldToolTipshris_vacancy[""]["deptunit"] = "";
	$fieldLabelshris_vacancy[""]["validity"] = "Validity";
	$fieldToolTipshris_vacancy[""]["validity"] = "";
	if (count($fieldToolTipshris_vacancy[""]))
		$tdatahris_vacancy[".isUseToolTips"] = true;
}
	
	
	$tdatahris_vacancy[".NCSearch"] = true;



$tdatahris_vacancy[".shortTableName"] = "hris_vacancy";
$tdatahris_vacancy[".nSecOptions"] = 0;
$tdatahris_vacancy[".mainTableOwnerID"] = "";
$tdatahris_vacancy[".moveNext"] = 1;
$tdatahris_vacancy[".nType"] = 0;

$tdatahris_vacancy[".strOriginalTableName"] = "hris_vacancy";




$tdatahris_vacancy[".showAddInPopup"] = false;

$tdatahris_vacancy[".showEditInPopup"] = false;

$tdatahris_vacancy[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_vacancy[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_vacancy[".fieldsForRegister"] = array();

$tdatahris_vacancy[".listAjax"] = false;

	$tdatahris_vacancy[".audit"] = false;

	$tdatahris_vacancy[".locking"] = false;

$tdatahris_vacancy[".edit"] = true;

$tdatahris_vacancy[".list"] = true;

$tdatahris_vacancy[".view"] = true;

$tdatahris_vacancy[".import"] = true;

$tdatahris_vacancy[".exportTo"] = true;

$tdatahris_vacancy[".printFriendly"] = true;

$tdatahris_vacancy[".delete"] = true;

$tdatahris_vacancy[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_vacancy[".searchSaving"] = false;
//

$tdatahris_vacancy[".showSearchPanel"] = true;
		$tdatahris_vacancy[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_vacancy[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_vacancy[".isUseAjaxSuggest"] = true;

$tdatahris_vacancy[".rowHighlite"] = true;



$tdatahris_vacancy[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_vacancy[".isUseTimeForSearch"] = false;





$tdatahris_vacancy[".allSearchFields"] = array();
$tdatahris_vacancy[".filterFields"] = array();
$tdatahris_vacancy[".requiredSearchFields"] = array();

$tdatahris_vacancy[".allSearchFields"][] = "ID";
	$tdatahris_vacancy[".allSearchFields"][] = "jobtitle";
	$tdatahris_vacancy[".allSearchFields"][] = "jobdesc";
	$tdatahris_vacancy[".allSearchFields"][] = "deptunit";
	$tdatahris_vacancy[".allSearchFields"][] = "validity";
	
$tdatahris_vacancy[".filterFields"][] = "deptunit";	

$tdatahris_vacancy[".googleLikeFields"] = array();
$tdatahris_vacancy[".googleLikeFields"][] = "ID";
$tdatahris_vacancy[".googleLikeFields"][] = "jobtitle";
$tdatahris_vacancy[".googleLikeFields"][] = "jobdesc";
$tdatahris_vacancy[".googleLikeFields"][] = "deptunit";
$tdatahris_vacancy[".googleLikeFields"][] = "validity";


$tdatahris_vacancy[".advSearchFields"] = array();
$tdatahris_vacancy[".advSearchFields"][] = "ID";
$tdatahris_vacancy[".advSearchFields"][] = "jobtitle";
$tdatahris_vacancy[".advSearchFields"][] = "jobdesc";
$tdatahris_vacancy[".advSearchFields"][] = "deptunit";
$tdatahris_vacancy[".advSearchFields"][] = "validity";

$tdatahris_vacancy[".tableType"] = "list";

$tdatahris_vacancy[".printerPageOrientation"] = 0;
$tdatahris_vacancy[".nPrinterPageScale"] = 100;

$tdatahris_vacancy[".nPrinterSplitRecords"] = 40;

$tdatahris_vacancy[".nPrinterPDFSplitRecords"] = 40;





	
$tdatahris_vacancy[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdatahris_vacancy[".pageSize"] = 20;

$tdatahris_vacancy[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY validity";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_vacancy[".strOrderBy"] = $tstrOrderBy;

$tdatahris_vacancy[".orderindexes"] = array();
$tdatahris_vacancy[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "validity");

$tdatahris_vacancy[".sqlHead"] = "SELECT ID,  jobtitle,  jobdesc,  deptunit,  validity";
$tdatahris_vacancy[".sqlFrom"] = "FROM hris_vacancy";
$tdatahris_vacancy[".sqlWhereExpr"] = "";
$tdatahris_vacancy[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_vacancy[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_vacancy[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_vacancy[".highlightSearchResults"] = true;

$tableKeyshris_vacancy = array();
$tableKeyshris_vacancy[] = "ID";
$tdatahris_vacancy[".Keys"] = $tableKeyshris_vacancy;

$tdatahris_vacancy[".listFields"] = array();
$tdatahris_vacancy[".listFields"][] = "ID";
$tdatahris_vacancy[".listFields"][] = "jobtitle";
$tdatahris_vacancy[".listFields"][] = "deptunit";
$tdatahris_vacancy[".listFields"][] = "validity";

$tdatahris_vacancy[".hideMobileList"] = array();


$tdatahris_vacancy[".viewFields"] = array();
$tdatahris_vacancy[".viewFields"][] = "ID";
$tdatahris_vacancy[".viewFields"][] = "jobtitle";
$tdatahris_vacancy[".viewFields"][] = "jobdesc";
$tdatahris_vacancy[".viewFields"][] = "deptunit";
$tdatahris_vacancy[".viewFields"][] = "validity";

$tdatahris_vacancy[".addFields"] = array();
$tdatahris_vacancy[".addFields"][] = "jobtitle";
$tdatahris_vacancy[".addFields"][] = "jobdesc";
$tdatahris_vacancy[".addFields"][] = "deptunit";
$tdatahris_vacancy[".addFields"][] = "validity";

$tdatahris_vacancy[".inlineAddFields"] = array();

$tdatahris_vacancy[".editFields"] = array();
$tdatahris_vacancy[".editFields"][] = "jobtitle";
$tdatahris_vacancy[".editFields"][] = "jobdesc";
$tdatahris_vacancy[".editFields"][] = "deptunit";
$tdatahris_vacancy[".editFields"][] = "validity";

$tdatahris_vacancy[".inlineEditFields"] = array();

$tdatahris_vacancy[".exportFields"] = array();
$tdatahris_vacancy[".exportFields"][] = "ID";
$tdatahris_vacancy[".exportFields"][] = "jobdesc";
$tdatahris_vacancy[".exportFields"][] = "jobtitle";
$tdatahris_vacancy[".exportFields"][] = "deptunit";
$tdatahris_vacancy[".exportFields"][] = "validity";

$tdatahris_vacancy[".importFields"] = array();
$tdatahris_vacancy[".importFields"][] = "ID";
$tdatahris_vacancy[".importFields"][] = "jobtitle";
$tdatahris_vacancy[".importFields"][] = "jobdesc";
$tdatahris_vacancy[".importFields"][] = "deptunit";
$tdatahris_vacancy[".importFields"][] = "validity";

$tdatahris_vacancy[".printFields"] = array();
$tdatahris_vacancy[".printFields"][] = "ID";
$tdatahris_vacancy[".printFields"][] = "jobdesc";
$tdatahris_vacancy[".printFields"][] = "jobtitle";
$tdatahris_vacancy[".printFields"][] = "deptunit";
$tdatahris_vacancy[".printFields"][] = "validity";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_vacancy";
	$fdata["Label"] = GetFieldLabel("hris_vacancy","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_vacancy["ID"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_vacancy";
	$fdata["Label"] = GetFieldLabel("hris_vacancy","jobtitle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hris_job";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "jobtitle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "jobtitle";
	
		
	$edata["LookupOrderBy"] = "jobtitle";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatahris_vacancy["jobtitle"] = $fdata;
//	jobdesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jobdesc";
	$fdata["GoodName"] = "jobdesc";
	$fdata["ownerTable"] = "hris_vacancy";
	$fdata["Label"] = GetFieldLabel("hris_vacancy","jobdesc"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobdesc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobdesc";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 200;
			$edata["nCols"] = 500;
	
		
		
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

	

	
	$tdatahris_vacancy["jobdesc"] = $fdata;
//	deptunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "deptunit";
	$fdata["GoodName"] = "deptunit";
	$fdata["ownerTable"] = "hris_vacancy";
	$fdata["Label"] = GetFieldLabel("hris_vacancy","deptunit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "deptunit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deptunit";
	
		
		
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
	$edata["LookupTable"] = "DeptUnit";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Dept Unit";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Dept Unit";
	
		
	$edata["LookupOrderBy"] = "Dept Unit";
	
		
			
		
				
	
	
		
		
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

	
	$tdatahris_vacancy["deptunit"] = $fdata;
//	validity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "validity";
	$fdata["GoodName"] = "validity";
	$fdata["ownerTable"] = "hris_vacancy";
	$fdata["Label"] = GetFieldLabel("hris_vacancy","validity"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "validity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validity";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Long Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_vacancy["validity"] = $fdata;

	
$tables_data["hris_vacancy"]=&$tdatahris_vacancy;
$field_labels["hris_vacancy"] = &$fieldLabelshris_vacancy;
$fieldToolTips["hris_vacancy"] = &$fieldToolTipshris_vacancy;
$page_titles["hris_vacancy"] = &$pageTitleshris_vacancy;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_vacancy"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_vacancy"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_vacancy()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  jobtitle,  jobdesc,  deptunit,  validity";
$proto0["m_strFrom"] = "FROM hris_vacancy";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY validity";
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
	"m_strName" => "ID",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_vacancy";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto7["m_sql"] = "jobtitle";
$proto7["m_srcTableName"] = "hris_vacancy";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jobdesc",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto9["m_sql"] = "jobdesc";
$proto9["m_srcTableName"] = "hris_vacancy";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "deptunit",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto11["m_sql"] = "deptunit";
$proto11["m_srcTableName"] = "hris_vacancy";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "validity",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto13["m_sql"] = "validity";
$proto13["m_srcTableName"] = "hris_vacancy";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "hris_vacancy";
$proto16["m_srcTableName"] = "hris_vacancy";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "jobtitle";
$proto16["m_columns"][] = "jobdesc";
$proto16["m_columns"][] = "deptunit";
$proto16["m_columns"][] = "validity";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "hris_vacancy";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "hris_vacancy";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "validity",
	"m_strTable" => "hris_vacancy",
	"m_srcTableName" => "hris_vacancy"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 1;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hris_vacancy";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_vacancy = createSqlQuery_hris_vacancy();


	
					
	
$tdatahris_vacancy[".sqlquery"] = $queryData_hris_vacancy;

$tableEvents["hris_vacancy"] = new eventsBase;
$tdatahris_vacancy[".hasEvents"] = false;

?>