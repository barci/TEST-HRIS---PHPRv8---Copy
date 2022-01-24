<?php
require_once(getabspath("classes/cipherer.php"));




$tdataInactive_Personnel = array();	
	$tdataInactive_Personnel[".truncateText"] = true;
	$tdataInactive_Personnel[".NumberOfChars"] = 80; 
	$tdataInactive_Personnel[".ShortName"] = "Inactive_Personnel";
	$tdataInactive_Personnel[".OwnerID"] = "";
	$tdataInactive_Personnel[".OriginalTable"] = "hris_personnel";

//	field labels
$fieldLabelsInactive_Personnel = array();
$fieldToolTipsInactive_Personnel = array();
$pageTitlesInactive_Personnel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsInactive_Personnel["English"] = array();
	$fieldToolTipsInactive_Personnel["English"] = array();
	$pageTitlesInactive_Personnel["English"] = array();
	$fieldLabelsInactive_Personnel["English"]["ID"] = "ID";
	$fieldToolTipsInactive_Personnel["English"]["ID"] = "";
	$fieldLabelsInactive_Personnel["English"]["firstname"] = "Firstname";
	$fieldToolTipsInactive_Personnel["English"]["firstname"] = "";
	$fieldLabelsInactive_Personnel["English"]["middlename"] = "Middlename";
	$fieldToolTipsInactive_Personnel["English"]["middlename"] = "";
	$fieldLabelsInactive_Personnel["English"]["lastname"] = "Lastname";
	$fieldToolTipsInactive_Personnel["English"]["lastname"] = "";
	$fieldLabelsInactive_Personnel["English"]["gender"] = "Gender";
	$fieldToolTipsInactive_Personnel["English"]["gender"] = "";
	$fieldLabelsInactive_Personnel["English"]["currentaddress"] = "Currentaddress";
	$fieldToolTipsInactive_Personnel["English"]["currentaddress"] = "";
	$fieldLabelsInactive_Personnel["English"]["permanentaddress"] = "Permanentaddress";
	$fieldToolTipsInactive_Personnel["English"]["permanentaddress"] = "";
	$fieldLabelsInactive_Personnel["English"]["sss"] = "Sss";
	$fieldToolTipsInactive_Personnel["English"]["sss"] = "";
	$fieldLabelsInactive_Personnel["English"]["tin"] = "Tin";
	$fieldToolTipsInactive_Personnel["English"]["tin"] = "";
	$fieldLabelsInactive_Personnel["English"]["pagibig"] = "Pagibig";
	$fieldToolTipsInactive_Personnel["English"]["pagibig"] = "";
	$fieldLabelsInactive_Personnel["English"]["philhealth"] = "Philhealth";
	$fieldToolTipsInactive_Personnel["English"]["philhealth"] = "";
	$fieldLabelsInactive_Personnel["English"]["emailaddress"] = "Emailaddress";
	$fieldToolTipsInactive_Personnel["English"]["emailaddress"] = "";
	$fieldLabelsInactive_Personnel["English"]["telephone"] = "Telephone";
	$fieldToolTipsInactive_Personnel["English"]["telephone"] = "";
	$fieldLabelsInactive_Personnel["English"]["dateofbirth"] = "Dateofbirth";
	$fieldToolTipsInactive_Personnel["English"]["dateofbirth"] = "";
	$fieldLabelsInactive_Personnel["English"]["skills"] = "Skills";
	$fieldToolTipsInactive_Personnel["English"]["skills"] = "";
	$fieldLabelsInactive_Personnel["English"]["civilstatus"] = "Civilstatus";
	$fieldToolTipsInactive_Personnel["English"]["civilstatus"] = "";
	$fieldLabelsInactive_Personnel["English"]["fullName"] = "Full Name";
	$fieldToolTipsInactive_Personnel["English"]["fullName"] = "";
	$fieldLabelsInactive_Personnel["English"]["department"] = "Department";
	$fieldToolTipsInactive_Personnel["English"]["department"] = "";
	$fieldLabelsInactive_Personnel["English"]["unit"] = "Unit";
	$fieldToolTipsInactive_Personnel["English"]["unit"] = "";
	$fieldLabelsInactive_Personnel["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipsInactive_Personnel["English"]["jobtitle"] = "";
	if (count($fieldToolTipsInactive_Personnel["English"]))
		$tdataInactive_Personnel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsInactive_Personnel[""] = array();
	$fieldToolTipsInactive_Personnel[""] = array();
	$pageTitlesInactive_Personnel[""] = array();
	$fieldLabelsInactive_Personnel[""]["department"] = "Department";
	$fieldToolTipsInactive_Personnel[""]["department"] = "";
	$fieldLabelsInactive_Personnel[""]["unit"] = "Unit";
	$fieldToolTipsInactive_Personnel[""]["unit"] = "";
	$fieldLabelsInactive_Personnel[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipsInactive_Personnel[""]["jobtitle"] = "";
	$fieldLabelsInactive_Personnel[""]["ID"] = "ID";
	$fieldToolTipsInactive_Personnel[""]["ID"] = "";
	if (count($fieldToolTipsInactive_Personnel[""]))
		$tdataInactive_Personnel[".isUseToolTips"] = true;
}
	
	
	$tdataInactive_Personnel[".NCSearch"] = true;



$tdataInactive_Personnel[".shortTableName"] = "Inactive_Personnel";
$tdataInactive_Personnel[".nSecOptions"] = 0;
$tdataInactive_Personnel[".recsPerRowList"] = 1;
$tdataInactive_Personnel[".mainTableOwnerID"] = "";
$tdataInactive_Personnel[".moveNext"] = 1;
$tdataInactive_Personnel[".nType"] = 1;

$tdataInactive_Personnel[".strOriginalTableName"] = "hris_personnel";




$tdataInactive_Personnel[".showAddInPopup"] = false;

$tdataInactive_Personnel[".showEditInPopup"] = false;

$tdataInactive_Personnel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataInactive_Personnel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataInactive_Personnel[".fieldsForRegister"] = array();

$tdataInactive_Personnel[".listAjax"] = false;

	$tdataInactive_Personnel[".audit"] = false;

	$tdataInactive_Personnel[".locking"] = false;

$tdataInactive_Personnel[".edit"] = true;

$tdataInactive_Personnel[".list"] = true;

$tdataInactive_Personnel[".view"] = true;

$tdataInactive_Personnel[".import"] = true;

$tdataInactive_Personnel[".exportTo"] = true;

$tdataInactive_Personnel[".printFriendly"] = true;

$tdataInactive_Personnel[".delete"] = true;

$tdataInactive_Personnel[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataInactive_Personnel[".searchSaving"] = false;
//

$tdataInactive_Personnel[".showSearchPanel"] = true;
		$tdataInactive_Personnel[".flexibleSearch"] = true;		

if (isMobile())
	$tdataInactive_Personnel[".isUseAjaxSuggest"] = false;
else 
	$tdataInactive_Personnel[".isUseAjaxSuggest"] = true;

$tdataInactive_Personnel[".rowHighlite"] = true;



$tdataInactive_Personnel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataInactive_Personnel[".isUseTimeForSearch"] = false;





$tdataInactive_Personnel[".allSearchFields"] = array();
$tdataInactive_Personnel[".filterFields"] = array();
$tdataInactive_Personnel[".requiredSearchFields"] = array();

$tdataInactive_Personnel[".allSearchFields"][] = "ID";
	$tdataInactive_Personnel[".allSearchFields"][] = "skills";
	$tdataInactive_Personnel[".allSearchFields"][] = "department";
	$tdataInactive_Personnel[".allSearchFields"][] = "unit";
	$tdataInactive_Personnel[".allSearchFields"][] = "jobtitle";
	$tdataInactive_Personnel[".allSearchFields"][] = "firstname";
	$tdataInactive_Personnel[".allSearchFields"][] = "middlename";
	$tdataInactive_Personnel[".allSearchFields"][] = "lastname";
	$tdataInactive_Personnel[".allSearchFields"][] = "dateofbirth";
	$tdataInactive_Personnel[".allSearchFields"][] = "civilstatus";
	$tdataInactive_Personnel[".allSearchFields"][] = "fullName";
	$tdataInactive_Personnel[".allSearchFields"][] = "gender";
	$tdataInactive_Personnel[".allSearchFields"][] = "currentaddress";
	$tdataInactive_Personnel[".allSearchFields"][] = "permanentaddress";
	$tdataInactive_Personnel[".allSearchFields"][] = "sss";
	$tdataInactive_Personnel[".allSearchFields"][] = "tin";
	$tdataInactive_Personnel[".allSearchFields"][] = "pagibig";
	$tdataInactive_Personnel[".allSearchFields"][] = "philhealth";
	$tdataInactive_Personnel[".allSearchFields"][] = "emailaddress";
	$tdataInactive_Personnel[".allSearchFields"][] = "telephone";
	
$tdataInactive_Personnel[".filterFields"][] = "department";	
$tdataInactive_Personnel[".filterFields"][] = "unit";	
$tdataInactive_Personnel[".filterFields"][] = "jobtitle";	

$tdataInactive_Personnel[".googleLikeFields"] = array();
$tdataInactive_Personnel[".googleLikeFields"][] = "ID";
$tdataInactive_Personnel[".googleLikeFields"][] = "fullName";
$tdataInactive_Personnel[".googleLikeFields"][] = "department";
$tdataInactive_Personnel[".googleLikeFields"][] = "unit";
$tdataInactive_Personnel[".googleLikeFields"][] = "jobtitle";
$tdataInactive_Personnel[".googleLikeFields"][] = "firstname";
$tdataInactive_Personnel[".googleLikeFields"][] = "middlename";
$tdataInactive_Personnel[".googleLikeFields"][] = "lastname";
$tdataInactive_Personnel[".googleLikeFields"][] = "gender";
$tdataInactive_Personnel[".googleLikeFields"][] = "currentaddress";
$tdataInactive_Personnel[".googleLikeFields"][] = "permanentaddress";
$tdataInactive_Personnel[".googleLikeFields"][] = "sss";
$tdataInactive_Personnel[".googleLikeFields"][] = "tin";
$tdataInactive_Personnel[".googleLikeFields"][] = "pagibig";
$tdataInactive_Personnel[".googleLikeFields"][] = "philhealth";
$tdataInactive_Personnel[".googleLikeFields"][] = "emailaddress";
$tdataInactive_Personnel[".googleLikeFields"][] = "telephone";
$tdataInactive_Personnel[".googleLikeFields"][] = "dateofbirth";
$tdataInactive_Personnel[".googleLikeFields"][] = "skills";
$tdataInactive_Personnel[".googleLikeFields"][] = "civilstatus";


$tdataInactive_Personnel[".advSearchFields"] = array();
$tdataInactive_Personnel[".advSearchFields"][] = "ID";
$tdataInactive_Personnel[".advSearchFields"][] = "skills";
$tdataInactive_Personnel[".advSearchFields"][] = "department";
$tdataInactive_Personnel[".advSearchFields"][] = "unit";
$tdataInactive_Personnel[".advSearchFields"][] = "jobtitle";
$tdataInactive_Personnel[".advSearchFields"][] = "firstname";
$tdataInactive_Personnel[".advSearchFields"][] = "middlename";
$tdataInactive_Personnel[".advSearchFields"][] = "lastname";
$tdataInactive_Personnel[".advSearchFields"][] = "dateofbirth";
$tdataInactive_Personnel[".advSearchFields"][] = "civilstatus";
$tdataInactive_Personnel[".advSearchFields"][] = "fullName";
$tdataInactive_Personnel[".advSearchFields"][] = "gender";
$tdataInactive_Personnel[".advSearchFields"][] = "currentaddress";
$tdataInactive_Personnel[".advSearchFields"][] = "permanentaddress";
$tdataInactive_Personnel[".advSearchFields"][] = "sss";
$tdataInactive_Personnel[".advSearchFields"][] = "tin";
$tdataInactive_Personnel[".advSearchFields"][] = "pagibig";
$tdataInactive_Personnel[".advSearchFields"][] = "philhealth";
$tdataInactive_Personnel[".advSearchFields"][] = "emailaddress";
$tdataInactive_Personnel[".advSearchFields"][] = "telephone";

$tdataInactive_Personnel[".tableType"] = "list";

$tdataInactive_Personnel[".printerPageOrientation"] = 0;
$tdataInactive_Personnel[".nPrinterPageScale"] = 100;

$tdataInactive_Personnel[".nPrinterSplitRecords"] = 40;

$tdataInactive_Personnel[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataInactive_Personnel[".pageSize"] = 20;

$tdataInactive_Personnel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataInactive_Personnel[".strOrderBy"] = $tstrOrderBy;

$tdataInactive_Personnel[".orderindexes"] = array();

$tdataInactive_Personnel[".sqlHead"] = "SELECT hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.currentaddress,  hris_personnel.permanentaddress,  hris_personnel.sss,  hris_personnel.tin,  hris_personnel.pagibig,  hris_personnel.philhealth,  hris_personnel.emailaddress,  hris_personnel.telephone,  hris_personnel.dateofbirth,  hris_personnel.skills,  hris_personnel.civilstatus";
$tdataInactive_Personnel[".sqlFrom"] = "FROM hris_personnel  , hris_job";
$tdataInactive_Personnel[".sqlWhereExpr"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus !='active'";
$tdataInactive_Personnel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataInactive_Personnel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataInactive_Personnel[".arrGroupsPerPage"] = $arrGPP;

$tdataInactive_Personnel[".highlightSearchResults"] = true;

$tableKeysInactive_Personnel = array();
$tableKeysInactive_Personnel[] = "ID";
$tdataInactive_Personnel[".Keys"] = $tableKeysInactive_Personnel;

$tdataInactive_Personnel[".listFields"] = array();
$tdataInactive_Personnel[".listFields"][] = "department";
$tdataInactive_Personnel[".listFields"][] = "unit";
$tdataInactive_Personnel[".listFields"][] = "jobtitle";
$tdataInactive_Personnel[".listFields"][] = "fullName";
$tdataInactive_Personnel[".listFields"][] = "gender";
$tdataInactive_Personnel[".listFields"][] = "currentaddress";
$tdataInactive_Personnel[".listFields"][] = "permanentaddress";
$tdataInactive_Personnel[".listFields"][] = "emailaddress";
$tdataInactive_Personnel[".listFields"][] = "telephone";

$tdataInactive_Personnel[".hideMobileList"] = array();


$tdataInactive_Personnel[".viewFields"] = array();
$tdataInactive_Personnel[".viewFields"][] = "ID";
$tdataInactive_Personnel[".viewFields"][] = "skills";
$tdataInactive_Personnel[".viewFields"][] = "department";
$tdataInactive_Personnel[".viewFields"][] = "unit";
$tdataInactive_Personnel[".viewFields"][] = "jobtitle";
$tdataInactive_Personnel[".viewFields"][] = "firstname";
$tdataInactive_Personnel[".viewFields"][] = "middlename";
$tdataInactive_Personnel[".viewFields"][] = "lastname";
$tdataInactive_Personnel[".viewFields"][] = "dateofbirth";
$tdataInactive_Personnel[".viewFields"][] = "civilstatus";
$tdataInactive_Personnel[".viewFields"][] = "fullName";
$tdataInactive_Personnel[".viewFields"][] = "gender";
$tdataInactive_Personnel[".viewFields"][] = "currentaddress";
$tdataInactive_Personnel[".viewFields"][] = "permanentaddress";
$tdataInactive_Personnel[".viewFields"][] = "sss";
$tdataInactive_Personnel[".viewFields"][] = "tin";
$tdataInactive_Personnel[".viewFields"][] = "pagibig";
$tdataInactive_Personnel[".viewFields"][] = "philhealth";
$tdataInactive_Personnel[".viewFields"][] = "emailaddress";
$tdataInactive_Personnel[".viewFields"][] = "telephone";

$tdataInactive_Personnel[".addFields"] = array();
$tdataInactive_Personnel[".addFields"][] = "firstname";
$tdataInactive_Personnel[".addFields"][] = "middlename";
$tdataInactive_Personnel[".addFields"][] = "lastname";
$tdataInactive_Personnel[".addFields"][] = "skills";
$tdataInactive_Personnel[".addFields"][] = "dateofbirth";
$tdataInactive_Personnel[".addFields"][] = "civilstatus";
$tdataInactive_Personnel[".addFields"][] = "gender";
$tdataInactive_Personnel[".addFields"][] = "currentaddress";
$tdataInactive_Personnel[".addFields"][] = "permanentaddress";
$tdataInactive_Personnel[".addFields"][] = "sss";
$tdataInactive_Personnel[".addFields"][] = "tin";
$tdataInactive_Personnel[".addFields"][] = "pagibig";
$tdataInactive_Personnel[".addFields"][] = "philhealth";
$tdataInactive_Personnel[".addFields"][] = "emailaddress";
$tdataInactive_Personnel[".addFields"][] = "telephone";

$tdataInactive_Personnel[".inlineAddFields"] = array();

$tdataInactive_Personnel[".editFields"] = array();
$tdataInactive_Personnel[".editFields"][] = "firstname";
$tdataInactive_Personnel[".editFields"][] = "middlename";
$tdataInactive_Personnel[".editFields"][] = "lastname";
$tdataInactive_Personnel[".editFields"][] = "skills";
$tdataInactive_Personnel[".editFields"][] = "dateofbirth";
$tdataInactive_Personnel[".editFields"][] = "civilstatus";
$tdataInactive_Personnel[".editFields"][] = "gender";
$tdataInactive_Personnel[".editFields"][] = "currentaddress";
$tdataInactive_Personnel[".editFields"][] = "permanentaddress";
$tdataInactive_Personnel[".editFields"][] = "sss";
$tdataInactive_Personnel[".editFields"][] = "tin";
$tdataInactive_Personnel[".editFields"][] = "pagibig";
$tdataInactive_Personnel[".editFields"][] = "philhealth";
$tdataInactive_Personnel[".editFields"][] = "emailaddress";
$tdataInactive_Personnel[".editFields"][] = "telephone";

$tdataInactive_Personnel[".inlineEditFields"] = array();

$tdataInactive_Personnel[".exportFields"] = array();
$tdataInactive_Personnel[".exportFields"][] = "ID";
$tdataInactive_Personnel[".exportFields"][] = "skills";
$tdataInactive_Personnel[".exportFields"][] = "department";
$tdataInactive_Personnel[".exportFields"][] = "unit";
$tdataInactive_Personnel[".exportFields"][] = "jobtitle";
$tdataInactive_Personnel[".exportFields"][] = "firstname";
$tdataInactive_Personnel[".exportFields"][] = "middlename";
$tdataInactive_Personnel[".exportFields"][] = "lastname";
$tdataInactive_Personnel[".exportFields"][] = "dateofbirth";
$tdataInactive_Personnel[".exportFields"][] = "civilstatus";
$tdataInactive_Personnel[".exportFields"][] = "fullName";
$tdataInactive_Personnel[".exportFields"][] = "gender";
$tdataInactive_Personnel[".exportFields"][] = "currentaddress";
$tdataInactive_Personnel[".exportFields"][] = "permanentaddress";
$tdataInactive_Personnel[".exportFields"][] = "sss";
$tdataInactive_Personnel[".exportFields"][] = "tin";
$tdataInactive_Personnel[".exportFields"][] = "pagibig";
$tdataInactive_Personnel[".exportFields"][] = "philhealth";
$tdataInactive_Personnel[".exportFields"][] = "emailaddress";
$tdataInactive_Personnel[".exportFields"][] = "telephone";

$tdataInactive_Personnel[".importFields"] = array();
$tdataInactive_Personnel[".importFields"][] = "ID";
$tdataInactive_Personnel[".importFields"][] = "fullName";
$tdataInactive_Personnel[".importFields"][] = "department";
$tdataInactive_Personnel[".importFields"][] = "unit";
$tdataInactive_Personnel[".importFields"][] = "jobtitle";
$tdataInactive_Personnel[".importFields"][] = "firstname";
$tdataInactive_Personnel[".importFields"][] = "middlename";
$tdataInactive_Personnel[".importFields"][] = "lastname";
$tdataInactive_Personnel[".importFields"][] = "gender";
$tdataInactive_Personnel[".importFields"][] = "currentaddress";
$tdataInactive_Personnel[".importFields"][] = "permanentaddress";
$tdataInactive_Personnel[".importFields"][] = "sss";
$tdataInactive_Personnel[".importFields"][] = "tin";
$tdataInactive_Personnel[".importFields"][] = "pagibig";
$tdataInactive_Personnel[".importFields"][] = "philhealth";
$tdataInactive_Personnel[".importFields"][] = "emailaddress";
$tdataInactive_Personnel[".importFields"][] = "telephone";
$tdataInactive_Personnel[".importFields"][] = "dateofbirth";
$tdataInactive_Personnel[".importFields"][] = "skills";
$tdataInactive_Personnel[".importFields"][] = "civilstatus";

$tdataInactive_Personnel[".printFields"] = array();
$tdataInactive_Personnel[".printFields"][] = "ID";
$tdataInactive_Personnel[".printFields"][] = "skills";
$tdataInactive_Personnel[".printFields"][] = "department";
$tdataInactive_Personnel[".printFields"][] = "unit";
$tdataInactive_Personnel[".printFields"][] = "jobtitle";
$tdataInactive_Personnel[".printFields"][] = "firstname";
$tdataInactive_Personnel[".printFields"][] = "middlename";
$tdataInactive_Personnel[".printFields"][] = "lastname";
$tdataInactive_Personnel[".printFields"][] = "dateofbirth";
$tdataInactive_Personnel[".printFields"][] = "civilstatus";
$tdataInactive_Personnel[".printFields"][] = "fullName";
$tdataInactive_Personnel[".printFields"][] = "gender";
$tdataInactive_Personnel[".printFields"][] = "currentaddress";
$tdataInactive_Personnel[".printFields"][] = "permanentaddress";
$tdataInactive_Personnel[".printFields"][] = "sss";
$tdataInactive_Personnel[".printFields"][] = "tin";
$tdataInactive_Personnel[".printFields"][] = "pagibig";
$tdataInactive_Personnel[".printFields"][] = "philhealth";
$tdataInactive_Personnel[".printFields"][] = "emailaddress";
$tdataInactive_Personnel[".printFields"][] = "telephone";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","ID"); 
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

	

	
	$tdataInactive_Personnel["ID"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","fullName"); 
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

	

	
	$tdataInactive_Personnel["fullName"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","department"); 
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

	
	$tdataInactive_Personnel["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","unit"); 
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

	
	$tdataInactive_Personnel["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","jobtitle"); 
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

	
	$tdataInactive_Personnel["jobtitle"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","firstname"); 
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

	

	
	$tdataInactive_Personnel["firstname"] = $fdata;
//	middlename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "middlename";
	$fdata["GoodName"] = "middlename";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","middlename"); 
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

	

	
	$tdataInactive_Personnel["middlename"] = $fdata;
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","lastname"); 
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

	

	
	$tdataInactive_Personnel["lastname"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","gender"); 
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

	

	
	$tdataInactive_Personnel["gender"] = $fdata;
//	currentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "currentaddress";
	$fdata["GoodName"] = "currentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","currentaddress"); 
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

	

	
	$tdataInactive_Personnel["currentaddress"] = $fdata;
//	permanentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "permanentaddress";
	$fdata["GoodName"] = "permanentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","permanentaddress"); 
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

	

	
	$tdataInactive_Personnel["permanentaddress"] = $fdata;
//	sss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sss";
	$fdata["GoodName"] = "sss";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","sss"); 
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

	

	
	$tdataInactive_Personnel["sss"] = $fdata;
//	tin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "tin";
	$fdata["GoodName"] = "tin";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","tin"); 
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

	

	
	$tdataInactive_Personnel["tin"] = $fdata;
//	pagibig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pagibig";
	$fdata["GoodName"] = "pagibig";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","pagibig"); 
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

	

	
	$tdataInactive_Personnel["pagibig"] = $fdata;
//	philhealth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "philhealth";
	$fdata["GoodName"] = "philhealth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","philhealth"); 
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

	

	
	$tdataInactive_Personnel["philhealth"] = $fdata;
//	emailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "emailaddress";
	$fdata["GoodName"] = "emailaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","emailaddress"); 
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

	

	
	$tdataInactive_Personnel["emailaddress"] = $fdata;
//	telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "telephone";
	$fdata["GoodName"] = "telephone";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","telephone"); 
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

	

	
	$tdataInactive_Personnel["telephone"] = $fdata;
//	dateofbirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dateofbirth";
	$fdata["GoodName"] = "dateofbirth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","dateofbirth"); 
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

	

	
	$tdataInactive_Personnel["dateofbirth"] = $fdata;
//	skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "skills";
	$fdata["GoodName"] = "skills";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","skills"); 
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

	

	
	$tdataInactive_Personnel["skills"] = $fdata;
//	civilstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "civilstatus";
	$fdata["GoodName"] = "civilstatus";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("Inactive_Personnel","civilstatus"); 
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

	

	
	$tdataInactive_Personnel["civilstatus"] = $fdata;

	
$tables_data["Inactive Personnel"]=&$tdataInactive_Personnel;
$field_labels["Inactive_Personnel"] = &$fieldLabelsInactive_Personnel;
$fieldToolTips["Inactive Personnel"] = &$fieldToolTipsInactive_Personnel;
$page_titles["Inactive_Personnel"] = &$pageTitlesInactive_Personnel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Inactive Personnel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Inactive Personnel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Inactive_Personnel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_personnel.ID,  concat(upper(hris_personnel.lastname), \", \", hris_personnel.firstname) AS fullName,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_personnel.firstname,  hris_personnel.middlename,  hris_personnel.lastname,  hris_personnel.gender,  hris_personnel.currentaddress,  hris_personnel.permanentaddress,  hris_personnel.sss,  hris_personnel.tin,  hris_personnel.pagibig,  hris_personnel.philhealth,  hris_personnel.emailaddress,  hris_personnel.telephone,  hris_personnel.dateofbirth,  hris_personnel.skills,  hris_personnel.civilstatus";
$proto0["m_strFrom"] = "FROM hris_personnel  , hris_job";
$proto0["m_strWhere"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus !='active'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus !='active'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "hris_personnel.ID =hris_job.personnelID AND hris_job.empstatus !='active'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "hris_personnel.ID =hris_job.personnelID";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
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
$proto5["m_sql"] = "hris_job.empstatus !='active'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "empstatus",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Inactive Personnel"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "!='active'";
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
	"m_srcTableName" => "Inactive Personnel"
));

$proto9["m_sql"] = "hris_personnel.ID";
$proto9["m_srcTableName"] = "Inactive Personnel";
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
$proto11["m_srcTableName"] = "Inactive Personnel";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "fullName";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Inactive Personnel"
));

$proto16["m_sql"] = "hris_job.department";
$proto16["m_srcTableName"] = "Inactive Personnel";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Inactive Personnel"
));

