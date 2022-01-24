<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUser_Manager = array();	
	$tdataUser_Manager[".truncateText"] = true;
	$tdataUser_Manager[".NumberOfChars"] = 80; 
	$tdataUser_Manager[".ShortName"] = "User_Manager";
	$tdataUser_Manager[".OwnerID"] = "";
	$tdataUser_Manager[".OriginalTable"] = "hris_personnel";

//	field labels
$fieldLabelsUser_Manager = array();
$fieldToolTipsUser_Manager = array();
$pageTitlesUser_Manager = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUser_Manager["English"] = array();
	$fieldToolTipsUser_Manager["English"] = array();
	$pageTitlesUser_Manager["English"] = array();
	$fieldLabelsUser_Manager["English"]["ID"] = "ID";
	$fieldToolTipsUser_Manager["English"]["ID"] = "";
	$fieldLabelsUser_Manager["English"]["firstname"] = "Firstname";
	$fieldToolTipsUser_Manager["English"]["firstname"] = "";
	$fieldLabelsUser_Manager["English"]["middlename"] = "Middlename";
	$fieldToolTipsUser_Manager["English"]["middlename"] = "";
	$fieldLabelsUser_Manager["English"]["lastname"] = "Lastname";
	$fieldToolTipsUser_Manager["English"]["lastname"] = "";
	$fieldLabelsUser_Manager["English"]["gender"] = "Gender";
	$fieldToolTipsUser_Manager["English"]["gender"] = "";
	$fieldLabelsUser_Manager["English"]["emailaddress"] = "Emailaddress";
	$fieldToolTipsUser_Manager["English"]["emailaddress"] = "";
	$fieldLabelsUser_Manager["English"]["fullName"] = "Full Name";
	$fieldToolTipsUser_Manager["English"]["fullName"] = "";
	$fieldLabelsUser_Manager["English"]["department"] = "Department";
	$fieldToolTipsUser_Manager["English"]["department"] = "";
	$fieldLabelsUser_Manager["English"]["unit"] = "Unit";
	$fieldToolTipsUser_Manager["English"]["unit"] = "";
	$fieldLabelsUser_Manager["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipsUser_Manager["English"]["jobtitle"] = "";
	if (count($fieldToolTipsUser_Manager["English"]))
		$tdataUser_Manager[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUser_Manager[""] = array();
	$fieldToolTipsUser_Manager[""] = array();
	$pageTitlesUser_Manager[""] = array();
	$fieldLabelsUser_Manager[""]["department"] = "Department";
	$fieldToolTipsUser_Manager[""]["department"] = "";
	$fieldLabelsUser_Manager[""]["unit"] = "Unit";
	$fieldToolTipsUser_Manager[""]["unit"] = "";
	$fieldLabelsUser_Manager[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipsUser_Manager[""]["jobtitle"] = "";
	$fieldLabelsUser_Manager[""]["ID"] = "ID";
	$fieldToolTipsUser_Manager[""]["ID"] = "";
	if (count($fieldToolTipsUser_Manager[""]))
		$tdataUser_Manager[".isUseToolTips"] = true;
}
	
	
	$tdataUser_Manager[".NCSearch"] = true;



$tdataUser_Manager[".shortTableName"] = "User_Manager";
$tdataUser_Manager[".nSecOptions"] = 0;
$tdataUser_Manager[".recsPerRowList"] = 1;
$tdataUser_Manager[".mainTableOwnerID"] = "";
$tdataUser_Manager[".moveNext"] = 1;
$tdataUser_Manager[".nType"] = 1;

$tdataUser_Manager[".strOriginalTableName"] = "hris_personnel";




$tdataUser_Manager[".showAddInPopup"] = false;

$tdataUser_Manager[".showEditInPopup"] = false;

$tdataUser_Manager[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUser_Manager[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUser_Manager[".fieldsForRegister"] = array();

$tdataUser_Manager[".listAjax"] = false;

	$tdataUser_Manager[".audit"] = false;

	$tdataUser_Manager[".locking"] = false;


$tdataUser_Manager[".list"] = true;






$tdataUser_Manager[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataUser_Manager[".searchSaving"] = false;
//

$tdataUser_Manager[".showSearchPanel"] = true;
		$tdataUser_Manager[".flexibleSearch"] = true;		

if (isMobile())
	$tdataUser_Manager[".isUseAjaxSuggest"] = false;
else 
	$tdataUser_Manager[".isUseAjaxSuggest"] = true;

$tdataUser_Manager[".rowHighlite"] = true;



$tdataUser_Manager[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUser_Manager[".isUseTimeForSearch"] = false;



$tdataUser_Manager[".useDetailsPreview"] = true;


$tdataUser_Manager[".allSearchFields"] = array();
$tdataUser_Manager[".filterFields"] = array();
$tdataUser_Manager[".requiredSearchFields"] = array();

$tdataUser_Manager[".allSearchFields"][] = "ID";
	$tdataUser_Manager[".allSearchFields"][] = "lastname";
	$tdataUser_Manager[".allSearchFields"][] = "middlename";
	$tdataUser_Manager[".allSearchFields"][] = "firstname";
	$tdataUser_Manager[".allSearchFields"][] = "fullName";
	$tdataUser_Manager[".allSearchFields"][] = "jobtitle";
	$tdataUser_Manager[".allSearchFields"][] = "department";
	$tdataUser_Manager[".allSearchFields"][] = "unit";
	$tdataUser_Manager[".allSearchFields"][] = "gender";
	$tdataUser_Manager[".allSearchFields"][] = "emailaddress";
	
$tdataUser_Manager[".filterFields"][] = "department";	
$tdataUser_Manager[".filterFields"][] = "unit";	
$tdataUser_Manager[".filterFields"][] = "jobtitle";	

$tdataUser_Manager[".googleLikeFields"] = array();
$tdataUser_Manager[".googleLikeFields"][] = "ID";
$tdataUser_Manager[".googleLikeFields"][] = "fullName";
$tdataUser_Manager[".googleLikeFields"][] = "department";
$tdataUser_Manager[".googleLikeFields"][] = "unit";
$tdataUser_Manager[".googleLikeFields"][] = "jobtitle";
$tdataUser_Manager[".googleLikeFields"][] = "firstname";
$tdataUser_Manager[".googleLikeFields"][] = "middlename";
$tdataUser_Manager[".googleLikeFields"][] = "lastname";
$tdataUser_Manager[".googleLikeFields"][] = "gender";
$tdataUser_Manager[".googleLikeFields"][] = "emailaddress";


$tdataUser_Manager[".advSearchFields"] = array();
$tdataUser_Manager[".advSearchFields"][] = "ID";
$tdataUser_Manager[".advSearchFields"][] = "lastname";
$tdataUser_Manager[".advSearchFields"][] = "middlename";
$tdataUser_Manager[".advSearchFields"][] = "firstname";
$tdataUser_Manager[".advSearchFields"][] = "fullName";
$tdataUser_Manager[".advSearchFields"][] = "jobtitle";
$tdataUser_Manager[".advSearchFields"][] = "department";
$tdataUser_Manager[".advSearchFields"][] = "unit";
$tdataUser_Manager[".advSearchFields"][] = "gender";
$tdataUser_Manager[".advSearchFields"][] = "emailaddress";

$tdataUser_Manager[".tableType"] = "list";

$tdataUser_Manager[".printerPageOrientation"] = 0;
$tdataUser_Manager[".nPrinterPageScale"] = 100;

$tdataUser_Manager[".nPrinterSplitRecords"] = 40;

$tdataUser_Manager[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataUser_Manager[".pageSize"] = 20;

$tdataUser_Manager[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUser_Manager[".strOrderBy"] = $tstrOrderBy;

$tdataUser_Manager[".orderindexes"] = array();

$tdataUser_Manager[".sqlHead"] = "SELECT hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.emailaddress";
$tdataUser_Manager[".sqlFrom"] = "FROM hris_personnel  , hris_job";
$tdataUser_Manager[".sqlWhereExpr"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus ='active'";
$tdataUser_Manager[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUser_Manager[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUser_Manager[".arrGroupsPerPage"] = $arrGPP;

$tdataUser_Manager[".highlightSearchResults"] = true;

$tableKeysUser_Manager = array();
$tableKeysUser_Manager[] = "ID";
$tdataUser_Manager[".Keys"] = $tableKeysUser_Manager;

$tdataUser_Manager[".listFields"] = array();
$tdataUser_Manager[".listFields"][] = "fullName";
$tdataUser_Manager[".listFields"][] = "jobtitle";
$tdataUser_Manager[".listFields"][] = "department";
$tdataUser_Manager[".listFields"][] = "unit";
$tdataUser_Manager[".listFields"][] = "gender";
$tdataUser_Manager[".listFields"][] = "emailaddress";

$tdataUser_Manager[".hideMobileList"] = array();


$tdataUser_Manager[".viewFields"] = array();
$tdataUser_Manager[".viewFields"][] = "ID";
$tdataUser_Manager[".viewFields"][] = "lastname";
$tdataUser_Manager[".viewFields"][] = "middlename";
$tdataUser_Manager[".viewFields"][] = "firstname";
$tdataUser_Manager[".viewFields"][] = "fullName";
$tdataUser_Manager[".viewFields"][] = "jobtitle";
$tdataUser_Manager[".viewFields"][] = "department";
$tdataUser_Manager[".viewFields"][] = "unit";
$tdataUser_Manager[".viewFields"][] = "gender";
$tdataUser_Manager[".viewFields"][] = "emailaddress";

$tdataUser_Manager[".addFields"] = array();
$tdataUser_Manager[".addFields"][] = "middlename";
$tdataUser_Manager[".addFields"][] = "lastname";
$tdataUser_Manager[".addFields"][] = "firstname";
$tdataUser_Manager[".addFields"][] = "gender";
$tdataUser_Manager[".addFields"][] = "emailaddress";

$tdataUser_Manager[".inlineAddFields"] = array();

$tdataUser_Manager[".editFields"] = array();
$tdataUser_Manager[".editFields"][] = "middlename";
$tdataUser_Manager[".editFields"][] = "lastname";
$tdataUser_Manager[".editFields"][] = "firstname";
$tdataUser_Manager[".editFields"][] = "gender";
$tdataUser_Manager[".editFields"][] = "emailaddress";

$tdataUser_Manager[".inlineEditFields"] = array();

$tdataUser_Manager[".exportFields"] = array();
$tdataUser_Manager[".exportFields"][] = "ID";
$tdataUser_Manager[".exportFields"][] = "lastname";
$tdataUser_Manager[".exportFields"][] = "middlename";
$tdataUser_Manager[".exportFields"][] = "firstname";
$tdataUser_Manager[".exportFields"][] = "fullName";
$tdataUser_Manager[".exportFields"][] = "jobtitle";
$tdataUser_Manager[".exportFields"][] = "department";
$tdataUser_Manager[".exportFields"][] = "unit";
$tdataUser_Manager[".exportFields"][] = "gender";
$tdataUser_Manager[".exportFields"][] = "emailaddress";

$tdataUser_Manager[".importFields"] = array();
$tdataUser_Manager[".importFields"][] = "ID";
$tdataUser_Manager[".importFields"][] = "fullName";
$tdataUser_Manager[".importFields"][] = "department";
$tdataUser_Manager[".importFields"][] = "unit";
$tdataUser_Manager[".importFields"][] = "jobtitle";
$tdataUser_Manager[".importFields"][] = "firstname";
$tdataUser_Manager[".importFields"][] = "middlename";
$tdataUser_Manager[".importFields"][] = "lastname";
$tdataUser_Manager[".importFields"][] = "gender";
$tdataUser_Manager[".importFields"][] = "emailaddress";

$tdataUser_Manager[".printFields"] = array();
$tdataUser_Manager[".printFields"][] = "ID";
$tdataUser_Manager[".printFields"][] = "lastname";
$tdataUser_Manager[".printFields"][] = "middlename";
$tdataUser_Manager[".printFields"][] = "firstname";
$tdataUser_Manager[".printFields"][] = "fullName";
$tdataUser_Manager[".printFields"][] = "jobtitle";
$tdataUser_Manager[".printFields"][] = "department";
$tdataUser_Manager[".printFields"][] = "unit";
$tdataUser_Manager[".printFields"][] = "gender";
$tdataUser_Manager[".printFields"][] = "emailaddress";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.ID";
	
		
		
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

	

	
	$tdataUser_Manager["ID"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("User_Manager","fullName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fullName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname)";
	
		
		
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
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullName";
	
		
	$edata["LookupOrderBy"] = "fullName";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdataUser_Manager["fullName"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("User_Manager","department"); 
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

	
	$tdataUser_Manager["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("User_Manager","unit"); 
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

	
	$tdataUser_Manager["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("User_Manager","jobtitle"); 
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

	
	$tdataUser_Manager["jobtitle"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","firstname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "firstname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.firstname";
	
		
		
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

	

	
	$tdataUser_Manager["firstname"] = $fdata;
//	middlename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "middlename";
	$fdata["GoodName"] = "middlename";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","middlename"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "middlename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.middlename";
	
		
		
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

	

	
	$tdataUser_Manager["middlename"] = $fdata;
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","lastname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lastname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.lastname";
	
		
		
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

	

	
	$tdataUser_Manager["lastname"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","gender"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "gender"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.gender";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
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

	

	
	$tdataUser_Manager["gender"] = $fdata;
//	emailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "emailaddress";
	$fdata["GoodName"] = "emailaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("User_Manager","emailaddress"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "emailaddress"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.emailaddress";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Email Hyperlink");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdataUser_Manager["emailaddress"] = $fdata;

	
$tables_data["User Manager"]=&$tdataUser_Manager;
$field_labels["User_Manager"] = &$fieldLabelsUser_Manager;
$fieldToolTips["User Manager"] = &$fieldToolTipsUser_Manager;
$page_titles["User_Manager"] = &$pageTitlesUser_Manager;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["User Manager"] = array();
//	hris_user
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_user";
		$detailsParam["dOriginalTable"] = "hris_user";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_user";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["User Manager"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["User Manager"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["User Manager"][$dIndex]["masterKeys"][]="emailaddress";

				$detailsTablesData["User Manager"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["User Manager"][$dIndex]["detailKeys"][]="email";
	
// tables which are master tables for current table (detail)
$masterTablesData["User Manager"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_User_Manager()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.emailaddress";
$proto0["m_strFrom"] = "FROM hris_personnel  , hris_job";
$proto0["m_strWhere"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus ='active'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus ='active'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus ='active'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "hris_personnel.ID =hris_job.personnelID";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=hris_job.personnelID";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "hris_job.empstatus ='active'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "empstatus",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "User Manager"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='active'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto9["m_sql"] = "hris_personnel.ID";
$proto9["m_srcTableName"] = "User Manager";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "upper(hris_personnel.lastname)"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\", \""
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "hris_personnel.firstname"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname)";
$proto11["m_srcTableName"] = "User Manager";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "fullName";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "User Manager"
));

$proto16["m_sql"] = "hris_job.department";
$proto16["m_srcTableName"] = "User Manager";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "User Manager"
));

$proto18["m_sql"] = "hris_job.unit";
$proto18["m_srcTableName"] = "User Manager";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "User Manager"
));

$proto20["m_sql"] = "hris_job.jobtitle";
$proto20["m_srcTableName"] = "User Manager";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto22["m_sql"] = "hris_personnel.firstname";
$proto22["m_srcTableName"] = "User Manager";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "middlename",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto24["m_sql"] = "hris_personnel.middlename";
$proto24["m_srcTableName"] = "User Manager";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto26["m_sql"] = "hris_personnel.lastname";
$proto26["m_srcTableName"] = "User Manager";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto28["m_sql"] = "hris_personnel.gender";
$proto28["m_srcTableName"] = "User Manager";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "User Manager"
));

$proto30["m_sql"] = "hris_personnel.emailaddress";
$proto30["m_srcTableName"] = "User Manager";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "hris_personnel";
$proto33["m_srcTableName"] = "User Manager";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID";
$proto33["m_columns"][] = "firstname";
$proto33["m_columns"][] = "middlename";
$proto33["m_columns"][] = "lastname";
$proto33["m_columns"][] = "gender";
$proto33["m_columns"][] = "currentaddress";
$proto33["m_columns"][] = "permanentaddress";
$proto33["m_columns"][] = "sss";
$proto33["m_columns"][] = "tin";
$proto33["m_columns"][] = "pagibig";
$proto33["m_columns"][] = "philhealth";
$proto33["m_columns"][] = "emailaddress";
$proto33["m_columns"][] = "telephone";
$proto33["m_columns"][] = "dateofbirth";
$proto33["m_columns"][] = "skills";
$proto33["m_columns"][] = "civilstatus";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "hris_personnel";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "User Manager";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_CROSSJOIN";
			$proto37=array();
$proto37["m_strName"] = "hris_job";
$proto37["m_srcTableName"] = "User Manager";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ID";
$proto37["m_columns"][] = "empID";
$proto37["m_columns"][] = "department";
$proto37["m_columns"][] = "unit";
$proto37["m_columns"][] = "jobtitle";
$proto37["m_columns"][] = "jobdescription";
$proto37["m_columns"][] = "datehired";
$proto37["m_columns"][] = "reference";
$proto37["m_columns"][] = "dateend";
$proto37["m_columns"][] = "type";
$proto37["m_columns"][] = "category";
$proto37["m_columns"][] = "empstatus";
$proto37["m_columns"][] = "personnelID";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "hris_job";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "User Manager";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="User Manager";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_User_Manager = createSqlQuery_User_Manager();


	
										
	
$tdataUser_Manager[".sqlquery"] = $queryData_User_Manager;

$tableEvents["User Manager"] = new eventsBase;
$tdataUser_Manager[".hasEvents"] = false;

?>