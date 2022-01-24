<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_job = array();	
	$tdatahris_job[".truncateText"] = true;
	$tdatahris_job[".NumberOfChars"] = 80; 
	$tdatahris_job[".ShortName"] = "hris_job";
	$tdatahris_job[".OwnerID"] = "";
	$tdatahris_job[".OriginalTable"] = "hris_job";

//	field labels
$fieldLabelshris_job = array();
$fieldToolTipshris_job = array();
$pageTitleshris_job = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_job["English"] = array();
	$fieldToolTipshris_job["English"] = array();
	$pageTitleshris_job["English"] = array();
	$fieldLabelshris_job["English"]["ID"] = "ID";
	$fieldToolTipshris_job["English"]["ID"] = "";
	$fieldLabelshris_job["English"]["empID"] = "Emp ID";
	$fieldToolTipshris_job["English"]["empID"] = "";
	$fieldLabelshris_job["English"]["department"] = "Department";
	$fieldToolTipshris_job["English"]["department"] = "";
	$fieldLabelshris_job["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_job["English"]["jobtitle"] = "";
	$fieldLabelshris_job["English"]["jobdescription"] = "Jobdescription";
	$fieldToolTipshris_job["English"]["jobdescription"] = "";
	$fieldLabelshris_job["English"]["datehired"] = "Datehired";
	$fieldToolTipshris_job["English"]["datehired"] = "";
	$fieldLabelshris_job["English"]["reference"] = "Reference";
	$fieldToolTipshris_job["English"]["reference"] = "";
	$fieldLabelshris_job["English"]["dateend"] = "Dateend";
	$fieldToolTipshris_job["English"]["dateend"] = "";
	$fieldLabelshris_job["English"]["type"] = "Type";
	$fieldToolTipshris_job["English"]["type"] = "";
	$fieldLabelshris_job["English"]["category"] = "Category";
	$fieldToolTipshris_job["English"]["category"] = "";
	$fieldLabelshris_job["English"]["empstatus"] = "Empstatus";
	$fieldToolTipshris_job["English"]["empstatus"] = "";
	$fieldLabelshris_job["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_job["English"]["personnelID"] = "";
	$fieldLabelshris_job["English"]["unit"] = "Unit";
	$fieldToolTipshris_job["English"]["unit"] = "";
	if (count($fieldToolTipshris_job["English"]))
		$tdatahris_job[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_job[""] = array();
	$fieldToolTipshris_job[""] = array();
	$pageTitleshris_job[""] = array();
	$fieldLabelshris_job[""]["ID"] = "ID";
	$fieldToolTipshris_job[""]["ID"] = "";
	if (count($fieldToolTipshris_job[""]))
		$tdatahris_job[".isUseToolTips"] = true;
}
	
	
	$tdatahris_job[".NCSearch"] = true;



$tdatahris_job[".shortTableName"] = "hris_job";
$tdatahris_job[".nSecOptions"] = 0;
$tdatahris_job[".recsPerRowList"] = 1;
$tdatahris_job[".mainTableOwnerID"] = "";
$tdatahris_job[".moveNext"] = 1;
$tdatahris_job[".nType"] = 0;

$tdatahris_job[".strOriginalTableName"] = "hris_job";




$tdatahris_job[".showAddInPopup"] = false;

$tdatahris_job[".showEditInPopup"] = false;

$tdatahris_job[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_job[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_job[".fieldsForRegister"] = array();

$tdatahris_job[".listAjax"] = false;

	$tdatahris_job[".audit"] = false;

	$tdatahris_job[".locking"] = false;

$tdatahris_job[".edit"] = true;

$tdatahris_job[".list"] = true;

$tdatahris_job[".inlineEdit"] = true;
$tdatahris_job[".inlineAdd"] = true;
$tdatahris_job[".view"] = true;

$tdatahris_job[".import"] = true;

$tdatahris_job[".exportTo"] = true;

$tdatahris_job[".printFriendly"] = true;

$tdatahris_job[".delete"] = true;

$tdatahris_job[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_job[".searchSaving"] = false;
//

$tdatahris_job[".showSearchPanel"] = true;
		$tdatahris_job[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_job[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_job[".isUseAjaxSuggest"] = true;

$tdatahris_job[".rowHighlite"] = true;



$tdatahris_job[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_job[".isUseTimeForSearch"] = false;





$tdatahris_job[".allSearchFields"] = array();
$tdatahris_job[".filterFields"] = array();
$tdatahris_job[".requiredSearchFields"] = array();

$tdatahris_job[".allSearchFields"][] = "ID";
	$tdatahris_job[".allSearchFields"][] = "personnelID";
	$tdatahris_job[".allSearchFields"][] = "empID";
	$tdatahris_job[".allSearchFields"][] = "department";
	$tdatahris_job[".allSearchFields"][] = "unit";
	$tdatahris_job[".allSearchFields"][] = "jobtitle";
	$tdatahris_job[".allSearchFields"][] = "jobdescription";
	$tdatahris_job[".allSearchFields"][] = "datehired";
	$tdatahris_job[".allSearchFields"][] = "reference";
	$tdatahris_job[".allSearchFields"][] = "dateend";
	$tdatahris_job[".allSearchFields"][] = "type";
	$tdatahris_job[".allSearchFields"][] = "category";
	$tdatahris_job[".allSearchFields"][] = "empstatus";
	
$tdatahris_job[".filterFields"][] = "department";	
$tdatahris_job[".filterFields"][] = "jobtitle";	

$tdatahris_job[".googleLikeFields"] = array();
$tdatahris_job[".googleLikeFields"][] = "ID";
$tdatahris_job[".googleLikeFields"][] = "empID";
$tdatahris_job[".googleLikeFields"][] = "department";
$tdatahris_job[".googleLikeFields"][] = "unit";
$tdatahris_job[".googleLikeFields"][] = "jobtitle";
$tdatahris_job[".googleLikeFields"][] = "jobdescription";
$tdatahris_job[".googleLikeFields"][] = "datehired";
$tdatahris_job[".googleLikeFields"][] = "reference";
$tdatahris_job[".googleLikeFields"][] = "dateend";
$tdatahris_job[".googleLikeFields"][] = "type";
$tdatahris_job[".googleLikeFields"][] = "category";
$tdatahris_job[".googleLikeFields"][] = "empstatus";
$tdatahris_job[".googleLikeFields"][] = "personnelID";


$tdatahris_job[".advSearchFields"] = array();
$tdatahris_job[".advSearchFields"][] = "ID";
$tdatahris_job[".advSearchFields"][] = "personnelID";
$tdatahris_job[".advSearchFields"][] = "empID";
$tdatahris_job[".advSearchFields"][] = "department";
$tdatahris_job[".advSearchFields"][] = "unit";
$tdatahris_job[".advSearchFields"][] = "jobtitle";
$tdatahris_job[".advSearchFields"][] = "jobdescription";
$tdatahris_job[".advSearchFields"][] = "datehired";
$tdatahris_job[".advSearchFields"][] = "reference";
$tdatahris_job[".advSearchFields"][] = "dateend";
$tdatahris_job[".advSearchFields"][] = "type";
$tdatahris_job[".advSearchFields"][] = "category";
$tdatahris_job[".advSearchFields"][] = "empstatus";

$tdatahris_job[".tableType"] = "list";

$tdatahris_job[".printerPageOrientation"] = 0;
$tdatahris_job[".nPrinterPageScale"] = 100;

$tdatahris_job[".nPrinterSplitRecords"] = 40;

$tdatahris_job[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_job[".pageSize"] = 20;

$tdatahris_job[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_job[".strOrderBy"] = $tstrOrderBy;

$tdatahris_job[".orderindexes"] = array();

$tdatahris_job[".sqlHead"] = "SELECT ID,   empID,   department,   unit,   jobtitle,   jobdescription,   datehired,   reference,   dateend,   `type`,   category,   empstatus,   personnelID";
$tdatahris_job[".sqlFrom"] = "FROM hris_job";
$tdatahris_job[".sqlWhereExpr"] = "";
$tdatahris_job[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_job[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_job[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_job[".highlightSearchResults"] = true;

$tableKeyshris_job = array();
$tableKeyshris_job[] = "ID";
$tdatahris_job[".Keys"] = $tableKeyshris_job;

$tdatahris_job[".listFields"] = array();
$tdatahris_job[".listFields"][] = "ID";
$tdatahris_job[".listFields"][] = "personnelID";
$tdatahris_job[".listFields"][] = "empID";
$tdatahris_job[".listFields"][] = "department";
$tdatahris_job[".listFields"][] = "unit";
$tdatahris_job[".listFields"][] = "jobtitle";
$tdatahris_job[".listFields"][] = "jobdescription";
$tdatahris_job[".listFields"][] = "datehired";
$tdatahris_job[".listFields"][] = "reference";
$tdatahris_job[".listFields"][] = "dateend";
$tdatahris_job[".listFields"][] = "type";
$tdatahris_job[".listFields"][] = "category";
$tdatahris_job[".listFields"][] = "empstatus";

$tdatahris_job[".hideMobileList"] = array();


$tdatahris_job[".viewFields"] = array();
$tdatahris_job[".viewFields"][] = "ID";
$tdatahris_job[".viewFields"][] = "personnelID";
$tdatahris_job[".viewFields"][] = "empID";
$tdatahris_job[".viewFields"][] = "department";
$tdatahris_job[".viewFields"][] = "unit";
$tdatahris_job[".viewFields"][] = "jobtitle";
$tdatahris_job[".viewFields"][] = "jobdescription";
$tdatahris_job[".viewFields"][] = "datehired";
$tdatahris_job[".viewFields"][] = "reference";
$tdatahris_job[".viewFields"][] = "dateend";
$tdatahris_job[".viewFields"][] = "type";
$tdatahris_job[".viewFields"][] = "category";
$tdatahris_job[".viewFields"][] = "empstatus";

$tdatahris_job[".addFields"] = array();
$tdatahris_job[".addFields"][] = "personnelID";
$tdatahris_job[".addFields"][] = "empID";
$tdatahris_job[".addFields"][] = "department";
$tdatahris_job[".addFields"][] = "unit";
$tdatahris_job[".addFields"][] = "jobtitle";
$tdatahris_job[".addFields"][] = "jobdescription";
$tdatahris_job[".addFields"][] = "datehired";
$tdatahris_job[".addFields"][] = "reference";
$tdatahris_job[".addFields"][] = "dateend";
$tdatahris_job[".addFields"][] = "type";
$tdatahris_job[".addFields"][] = "category";
$tdatahris_job[".addFields"][] = "empstatus";

$tdatahris_job[".inlineAddFields"] = array();
$tdatahris_job[".inlineAddFields"][] = "personnelID";
$tdatahris_job[".inlineAddFields"][] = "empID";
$tdatahris_job[".inlineAddFields"][] = "department";
$tdatahris_job[".inlineAddFields"][] = "unit";
$tdatahris_job[".inlineAddFields"][] = "jobtitle";
$tdatahris_job[".inlineAddFields"][] = "jobdescription";
$tdatahris_job[".inlineAddFields"][] = "datehired";
$tdatahris_job[".inlineAddFields"][] = "reference";
$tdatahris_job[".inlineAddFields"][] = "dateend";
$tdatahris_job[".inlineAddFields"][] = "type";
$tdatahris_job[".inlineAddFields"][] = "category";
$tdatahris_job[".inlineAddFields"][] = "empstatus";

$tdatahris_job[".editFields"] = array();
$tdatahris_job[".editFields"][] = "personnelID";
$tdatahris_job[".editFields"][] = "empID";
$tdatahris_job[".editFields"][] = "department";
$tdatahris_job[".editFields"][] = "unit";
$tdatahris_job[".editFields"][] = "jobtitle";
$tdatahris_job[".editFields"][] = "jobdescription";
$tdatahris_job[".editFields"][] = "datehired";
$tdatahris_job[".editFields"][] = "reference";
$tdatahris_job[".editFields"][] = "dateend";
$tdatahris_job[".editFields"][] = "type";
$tdatahris_job[".editFields"][] = "category";
$tdatahris_job[".editFields"][] = "empstatus";

$tdatahris_job[".inlineEditFields"] = array();
$tdatahris_job[".inlineEditFields"][] = "personnelID";
$tdatahris_job[".inlineEditFields"][] = "empID";
$tdatahris_job[".inlineEditFields"][] = "department";
$tdatahris_job[".inlineEditFields"][] = "unit";
$tdatahris_job[".inlineEditFields"][] = "jobtitle";
$tdatahris_job[".inlineEditFields"][] = "jobdescription";
$tdatahris_job[".inlineEditFields"][] = "datehired";
$tdatahris_job[".inlineEditFields"][] = "reference";
$tdatahris_job[".inlineEditFields"][] = "dateend";
$tdatahris_job[".inlineEditFields"][] = "type";
$tdatahris_job[".inlineEditFields"][] = "category";
$tdatahris_job[".inlineEditFields"][] = "empstatus";

$tdatahris_job[".exportFields"] = array();
$tdatahris_job[".exportFields"][] = "ID";
$tdatahris_job[".exportFields"][] = "personnelID";
$tdatahris_job[".exportFields"][] = "empID";
$tdatahris_job[".exportFields"][] = "department";
$tdatahris_job[".exportFields"][] = "unit";
$tdatahris_job[".exportFields"][] = "jobtitle";
$tdatahris_job[".exportFields"][] = "jobdescription";
$tdatahris_job[".exportFields"][] = "datehired";
$tdatahris_job[".exportFields"][] = "reference";
$tdatahris_job[".exportFields"][] = "dateend";
$tdatahris_job[".exportFields"][] = "type";
$tdatahris_job[".exportFields"][] = "category";
$tdatahris_job[".exportFields"][] = "empstatus";

$tdatahris_job[".importFields"] = array();
$tdatahris_job[".importFields"][] = "ID";
$tdatahris_job[".importFields"][] = "empID";
$tdatahris_job[".importFields"][] = "department";
$tdatahris_job[".importFields"][] = "unit";
$tdatahris_job[".importFields"][] = "jobtitle";
$tdatahris_job[".importFields"][] = "jobdescription";
$tdatahris_job[".importFields"][] = "datehired";
$tdatahris_job[".importFields"][] = "reference";
$tdatahris_job[".importFields"][] = "dateend";
$tdatahris_job[".importFields"][] = "type";
$tdatahris_job[".importFields"][] = "category";
$tdatahris_job[".importFields"][] = "empstatus";
$tdatahris_job[".importFields"][] = "personnelID";

$tdatahris_job[".printFields"] = array();
$tdatahris_job[".printFields"][] = "ID";
$tdatahris_job[".printFields"][] = "personnelID";
$tdatahris_job[".printFields"][] = "empID";
$tdatahris_job[".printFields"][] = "department";
$tdatahris_job[".printFields"][] = "unit";
$tdatahris_job[".printFields"][] = "jobtitle";
$tdatahris_job[".printFields"][] = "jobdescription";
$tdatahris_job[".printFields"][] = "datehired";
$tdatahris_job[".printFields"][] = "reference";
$tdatahris_job[".printFields"][] = "dateend";
$tdatahris_job[".printFields"][] = "type";
$tdatahris_job[".printFields"][] = "category";
$tdatahris_job[".printFields"][] = "empstatus";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","ID"); 
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

	

	
	$tdatahris_job["ID"] = $fdata;
//	empID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empID";
	$fdata["GoodName"] = "empID";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","empID"); 
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
	
		$fdata["strField"] = "empID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empID";
	
		
		
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

	

	
	$tdatahris_job["empID"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","department"); 
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

	
	$tdatahris_job["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","unit"); 
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

	

	
	$tdatahris_job["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","jobtitle"); 
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

	
	$tdatahris_job["jobtitle"] = $fdata;
//	jobdescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jobdescription";
	$fdata["GoodName"] = "jobdescription";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","jobdescription"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobdescription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobdescription";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatahris_job["jobdescription"] = $fdata;
//	datehired
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "datehired";
	$fdata["GoodName"] = "datehired";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","datehired"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "datehired"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datehired";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_job["datehired"] = $fdata;
//	reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reference";
	$fdata["GoodName"] = "reference";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","reference"); 
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
	
		$fdata["strField"] = "reference"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reference";
	
		
		
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

	

	
	$tdatahris_job["reference"] = $fdata;
//	dateend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dateend";
	$fdata["GoodName"] = "dateend";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","dateend"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dateend"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateend";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_job["dateend"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","type"); 
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
	
		$fdata["strField"] = "type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";
	
		
		
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

	

	
	$tdatahris_job["type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","category"); 
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
	
		$fdata["strField"] = "category"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";
	
		
		
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

	

	
	$tdatahris_job["category"] = $fdata;
//	empstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "empstatus";
	$fdata["GoodName"] = "empstatus";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","empstatus"); 
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
	
		$fdata["strField"] = "empstatus"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empstatus";
	
		
		
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

	

	
	$tdatahris_job["empstatus"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_job","personnelID"); 
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
	
		$fdata["strField"] = "personnelID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personnelID";
	
		
		
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
	$edata["LookupTable"] = "hris_personnel";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullName";
	
		
	$edata["LookupOrderBy"] = "fullName";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatahris_job["personnelID"] = $fdata;

	
$tables_data["hris_job"]=&$tdatahris_job;
$field_labels["hris_job"] = &$fieldLabelshris_job;
$fieldToolTips["hris_job"] = &$fieldToolTipshris_job;
$page_titles["hris_job"] = &$pageTitleshris_job;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_job"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_job"] = array();


	
				$strOriginalDetailsTable="hris_personnel";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hris_personnel";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hris_personnel";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hris_job"][0] = $masterParams;	
				$masterTablesData["hris_job"][0]["masterKeys"] = array();
	$masterTablesData["hris_job"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_job"][0]["detailKeys"] = array();
	$masterTablesData["hris_job"][0]["detailKeys"][]="personnelID";
		
	
				$strOriginalDetailsTable="hris_job";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Job Titles";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Job_Titles";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hris_job"][1] = $masterParams;	
				$masterTablesData["hris_job"][1]["masterKeys"] = array();
	$masterTablesData["hris_job"][1]["masterKeys"][]="department";
				$masterTablesData["hris_job"][1]["masterKeys"][]="unit";
				$masterTablesData["hris_job"][1]["masterKeys"][]="jobtitle";
				$masterTablesData["hris_job"][1]["detailKeys"] = array();
	$masterTablesData["hris_job"][1]["detailKeys"][]="department";
				$masterTablesData["hris_job"][1]["detailKeys"][]="unit";
				$masterTablesData["hris_job"][1]["detailKeys"][]="jobtitle";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_job()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   empID,   department,   unit,   jobtitle,   jobdescription,   datehired,   reference,   dateend,   `type`,   category,   empstatus,   personnelID";
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
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_job";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "empID",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto7["m_sql"] = "empID";
$proto7["m_srcTableName"] = "hris_job";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto9["m_sql"] = "department";
$proto9["m_srcTableName"] = "hris_job";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto11["m_sql"] = "unit";
$proto11["m_srcTableName"] = "hris_job";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto13["m_sql"] = "jobtitle";
$proto13["m_srcTableName"] = "hris_job";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jobdescription",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto15["m_sql"] = "jobdescription";
$proto15["m_srcTableName"] = "hris_job";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "datehired",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto17["m_sql"] = "datehired";
$proto17["m_srcTableName"] = "hris_job";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "reference",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto19["m_sql"] = "reference";
$proto19["m_srcTableName"] = "hris_job";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "dateend",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto21["m_sql"] = "dateend";
$proto21["m_srcTableName"] = "hris_job";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto23["m_sql"] = "`type`";
$proto23["m_srcTableName"] = "hris_job";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto25["m_sql"] = "category";
$proto25["m_srcTableName"] = "hris_job";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "empstatus",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto27["m_sql"] = "empstatus";
$proto27["m_srcTableName"] = "hris_job";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_job"
));

$proto29["m_sql"] = "personnelID";
$proto29["m_srcTableName"] = "hris_job";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "hris_job";
$proto32["m_srcTableName"] = "hris_job";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "ID";
$proto32["m_columns"][] = "empID";
$proto32["m_columns"][] = "department";
$proto32["m_columns"][] = "unit";
$proto32["m_columns"][] = "jobtitle";
$proto32["m_columns"][] = "jobdescription";
$proto32["m_columns"][] = "datehired";
$proto32["m_columns"][] = "reference";
$proto32["m_columns"][] = "dateend";
$proto32["m_columns"][] = "type";
$proto32["m_columns"][] = "category";
$proto32["m_columns"][] = "empstatus";
$proto32["m_columns"][] = "personnelID";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "hris_job";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "hris_job";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_job";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_job = createSqlQuery_hris_job();


	
													
	
$tdatahris_job[".sqlquery"] = $queryData_hris_job;

$tableEvents["hris_job"] = new eventsBase;
$tdatahris_job[".hasEvents"] = false;

?>