$proto18["m_sql"] = "hris_job.unit";
$proto18["m_srcTableName"] = "Inactive Personnel";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "Inactive Personnel"
));

$proto20["m_sql"] = "hris_job.jobtitle";
$proto20["m_srcTableName"] = "Inactive Personnel";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto22["m_sql"] = "hris_personnel.firstname";
$proto22["m_srcTableName"] = "Inactive Personnel";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "middlename",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto24["m_sql"] = "hris_personnel.middlename";
$proto24["m_srcTableName"] = "Inactive Personnel";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto26["m_sql"] = "hris_personnel.lastname";
$proto26["m_srcTableName"] = "Inactive Personnel";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto28["m_sql"] = "hris_personnel.gender";
$proto28["m_srcTableName"] = "Inactive Personnel";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "currentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto30["m_sql"] = "hris_personnel.currentaddress";
$proto30["m_srcTableName"] = "Inactive Personnel";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "permanentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto32["m_sql"] = "hris_personnel.permanentaddress";
$proto32["m_srcTableName"] = "Inactive Personnel";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sss",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto34["m_sql"] = "hris_personnel.sss";
$proto34["m_srcTableName"] = "Inactive Personnel";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tin",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto36["m_sql"] = "hris_personnel.tin";
$proto36["m_srcTableName"] = "Inactive Personnel";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pagibig",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto38["m_sql"] = "hris_personnel.pagibig";
$proto38["m_srcTableName"] = "Inactive Personnel";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "philhealth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto40["m_sql"] = "hris_personnel.philhealth";
$proto40["m_srcTableName"] = "Inactive Personnel";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto42["m_sql"] = "hris_personnel.emailaddress";
$proto42["m_srcTableName"] = "Inactive Personnel";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "telephone",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto44["m_sql"] = "hris_personnel.telephone";
$proto44["m_srcTableName"] = "Inactive Personnel";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "dateofbirth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto46["m_sql"] = "hris_personnel.dateofbirth";
$proto46["m_srcTableName"] = "Inactive Personnel";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "skills",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto48["m_sql"] = "hris_personnel.skills";
$proto48["m_srcTableName"] = "Inactive Personnel";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "civilstatus",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "Inactive Personnel"
));

$proto50["m_sql"] = "hris_personnel.civilstatus";
$proto50["m_srcTableName"] = "Inactive Personnel";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "hris_personnel";
$proto53["m_srcTableName"] = "Inactive Personnel";
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
$proto52["m_srcTableName"] = "Inactive Personnel";
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
$proto57["m_srcTableName"] = "Inactive Personnel";
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
$proto56["m_srcTableName"] = "Inactive Personnel";
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
$proto0["m_srcTableName"]="Inactive Personnel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Inactive_Personnel = createSqlQuery_Inactive_Personnel();


	
																				
	
$tdataInactive_Personnel[".sqlquery"] = $queryData_Inactive_Personnel;

$tableEvents["Inactive Personnel"] = new eventsBase;
$tdataInactive_Personnel[".hasEvents"] = false;

?>