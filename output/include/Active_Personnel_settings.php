<?php
require_once(getabspath("classes/cipherer.php"));




$tdataActive_Personnel = array();	
	$tdataActive_Personnel[".truncateText"] = true;
	$tdataActive_Personnel[".NumberOfChars"] = 80; 
	$tdataActive_Personnel[".ShortName"] = "Active_Personnel";
	$tdataActive_Personnel[".OwnerID"] = "";
	$tdataActive_Personnel[".OriginalTable"] = "hris_personnel";

//	field labels
$fieldLabelsActive_Personnel = array();
$fieldToolTipsActive_Personnel = array();
$pageTitlesActive_Personnel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActive_Personnel["English"] = array();
	$fieldToolTipsActive_Personnel["English"] = array();
	$pageTitlesActive_Personnel["English"] = array();
	$fieldLabelsActive_Personnel["English"]["ID"] = "ID";
	$fieldToolTipsActive_Personnel["English"]["ID"] = "";
	$fieldLabelsActive_Personnel["English"]["firstname"] = "Firstname";
	$fieldToolTipsActive_Personnel["English"]["firstname"] = "";
	$fieldLabelsActive_Personnel["English"]["middlename"] = "Middlename";
	$fieldToolTipsActive_Personnel["English"]["middlename"] = "";
	$fieldLabelsActive_Personnel["English"]["lastname"] = "Lastname";
	$fieldToolTipsActive_Personnel["English"]["lastname"] = "";
	$fieldLabelsActive_Personnel["English"]["gender"] = "Gender";
	$fieldToolTipsActive_Personnel["English"]["gender"] = "";
	$fieldLabelsActive_Personnel["English"]["currentaddress"] = "Currentaddress";
	$fieldToolTipsActive_Personnel["English"]["currentaddress"] = "";
	$fieldLabelsActive_Personnel["English"]["permanentaddress"] = "Permanentaddress";
	$fieldToolTipsActive_Personnel["English"]["permanentaddress"] = "";
	$fieldLabelsActive_Personnel["English"]["sss"] = "Sss";
	$fieldToolTipsActive_Personnel["English"]["sss"] = "";
	$fieldLabelsActive_Personnel["English"]["tin"] = "Tin";
	$fieldToolTipsActive_Personnel["English"]["tin"] = "";
	$fieldLabelsActive_Personnel["English"]["pagibig"] = "Pagibig";
	$fieldToolTipsActive_Personnel["English"]["pagibig"] = "";
	$fieldLabelsActive_Personnel["English"]["philhealth"] = "Philhealth";
	$fieldToolTipsActive_Personnel["English"]["philhealth"] = "";
	$fieldLabelsActive_Personnel["English"]["emailaddress"] = "Emailaddress";
	$fieldToolTipsActive_Personnel["English"]["emailaddress"] = "";
	$fieldLabelsActive_Personnel["English"]["telephone"] = "Telephone";
	$fieldToolTipsActive_Personnel["English"]["telephone"] = "";
	$fieldLabelsActive_Personnel["English"]["dateofbirth"] = "Dateofbirth";
	$fieldToolTipsActive_Personnel["English"]["dateofbirth"] = "";
	$fieldLabelsActive_Personnel["English"]["skills"] = "Skills";
	$fieldToolTipsActive_Personnel["English"]["skills"] = "";
	$fieldLabelsActive_Personnel["English"]["civilstatus"] = "Civilstatus";
	$fieldToolTipsActive_Personnel["English"]["civilstatus"] = "";
	$fieldLabelsActive_Personnel["English"]["fullName"] = "Full Name";
	$fieldToolTipsActive_Personnel["English"]["fullName"] = "";
	$fieldLabelsActive_Personnel["English"]["department"] = "Department";
	$fieldToolTipsActive_Personnel["English"]["department"] = "";
	$fieldLabelsActive_Personnel["English"]["unit"] = "Unit";
	$fieldToolTipsActive_Personnel["English"]["unit"] = "";
	$fieldLabelsActive_Personnel["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipsActive_Personnel["English"]["jobtitle"] = "";
	if (count($fieldToolTipsActive_Personnel["English"]))
		$tdataActive_Personnel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsActive_Personnel[""] = array();
	$fieldToolTipsActive_Personnel[""] = array();
	$pageTitlesActive_Personnel[""] = array();
	$fieldLabelsActive_Personnel[""]["department"] = "Department";
	$fieldToolTipsActive_Personnel[""]["department"] = "";
	$fieldLabelsActive_Personnel[""]["unit"] = "Unit";
	$fieldToolTipsActive_Personnel[""]["unit"] = "";
	$fieldLabelsActive_Personnel[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipsActive_Personnel[""]["jobtitle"] = "";
	$fieldLabelsActive_Personnel[""]["ID"] = "ID";
	$fieldToolTipsActive_Personnel[""]["ID"] = "";
	if (count($fieldToolTipsActive_Personnel[""]))
		$tdataActive_Personnel[".isUseToolTips"] = true;
}
	
	
	$tdataActive_Personnel[".NCSearch"] = true;



$tdataActive_Personnel[".shortTableName"] = "Active_Personnel";
$tdataActive_Personnel[".nSecOptions"] = 0;
$tdataActive_Personnel[".recsPerRowList"] = 1;
$tdataActive_Personnel[".mainTableOwnerID"] = "";
$tdataActive_Personnel[".moveNext"] = 1;
$tdataActive_Personnel[".nType"] = 1;

$tdataActive_Personnel[".strOriginalTableName"] = "hris_personnel";




$tdataActive_Personnel[".showAddInPopup"] = false;

$tdataActive_Personnel[".showEditInPopup"] = false;

$tdataActive_Personnel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataActive_Personnel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataActive_Personnel[".fieldsForRegister"] = array();

$tdataActive_Personnel[".listAjax"] = false;

	$tdataActive_Personnel[".audit"] = false;

	$tdataActive_Personnel[".locking"] = false;

$tdataActive_Personnel[".edit"] = true;

$tdataActive_Personnel[".list"] = true;

$tdataActive_Personnel[".view"] = true;

$tdataActive_Personnel[".import"] = true;

$tdataActive_Personnel[".exportTo"] = true;

$tdataActive_Personnel[".printFriendly"] = true;

$tdataActive_Personnel[".delete"] = true;

$tdataActive_Personnel[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataActive_Personnel[".searchSaving"] = false;
//

$tdataActive_Personnel[".showSearchPanel"] = true;
		$tdataActive_Personnel[".flexibleSearch"] = true;		

if (isMobile())
	$tdataActive_Personnel[".isUseAjaxSuggest"] = false;
else 
	$tdataActive_Personnel[".isUseAjaxSuggest"] = true;

$tdataActive_Personnel[".rowHighlite"] = true;



$tdataActive_Personnel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataActive_Personnel[".isUseTimeForSearch"] = false;





$tdataActive_Personnel[".allSearchFields"] = array();
$tdataActive_Personnel[".filterFields"] = array();
$tdataActive_Personnel[".requiredSearchFields"] = array();

$tdataActive_Personnel[".allSearchFields"][] = "ID";
	$tdataActive_Personnel[".allSearchFields"][] = "skills";
	$tdataActive_Personnel[".allSearchFields"][] = "dateofbirth";
	$tdataActive_Personnel[".allSearchFields"][] = "civilstatus";
	$tdataActive_Personnel[".allSearchFields"][] = "lastname";
	$tdataActive_Personnel[".allSearchFields"][] = "firstname";
	$tdataActive_Personnel[".allSearchFields"][] = "middlename";
	$tdataActive_Personnel[".allSearchFields"][] = "fullName";
	$tdataActive_Personnel[".allSearchFields"][] = "jobtitle";
	$tdataActive_Personnel[".allSearchFields"][] = "department";
	$tdataActive_Personnel[".allSearchFields"][] = "unit";
	$tdataActive_Personnel[".allSearchFields"][] = "gender";
	$tdataActive_Personnel[".allSearchFields"][] = "currentaddress";
	$tdataActive_Personnel[".allSearchFields"][] = "permanentaddress";
	$tdataActive_Personnel[".allSearchFields"][] = "sss";
	$tdataActive_Personnel[".allSearchFields"][] = "tin";
	$tdataActive_Personnel[".allSearchFields"][] = "pagibig";
	$tdataActive_Personnel[".allSearchFields"][] = "philhealth";
	$tdataActive_Personnel[".allSearchFields"][] = "emailaddress";
	$tdataActive_Personnel[".allSearchFields"][] = "telephone";
	
$tdataActive_Personnel[".filterFields"][] = "department";	
$tdataActive_Personnel[".filterFields"][] = "unit";	
$tdataActive_Personnel[".filterFields"][] = "jobtitle";	

$tdataActive_Personnel[".googleLikeFields"] = array();
$tdataActive_Personnel[".googleLikeFields"][] = "ID";
$tdataActive_Personnel[".googleLikeFields"][] = "fullName";
$tdataActive_Personnel[".googleLikeFields"][] = "department";
$tdataActive_Personnel[".googleLikeFields"][] = "unit";
$tdataActive_Personnel[".googleLikeFields"][] = "jobtitle";
$tdataActive_Personnel[".googleLikeFields"][] = "firstname";
$tdataActive_Personnel[".googleLikeFields"][] = "middlename";
$tdataActive_Personnel[".googleLikeFields"][] = "lastname";
$tdataActive_Personnel[".googleLikeFields"][] = "gender";
$tdataActive_Personnel[".googleLikeFields"][] = "currentaddress";
$tdataActive_Personnel[".googleLikeFields"][] = "permanentaddress";
$tdataActive_Personnel[".googleLikeFields"][] = "sss";
$tdataActive_Personnel[".googleLikeFields"][] = "tin";
$tdataActive_Personnel[".googleLikeFields"][] = "pagibig";
$tdataActive_Personnel[".googleLikeFields"][] = "philhealth";
$tdataActive_Personnel[".googleLikeFields"][] = "emailaddress";
$tdataActive_Personnel[".googleLikeFields"][] = "telephone";
$tdataActive_Personnel[".googleLikeFields"][] = "dateofbirth";
$tdataActive_Personnel[".googleLikeFields"][] = "skills";
$tdataActive_Personnel[".googleLikeFields"][] = "civilstatus";


$tdataActive_Personnel[".advSearchFields"] = array();
$tdataActive_Personnel[".advSearchFields"][] = "ID";
$tdataActive_Personnel[".advSearchFields"][] = "skills";
$tdataActive_Personnel[".advSearchFields"][] = "dateofbirth";
$tdataActive_Personnel[".advSearchFields"][] = "civilstatus";
$tdataActive_Personnel[".advSearchFields"][] = "lastname";
$tdataActive_Personnel[".advSearchFields"][] = "firstname";
$tdataActive_Personnel[".advSearchFields"][] = "middlename";
$tdataActive_Personnel[".advSearchFields"][] = "fullName";
$tdataActive_Personnel[".advSearchFields"][] = "jobtitle";
$tdataActive_Personnel[".advSearchFields"][] = "department";
$tdataActive_Personnel[".advSearchFields"][] = "unit";
$tdataActive_Personnel[".advSearchFields"][] = "gender";
$tdataActive_Personnel[".advSearchFields"][] = "currentaddress";
$tdataActive_Personnel[".advSearchFields"][] = "permanentaddress";
$tdataActive_Personnel[".advSearchFields"][] = "sss";
$tdataActive_Personnel[".advSearchFields"][] = "tin";
$tdataActive_Personnel[".advSearchFields"][] = "pagibig";
$tdataActive_Personnel[".advSearchFields"][] = "philhealth";
$tdataActive_Personnel[".advSearchFields"][] = "emailaddress";
$tdataActive_Personnel[".advSearchFields"][] = "telephone";

$tdataActive_Personnel[".tableType"] = "list";

$tdataActive_Personnel[".printerPageOrientation"] = 0;
$tdataActive_Personnel[".nPrinterPageScale"] = 100;

$tdataActive_Personnel[".nPrinterSplitRecords"] = 40;

$tdataActive_Personnel[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataActive_Personnel[".pageSize"] = 20;

$tdataActive_Personnel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataActive_Personnel[".strOrderBy"] = $tstrOrderBy;

$tdataActive_Personnel[".orderindexes"] = array();

$tdataActive_Personnel[".sqlHead"] = "SELECT hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.currentaddress,  hris_personnel.permanentaddress,  hris_personnel.sss,  hris_personnel.tin,  hris_personnel.pagibig,  hris_personnel.philhealth,  hris_personnel.emailaddress,  hris_personnel.telephone,  hris_personnel.dateofbirth,  hris_personnel.skills,  hris_personnel.civilstatus";
$tdataActive_Personnel[".sqlFrom"] = "FROM hris_personnel  , hris_job";
$tdataActive_Personnel[".sqlWhereExpr"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus ='active'";
$tdataActive_Personnel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActive_Personnel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActive_Personnel[".arrGroupsPerPage"] = $arrGPP;

$tdataActive_Personnel[".highlightSearchResults"] = true;

$tableKeysActive_Personnel = array();
$tableKeysActive_Personnel[] = "ID";
$tdataActive_Personnel[".Keys"] = $tableKeysActive_Personnel;

$tdataActive_Personnel[".listFields"] = array();
$tdataActive_Personnel[".listFields"][] = "fullName";
$tdataActive_Personnel[".listFields"][] = "jobtitle";
$tdataActive_Personnel[".listFields"][] = "department";
$tdataActive_Personnel[".listFields"][] = "unit";
$tdataActive_Personnel[".listFields"][] = "gender";
$tdataActive_Personnel[".listFields"][] = "currentaddress";
$tdataActive_Personnel[".listFields"][] = "permanentaddress";
$tdataActive_Personnel[".listFields"][] = "emailaddress";
$tdataActive_Personnel[".listFields"][] = "telephone";

$tdataActive_Personnel[".hideMobileList"] = array();


$tdataActive_Personnel[".viewFields"] = array();
$tdataActive_Personnel[".viewFields"][] = "ID";
$tdataActive_Personnel[".viewFields"][] = "skills";
$tdataActive_Personnel[".viewFields"][] = "dateofbirth";
$tdataActive_Personnel[".viewFields"][] = "civilstatus";
$tdataActive_Personnel[".viewFields"][] = "lastname";
$tdataActive_Personnel[".viewFields"][] = "firstname";
$tdataActive_Personnel[".viewFields"][] = "middlename";
$tdataActive_Personnel[".viewFields"][] = "fullName";
$tdataActive_Personnel[".viewFields"][] = "jobtitle";
$tdataActive_Personnel[".viewFields"][] = "department";
$tdataActive_Personnel[".viewFields"][] = "unit";
$tdataActive_Personnel[".viewFields"][] = "gender";
$tdataActive_Personnel[".viewFields"][] = "currentaddress";
$tdataActive_Personnel[".viewFields"][] = "permanentaddress";
$tdataActive_Personnel[".viewFields"][] = "sss";
$tdataActive_Personnel[".viewFields"][] = "tin";
$tdataActive_Personnel[".viewFields"][] = "pagibig";
$tdataActive_Personnel[".viewFields"][] = "philhealth";
$tdataActive_Personnel[".viewFields"][] = "emailaddress";
$tdataActive_Personnel[".viewFields"][] = "telephone";

$tdataActive_Personnel[".addFields"] = array();
$tdataActive_Personnel[".addFields"][] = "firstname";
$tdataActive_Personnel[".addFields"][] = "middlename";
$tdataActive_Personnel[".addFields"][] = "lastname";
$tdataActive_Personnel[".addFields"][] = "skills";
$tdataActive_Personnel[".addFields"][] = "dateofbirth";
$tdataActive_Personnel[".addFields"][] = "civilstatus";
$tdataActive_Personnel[".addFields"][] = "gender";
$tdataActive_Personnel[".addFields"][] = "currentaddress";
$tdataActive_Personnel[".addFields"][] = "permanentaddress";
$tdataActive_Personnel[".addFields"][] = "sss";
$tdataActive_Personnel[".addFields"][] = "tin";
$tdataActive_Personnel[".addFields"][] = "pagibig";
$tdataActive_Personnel[".addFields"][] = "philhealth";
$tdataActive_Personnel[".addFields"][] = "emailaddress";
$tdataActive_Personnel[".addFields"][] = "telephone";

$tdataActive_Personnel[".inlineAddFields"] = array();

$tdataActive_Personnel[".editFields"] = array();
$tdataActive_Personnel[".editFields"][] = "firstname";
$tdataActive_Personnel[".editFields"][] = "middlename";
$tdataActive_Personnel[".editFields"][] = "lastname";
$tdataActive_Personnel[".editFields"][] = "skills";
$tdataActive_Personnel[".editFields"][] = "dateofbirth";
$tdataActive_Personnel[".editFields"][] = "civilstatus";
$tdataActive_Personnel[".editFields"][] = "gender";
$tdataActive_Personnel[".editFields"][] = "currentaddress";
$tdataActive_Personnel[".editFields"][] = "permanentaddress";
$tdataActive_Personnel[".editFields"][] = "sss";
$tdataActive_Personnel[".editFields"][] = "tin";
$tdataActive_Personnel[".editFields"][] = "pagibig";
$tdataActive_Personnel[".editFields"][] = "philhealth";
$tdataActive_Personnel[".editFields"][] = "emailaddress";
$tdataActive_Personnel[".editFields"][] = "telephone";

$tdataActive_Personnel[".inlineEditFields"] = array();

$tdataActive_Personnel[".exportFields"] = array();
$tdataActive_Personnel[".exportFields"][] = "ID";
$tdataActive_Personnel[".exportFields"][] = "skills";
$tdataActive_Personnel[".exportFields"][] = "dateofbirth";
$tdataActive_Personnel[".exportFields"][] = "civilstatus";
$tdataActive_Personnel[".exportFields"][] = "lastname";
$tdataActive_Personnel[".exportFields"][] = "firstname";
$tdataActive_Personnel[".exportFields"][] = "middlename";
$tdataActive_Personnel[".exportFields"][] = "fullName";
$tdataActive_Personnel[".exportFields"][] = "jobtitle";
$tdataActive_Personnel[".exportFields"][] = "department";
$tdataActive_Personnel[".exportFields"][] = "unit";
$tdataActive_Personnel[".exportFields"][] = "gender";
$tdataActive_Personnel[".exportFields"][] = "currentaddress";
$tdataActive_Personnel[".exportFields"][] = "permanentaddress";
$tdataActive_Personnel[".exportFields"][] = "sss";
$tdataActive_Personnel[".exportFields"][] = "tin";
$tdataActive_Personnel[".exportFields"][] = "pagibig";
$tdataActive_Personnel[".exportFields"][] = "philhealth";
$tdataActive_Personnel[".exportFields"][] = "emailaddress";
$tdataActive_Personnel[".exportFields"][] = "telephone";

$tdataActive_Personnel[".importFields"] = array();
$tdataActive_Personnel[".importFields"][] = "ID";
$tdataActive_Personnel[".importFields"][] = "fullName";
$tdataActive_Personnel[".importFields"][] = "department";
$tdataActive_Personnel[".importFields"][] = "unit";
$tdataActive_Personnel[".importFields"][] = "jobtitle";
$tdataActive_Personnel[".importFields"][] = "firstname";
$tdataActive_Personnel[".importFields"][] = "middlename";
$tdataActive_Personnel[".importFields"][] = "lastname";
$tdataActive_Personnel[".importFields"][] = "gender";
$tdataActive_Personnel[".importFields"][] = "currentaddress";
$tdataActive_Personnel[".importFields"][] = "permanentaddress";
$tdataActive_Personnel[".importFields"][] = "sss";
$tdataActive_Personnel[".importFields"][] = "tin";
$tdataActive_Personnel[".importFields"][] = "pagibig";
$tdataActive_Personnel[".importFields"][] = "philhealth";
$tdataActive_Personnel[".importFields"][] = "emailaddress";
$tdataActive_Personnel[".importFields"][] = "telephone";
$tdataActive_Personnel[".importFields"][] = "dateofbirth";
$tdataActive_Personnel[".importFields"][] = "skills";
$tdataActive_Personnel[".importFields"][] = "civilstatus";

$tdataActive_Personnel[".printFields"] = array();
$tdataActive_Personnel[".printFields"][] = "ID";
$tdataActive_Personnel[".printFields"][] = "skills";
$tdataActive_Personnel[".printFields"][] = "dateofbirth";
$tdataActive_Personnel[".printFields"][] = "civilstatus";
$tdataActive_Personnel[".printFields"][] = "lastname";
$tdataActive_Personnel[".printFields"][] = "firstname";
$tdataActive_Personnel[".printFields"][] = "middlename";
$tdataActive_Personnel[".printFields"][] = "fullName";
$tdataActive_Personnel[".printFields"][] = "jobtitle";
$tdataActive_Personnel[".printFields"][] = "department";
$tdataActive_Personnel[".printFields"][] = "unit";
$tdataActive_Personnel[".printFields"][] = "gender";
$tdataActive_Personnel[".printFields"][] = "currentaddress";
$tdataActive_Personnel[".printFields"][] = "permanentaddress";
$tdataActive_Personnel[".printFields"][] = "sss";
$tdataActive_Personnel[".printFields"][] = "tin";
$tdataActive_Personnel[".printFields"][] = "pagibig";
$tdataActive_Personnel[".printFields"][] = "philhealth";
$tdataActive_Personnel[".printFields"][] = "emailaddress";
$tdataActive_Personnel[".printFields"][] = "telephone";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","ID"); 
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

	

	
	$tdataActive_Personnel["ID"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","fullName"); 
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

	

	
	$tdataActive_Personnel["fullName"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","department"); 
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

	
	$tdataActive_Personnel["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","unit"); 
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

	
	$tdataActive_Personnel["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","jobtitle"); 
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

	
	$tdataActive_Personnel["jobtitle"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","firstname"); 
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

	

	
	$tdataActive_Personnel["firstname"] = $fdata;
//	middlename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "middlename";
	$fdata["GoodName"] = "middlename";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","middlename"); 
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

	

	
	$tdataActive_Personnel["middlename"] = $fdata;
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","lastname"); 
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

	

	
	$tdataActive_Personnel["lastname"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","gender"); 
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

	

	
	$tdataActive_Personnel["gender"] = $fdata;
//	currentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "currentaddress";
	$fdata["GoodName"] = "currentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","currentaddress"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "currentaddress"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.currentaddress";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
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

	

	
	$tdataActive_Personnel["currentaddress"] = $fdata;
//	permanentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "permanentaddress";
	$fdata["GoodName"] = "permanentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","permanentaddress"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "permanentaddress"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.permanentaddress";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
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

	

	
	$tdataActive_Personnel["permanentaddress"] = $fdata;
//	sss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sss";
	$fdata["GoodName"] = "sss";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","sss"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sss"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.sss";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataActive_Personnel["sss"] = $fdata;
//	tin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "tin";
	$fdata["GoodName"] = "tin";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","tin"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tin"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.tin";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataActive_Personnel["tin"] = $fdata;
//	pagibig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pagibig";
	$fdata["GoodName"] = "pagibig";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","pagibig"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pagibig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.pagibig";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataActive_Personnel["pagibig"] = $fdata;
//	philhealth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "philhealth";
	$fdata["GoodName"] = "philhealth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","philhealth"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "philhealth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.philhealth";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataActive_Personnel["philhealth"] = $fdata;
//	emailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "emailaddress";
	$fdata["GoodName"] = "emailaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","emailaddress"); 
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

	

	
	$tdataActive_Personnel["emailaddress"] = $fdata;
//	telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "telephone";
	$fdata["GoodName"] = "telephone";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","telephone"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "telephone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.telephone";
	
		
		
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

	

	
	$tdataActive_Personnel["telephone"] = $fdata;
//	dateofbirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dateofbirth";
	$fdata["GoodName"] = "dateofbirth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","dateofbirth"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dateofbirth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.dateofbirth";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataActive_Personnel["dateofbirth"] = $fdata;
//	skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "skills";
	$fdata["GoodName"] = "skills";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","skills"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "skills"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.skills";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
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

	

	
	$tdataActive_Personnel["skills"] = $fdata;
//	civilstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "civilstatus";
	$fdata["GoodName"] = "civilstatus";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Active_Personnel","civilstatus"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "civilstatus"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_personnel.civilstatus";
	
		
		
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

	

	
	$tdataActive_Personnel["civilstatus"] = $fdata;

	
$tables_data["Active Personnel"]=&$tdataActive_Personnel;
$field_labels["Active_Personnel"] = &$fieldLabelsActive_Personnel;
$fieldToolTips["Active Personnel"] = &$fieldToolTipsActive_Personnel;
$page_titles["Active_Personnel"] = &$pageTitlesActive_Personnel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Active Personnel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Active Personnel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Active_Personnel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.currentaddress,  hris_personnel.permanentaddress,  hris_personnel.sss,  hris_personnel.tin,  hris_personnel.pagibig,  hris_personnel.philhealth,  hris_personnel.emailaddress,  hris_personnel.telephone,  hris_personnel.dateofbirth,  hris_personnel.skills,  hris_personnel.civilstatus";
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
	"m_srcTableName" => "Active Personnel"
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
	"m_srcTableName" => "Active Personnel"
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
	"m_srcTableName" => "Active Personnel"
));

$proto9["m_sql"] = "hris_personnel.ID";
$proto9["m_srcTableName"] = "Active Personnel";
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
$proto11["m_srcTableName"] = "Active Personnel";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "fullName";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Active Personnel"
));

$proto16["m_sql"] = "hris_job.department";
$proto16["m_srcTableName"] = "Active Personnel";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Active Personnel"
));

$proto18["m_sql"] = "hris_job.unit";
$proto18["m_srcTableName"] = "Active Personnel";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Active Personnel"
));

