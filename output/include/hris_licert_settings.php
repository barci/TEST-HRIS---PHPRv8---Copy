<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_licert = array();	
	$tdatahris_licert[".truncateText"] = true;
	$tdatahris_licert[".NumberOfChars"] = 80; 
	$tdatahris_licert[".ShortName"] = "hris_licert";
	$tdatahris_licert[".OwnerID"] = "";
	$tdatahris_licert[".OriginalTable"] = "hris_licert";

//	field labels
$fieldLabelshris_licert = array();
$fieldToolTipshris_licert = array();
$pageTitleshris_licert = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_licert["English"] = array();
	$fieldToolTipshris_licert["English"] = array();
	$pageTitleshris_licert["English"] = array();
	$fieldLabelshris_licert["English"]["ID"] = "ID";
	$fieldToolTipshris_licert["English"]["ID"] = "";
	$fieldLabelshris_licert["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_licert["English"]["personnelID"] = "";
	$fieldLabelshris_licert["English"]["name"] = "Name";
	$fieldToolTipshris_licert["English"]["name"] = "";
	$fieldLabelshris_licert["English"]["reference"] = "Reference";
	$fieldToolTipshris_licert["English"]["reference"] = "";
	$fieldLabelshris_licert["English"]["validity"] = "Validity";
	$fieldToolTipshris_licert["English"]["validity"] = "";
	$fieldLabelshris_licert["English"]["department"] = "Department";
	$fieldToolTipshris_licert["English"]["department"] = "";
	$fieldLabelshris_licert["English"]["unit"] = "Unit";
	$fieldToolTipshris_licert["English"]["unit"] = "";
	$fieldLabelshris_licert["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_licert["English"]["jobtitle"] = "";
	if (count($fieldToolTipshris_licert["English"]))
		$tdatahris_licert[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_licert[""] = array();
	$fieldToolTipshris_licert[""] = array();
	$pageTitleshris_licert[""] = array();
	$fieldLabelshris_licert[""]["ID"] = "ID";
	$fieldToolTipshris_licert[""]["ID"] = "";
	if (count($fieldToolTipshris_licert[""]))
		$tdatahris_licert[".isUseToolTips"] = true;
}
	
	
	$tdatahris_licert[".NCSearch"] = true;



$tdatahris_licert[".shortTableName"] = "hris_licert";
$tdatahris_licert[".nSecOptions"] = 0;
$tdatahris_licert[".recsPerRowList"] = 1;
$tdatahris_licert[".mainTableOwnerID"] = "";
$tdatahris_licert[".moveNext"] = 1;
$tdatahris_licert[".nType"] = 0;

$tdatahris_licert[".strOriginalTableName"] = "hris_licert";




$tdatahris_licert[".showAddInPopup"] = false;

$tdatahris_licert[".showEditInPopup"] = false;

$tdatahris_licert[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_licert[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_licert[".fieldsForRegister"] = array();

$tdatahris_licert[".listAjax"] = false;

	$tdatahris_licert[".audit"] = false;

	$tdatahris_licert[".locking"] = false;

$tdatahris_licert[".edit"] = true;

$tdatahris_licert[".list"] = true;

$tdatahris_licert[".view"] = true;

$tdatahris_licert[".import"] = true;

$tdatahris_licert[".exportTo"] = true;

$tdatahris_licert[".printFriendly"] = true;

$tdatahris_licert[".delete"] = true;

$tdatahris_licert[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_licert[".searchSaving"] = false;
//

$tdatahris_licert[".showSearchPanel"] = true;
		$tdatahris_licert[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_licert[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_licert[".isUseAjaxSuggest"] = true;

$tdatahris_licert[".rowHighlite"] = true;



$tdatahris_licert[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_licert[".isUseTimeForSearch"] = false;





$tdatahris_licert[".allSearchFields"] = array();
$tdatahris_licert[".filterFields"] = array();
$tdatahris_licert[".requiredSearchFields"] = array();

$tdatahris_licert[".allSearchFields"][] = "ID";
	$tdatahris_licert[".allSearchFields"][] = "personnelID";
	$tdatahris_licert[".allSearchFields"][] = "department";
	$tdatahris_licert[".allSearchFields"][] = "unit";
	$tdatahris_licert[".allSearchFields"][] = "jobtitle";
	$tdatahris_licert[".allSearchFields"][] = "name";
	$tdatahris_licert[".allSearchFields"][] = "reference";
	$tdatahris_licert[".allSearchFields"][] = "validity";
	
$tdatahris_licert[".filterFields"][] = "department";	
$tdatahris_licert[".filterFields"][] = "unit";	
$tdatahris_licert[".filterFields"][] = "jobtitle";	

$tdatahris_licert[".googleLikeFields"] = array();
$tdatahris_licert[".googleLikeFields"][] = "ID";
$tdatahris_licert[".googleLikeFields"][] = "personnelID";
$tdatahris_licert[".googleLikeFields"][] = "department";
$tdatahris_licert[".googleLikeFields"][] = "unit";
$tdatahris_licert[".googleLikeFields"][] = "jobtitle";
$tdatahris_licert[".googleLikeFields"][] = "name";
$tdatahris_licert[".googleLikeFields"][] = "reference";
$tdatahris_licert[".googleLikeFields"][] = "validity";


$tdatahris_licert[".advSearchFields"] = array();
$tdatahris_licert[".advSearchFields"][] = "ID";
$tdatahris_licert[".advSearchFields"][] = "personnelID";
$tdatahris_licert[".advSearchFields"][] = "department";
$tdatahris_licert[".advSearchFields"][] = "unit";
$tdatahris_licert[".advSearchFields"][] = "jobtitle";
$tdatahris_licert[".advSearchFields"][] = "name";
$tdatahris_licert[".advSearchFields"][] = "reference";
$tdatahris_licert[".advSearchFields"][] = "validity";

$tdatahris_licert[".tableType"] = "list";

$tdatahris_licert[".printerPageOrientation"] = 0;
$tdatahris_licert[".nPrinterPageScale"] = 100;

$tdatahris_licert[".nPrinterSplitRecords"] = 40;

$tdatahris_licert[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_licert[".pageSize"] = 20;

$tdatahris_licert[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_licert[".strOrderBy"] = $tstrOrderBy;

$tdatahris_licert[".orderindexes"] = array();

$tdatahris_licert[".sqlHead"] = "SELECT hris_licert.ID,  hris_licert.personnelID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_licert.name,  hris_licert.reference,  hris_licert.validity";
$tdatahris_licert[".sqlFrom"] = "FROM hris_licert  , hris_job";
$tdatahris_licert[".sqlWhereExpr"] = "hris_licert.personnelID =hris_job.personnelID";
$tdatahris_licert[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_licert[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_licert[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_licert[".highlightSearchResults"] = true;

$tableKeyshris_licert = array();
$tableKeyshris_licert[] = "ID";
$tdatahris_licert[".Keys"] = $tableKeyshris_licert;

$tdatahris_licert[".listFields"] = array();
$tdatahris_licert[".listFields"][] = "ID";
$tdatahris_licert[".listFields"][] = "personnelID";
$tdatahris_licert[".listFields"][] = "department";
$tdatahris_licert[".listFields"][] = "unit";
$tdatahris_licert[".listFields"][] = "jobtitle";
$tdatahris_licert[".listFields"][] = "name";
$tdatahris_licert[".listFields"][] = "reference";
$tdatahris_licert[".listFields"][] = "validity";

$tdatahris_licert[".hideMobileList"] = array();


$tdatahris_licert[".viewFields"] = array();
$tdatahris_licert[".viewFields"][] = "ID";
$tdatahris_licert[".viewFields"][] = "personnelID";
$tdatahris_licert[".viewFields"][] = "department";
$tdatahris_licert[".viewFields"][] = "unit";
$tdatahris_licert[".viewFields"][] = "jobtitle";
$tdatahris_licert[".viewFields"][] = "name";
$tdatahris_licert[".viewFields"][] = "reference";
$tdatahris_licert[".viewFields"][] = "validity";

$tdatahris_licert[".addFields"] = array();
$tdatahris_licert[".addFields"][] = "personnelID";
$tdatahris_licert[".addFields"][] = "name";
$tdatahris_licert[".addFields"][] = "reference";
$tdatahris_licert[".addFields"][] = "validity";

$tdatahris_licert[".inlineAddFields"] = array();

$tdatahris_licert[".editFields"] = array();
$tdatahris_licert[".editFields"][] = "personnelID";
$tdatahris_licert[".editFields"][] = "name";
$tdatahris_licert[".editFields"][] = "reference";
$tdatahris_licert[".editFields"][] = "validity";

$tdatahris_licert[".inlineEditFields"] = array();

$tdatahris_licert[".exportFields"] = array();
$tdatahris_licert[".exportFields"][] = "ID";
$tdatahris_licert[".exportFields"][] = "personnelID";
$tdatahris_licert[".exportFields"][] = "department";
$tdatahris_licert[".exportFields"][] = "unit";
$tdatahris_licert[".exportFields"][] = "jobtitle";
$tdatahris_licert[".exportFields"][] = "name";
$tdatahris_licert[".exportFields"][] = "reference";
$tdatahris_licert[".exportFields"][] = "validity";

$tdatahris_licert[".importFields"] = array();
$tdatahris_licert[".importFields"][] = "ID";
$tdatahris_licert[".importFields"][] = "personnelID";
$tdatahris_licert[".importFields"][] = "department";
$tdatahris_licert[".importFields"][] = "unit";
$tdatahris_licert[".importFields"][] = "jobtitle";
$tdatahris_licert[".importFields"][] = "name";
$tdatahris_licert[".importFields"][] = "reference";
$tdatahris_licert[".importFields"][] = "validity";

$tdatahris_licert[".printFields"] = array();
$tdatahris_licert[".printFields"][] = "ID";
$tdatahris_licert[".printFields"][] = "personnelID";
$tdatahris_licert[".printFields"][] = "department";
$tdatahris_licert[".printFields"][] = "unit";
$tdatahris_licert[".printFields"][] = "jobtitle";
$tdatahris_licert[".printFields"][] = "name";
$tdatahris_licert[".printFields"][] = "reference";
$tdatahris_licert[".printFields"][] = "validity";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_licert";
	$fdata["Label"] = GetFieldLabel("hris_licert","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_licert.ID";
	
		
		
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

	

	
	$tdatahris_licert["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_licert";
	$fdata["Label"] = GetFieldLabel("hris_licert","personnelID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "personnelID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_licert.personnelID";
	
		
		
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

	

	
	$tdatahris_licert["personnelID"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_licert","department"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_job.department";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_licert["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_licert","unit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_job.unit";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_licert["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_licert","jobtitle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobtitle"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_job.jobtitle";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_licert["jobtitle"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "hris_licert";
	$fdata["Label"] = GetFieldLabel("hris_licert","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_licert.name";
	
		
		
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

	

	
	$tdatahris_licert["name"] = $fdata;
//	reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reference";
	$fdata["GoodName"] = "reference";
	$fdata["ownerTable"] = "hris_licert";
	$fdata["Label"] = GetFieldLabel("hris_licert","reference"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reference"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_licert.reference";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	

	
	$tdatahris_licert["reference"] = $fdata;
//	validity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "validity";
	$fdata["GoodName"] = "validity";
	$fdata["ownerTable"] = "hris_licert";
	$fdata["Label"] = GetFieldLabel("hris_licert","validity"); 
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
	$fdata["FullName"] = "hris_licert.validity";
	
		
		
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

	

	
	$tdatahris_licert["validity"] = $fdata;

	
$tables_data["hris_licert"]=&$tdatahris_licert;
$field_labels["hris_licert"] = &$fieldLabelshris_licert;
$fieldToolTips["hris_licert"] = &$fieldToolTipshris_licert;
$page_titles["hris_licert"] = &$pageTitleshris_licert;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_licert"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_licert"] = array();


	
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
					$masterTablesData["hris_licert"][0] = $masterParams;	
				$masterTablesData["hris_licert"][0]["masterKeys"] = array();
	$masterTablesData["hris_licert"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_licert"][0]["detailKeys"] = array();
	$masterTablesData["hris_licert"][0]["detailKeys"][]="personnelID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_licert()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_licert.ID,  hris_licert.personnelID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_licert.name,  hris_licert.reference,  hris_licert.validity";
$proto0["m_strFrom"] = "FROM hris_licert  , hris_job";
$proto0["m_strWhere"] = "hris_licert.personnelID =hris_job.personnelID";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "hris_licert.personnelID =hris_job.personnelID";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=hris_job.personnelID";
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
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto5["m_sql"] = "hris_licert.ID";
$proto5["m_srcTableName"] = "hris_licert";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto7["m_sql"] = "hris_licert.personnelID";
$proto7["m_srcTableName"] = "hris_licert";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_licert"
));

$proto9["m_sql"] = "hris_job.department";
$proto9["m_srcTableName"] = "hris_licert";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_licert"
));

$proto11["m_sql"] = "hris_job.unit";
$proto11["m_srcTableName"] = "hris_licert";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_licert"
));

$proto13["m_sql"] = "hris_job.jobtitle";
$proto13["m_srcTableName"] = "hris_licert";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto15["m_sql"] = "hris_licert.name";
$proto15["m_srcTableName"] = "hris_licert";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "reference",
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto17["m_sql"] = "hris_licert.reference";
$proto17["m_srcTableName"] = "hris_licert";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "validity",
	"m_strTable" => "hris_licert",
	"m_srcTableName" => "hris_licert"
));

$proto19["m_sql"] = "hris_licert.validity";
$proto19["m_srcTableName"] = "hris_licert";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hris_licert";
$proto22["m_srcTableName"] = "hris_licert";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "personnelID";
$proto22["m_columns"][] = "name";
$proto22["m_columns"][] = "reference";
$proto22["m_columns"][] = "validity";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "hris_licert";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "hris_licert";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_CROSSJOIN";
			$proto26=array();
$proto26["m_strName"] = "hris_job";
$proto26["m_srcTableName"] = "hris_licert";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "empID";
$proto26["m_columns"][] = "department";
$proto26["m_columns"][] = "unit";
$proto26["m_columns"][] = "jobtitle";
$proto26["m_columns"][] = "jobdescription";
$proto26["m_columns"][] = "datehired";
$proto26["m_columns"][] = "reference";
$proto26["m_columns"][] = "dateend";
$proto26["m_columns"][] = "type";
$proto26["m_columns"][] = "category";
$proto26["m_columns"][] = "empstatus";
$proto26["m_columns"][] = "personnelID";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "hris_job";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "hris_licert";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_licert";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_licert = createSqlQuery_hris_licert();


	
								
	
$tdatahris_licert[".sqlquery"] = $queryData_hris_licert;

$tableEvents["hris_licert"] = new eventsBase;
$tdatahris_licert[".hasEvents"] = false;

?>