$proto20["m_sql"] = "hris_job.jobtitle";
$proto20["m_srcTableName"] = "Active Personnel";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto22["m_sql"] = "hris_personnel.firstname";
$proto22["m_srcTableName"] = "Active Personnel";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "middlename",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto24["m_sql"] = "hris_personnel.middlename";
$proto24["m_srcTableName"] = "Active Personnel";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto26["m_sql"] = "hris_personnel.lastname";
$proto26["m_srcTableName"] = "Active Personnel";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto28["m_sql"] = "hris_personnel.gender";
$proto28["m_srcTableName"] = "Active Personnel";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "currentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto30["m_sql"] = "hris_personnel.currentaddress";
$proto30["m_srcTableName"] = "Active Personnel";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "permanentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto32["m_sql"] = "hris_personnel.permanentaddress";
$proto32["m_srcTableName"] = "Active Personnel";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sss",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto34["m_sql"] = "hris_personnel.sss";
$proto34["m_srcTableName"] = "Active Personnel";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tin",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto36["m_sql"] = "hris_personnel.tin";
$proto36["m_srcTableName"] = "Active Personnel";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pagibig",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto38["m_sql"] = "hris_personnel.pagibig";
$proto38["m_srcTableName"] = "Active Personnel";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "philhealth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto40["m_sql"] = "hris_personnel.philhealth";
$proto40["m_srcTableName"] = "Active Personnel";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto42["m_sql"] = "hris_personnel.emailaddress";
$proto42["m_srcTableName"] = "Active Personnel";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "telephone",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto44["m_sql"] = "hris_personnel.telephone";
$proto44["m_srcTableName"] = "Active Personnel";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "dateofbirth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto46["m_sql"] = "hris_personnel.dateofbirth";
$proto46["m_srcTableName"] = "Active Personnel";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "skills",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto48["m_sql"] = "hris_personnel.skills";
$proto48["m_srcTableName"] = "Active Personnel";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "civilstatus",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Active Personnel"
));

$proto50["m_sql"] = "hris_personnel.civilstatus";
$proto50["m_srcTableName"] = "Active Personnel";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "hris_personnel";
$proto53["m_srcTableName"] = "Active Personnel";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ID";
$proto53["m_columns"][] = "firstname";
$proto53["m_columns"][] = "middlename";
$proto53["m_columns"][] = "lastname";
$proto53["m_columns"][] = "gender";
$proto53["m_columns"][] = "currentaddress";
$proto53["m_columns"][] = "permanentaddress";
$proto53["m_columns"][] = "sss";
$proto53["m_columns"][] = "tin";
$proto53["m_columns"][] = "pagibig";
$proto53["m_columns"][] = "philhealth";
$proto53["m_columns"][] = "emailaddress";
$proto53["m_columns"][] = "telephone";
$proto53["m_columns"][] = "dateofbirth";
$proto53["m_columns"][] = "skills";
$proto53["m_columns"][] = "civilstatus";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "hris_personnel";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Active Personnel";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_CROSSJOIN";
			$proto57=array();
$proto57["m_strName"] = "hris_job";
$proto57["m_srcTableName"] = "Active Personnel";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "ID";
$proto57["m_columns"][] = "empID";
$proto57["m_columns"][] = "department";
$proto57["m_columns"][] = "unit";
$proto57["m_columns"][] = "jobtitle";
$proto57["m_columns"][] = "jobdescription";
$proto57["m_columns"][] = "datehired";
$proto57["m_columns"][] = "reference";
$proto57["m_columns"][] = "dateend";
$proto57["m_columns"][] = "type";
$proto57["m_columns"][] = "category";
$proto57["m_columns"][] = "empstatus";
$proto57["m_columns"][] = "personnelID";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "hris_job";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "Active Personnel";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Active Personnel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Active_Personnel = createSqlQuery_Active_Personnel();


	
																				
	
$tdataActive_Personnel[".sqlquery"] = $queryData_Active_Personnel;

$tableEvents["Active Personnel"] = new eventsBase;
$tdataActive_Personnel[".hasEvents"] = false;

?>