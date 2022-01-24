<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_personnel = array();	
	$tdatahris_personnel[".truncateText"] = true;
	$tdatahris_personnel[".NumberOfChars"] = 80; 
	$tdatahris_personnel[".ShortName"] = "hris_personnel";
	$tdatahris_personnel[".OwnerID"] = "";
	$tdatahris_personnel[".OriginalTable"] = "hris_personnel";

//	field labels
$fieldLabelshris_personnel = array();
$fieldToolTipshris_personnel = array();
$pageTitleshris_personnel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_personnel["English"] = array();
	$fieldToolTipshris_personnel["English"] = array();
	$pageTitleshris_personnel["English"] = array();
	$fieldLabelshris_personnel["English"]["ID"] = "ID";
	$fieldToolTipshris_personnel["English"]["ID"] = "";
	$fieldLabelshris_personnel["English"]["firstname"] = "Firstname";
	$fieldToolTipshris_personnel["English"]["firstname"] = "";
	$fieldLabelshris_personnel["English"]["middlename"] = "Middlename";
	$fieldToolTipshris_personnel["English"]["middlename"] = "";
	$fieldLabelshris_personnel["English"]["lastname"] = "Lastname";
	$fieldToolTipshris_personnel["English"]["lastname"] = "";
	$fieldLabelshris_personnel["English"]["gender"] = "Gender";
	$fieldToolTipshris_personnel["English"]["gender"] = "";
	$fieldLabelshris_personnel["English"]["currentaddress"] = "Currentaddress";
	$fieldToolTipshris_personnel["English"]["currentaddress"] = "";
	$fieldLabelshris_personnel["English"]["permanentaddress"] = "Permanentaddress";
	$fieldToolTipshris_personnel["English"]["permanentaddress"] = "";
	$fieldLabelshris_personnel["English"]["sss"] = "Sss";
	$fieldToolTipshris_personnel["English"]["sss"] = "";
	$fieldLabelshris_personnel["English"]["tin"] = "Tin";
	$fieldToolTipshris_personnel["English"]["tin"] = "";
	$fieldLabelshris_personnel["English"]["pagibig"] = "Pagibig";
	$fieldToolTipshris_personnel["English"]["pagibig"] = "";
	$fieldLabelshris_personnel["English"]["philhealth"] = "Philhealth";
	$fieldToolTipshris_personnel["English"]["philhealth"] = "";
	$fieldLabelshris_personnel["English"]["emailaddress"] = "Emailaddress";
	$fieldToolTipshris_personnel["English"]["emailaddress"] = "";
	$fieldLabelshris_personnel["English"]["telephone"] = "Telephone";
	$fieldToolTipshris_personnel["English"]["telephone"] = "";
	$fieldLabelshris_personnel["English"]["dateofbirth"] = "Dateofbirth";
	$fieldToolTipshris_personnel["English"]["dateofbirth"] = "";
	$fieldLabelshris_personnel["English"]["skills"] = "Skills";
	$fieldToolTipshris_personnel["English"]["skills"] = "";
	$fieldLabelshris_personnel["English"]["civilstatus"] = "Civilstatus";
	$fieldToolTipshris_personnel["English"]["civilstatus"] = "";
	$fieldLabelshris_personnel["English"]["fullName"] = "Full Name";
	$fieldToolTipshris_personnel["English"]["fullName"] = "";
	$fieldLabelshris_personnel["English"]["age"] = "Age";
	$fieldToolTipshris_personnel["English"]["age"] = "";
	if (count($fieldToolTipshris_personnel["English"]))
		$tdatahris_personnel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_personnel[""] = array();
	$fieldToolTipshris_personnel[""] = array();
	$pageTitleshris_personnel[""] = array();
	$fieldLabelshris_personnel[""]["age"] = "Age";
	$fieldToolTipshris_personnel[""]["age"] = "";
	$fieldLabelshris_personnel[""]["ID"] = "ID";
	$fieldToolTipshris_personnel[""]["ID"] = "";
	if (count($fieldToolTipshris_personnel[""]))
		$tdatahris_personnel[".isUseToolTips"] = true;
}
	
	
	$tdatahris_personnel[".NCSearch"] = true;



$tdatahris_personnel[".shortTableName"] = "hris_personnel";
$tdatahris_personnel[".nSecOptions"] = 0;
$tdatahris_personnel[".recsPerRowList"] = 1;
$tdatahris_personnel[".mainTableOwnerID"] = "";
$tdatahris_personnel[".moveNext"] = 1;
$tdatahris_personnel[".nType"] = 0;

$tdatahris_personnel[".strOriginalTableName"] = "hris_personnel";




$tdatahris_personnel[".showAddInPopup"] = false;

$tdatahris_personnel[".showEditInPopup"] = false;

$tdatahris_personnel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_personnel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_personnel[".fieldsForRegister"] = array();

$tdatahris_personnel[".listAjax"] = false;

	$tdatahris_personnel[".audit"] = false;

	$tdatahris_personnel[".locking"] = false;

$tdatahris_personnel[".edit"] = true;

$tdatahris_personnel[".list"] = true;

$tdatahris_personnel[".view"] = true;

$tdatahris_personnel[".import"] = true;

$tdatahris_personnel[".exportTo"] = true;

$tdatahris_personnel[".printFriendly"] = true;

$tdatahris_personnel[".delete"] = true;

$tdatahris_personnel[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_personnel[".searchSaving"] = false;
//

$tdatahris_personnel[".showSearchPanel"] = true;
		$tdatahris_personnel[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_personnel[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_personnel[".isUseAjaxSuggest"] = true;

$tdatahris_personnel[".rowHighlite"] = true;



$tdatahris_personnel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_personnel[".isUseTimeForSearch"] = false;



$tdatahris_personnel[".useDetailsPreview"] = true;


$tdatahris_personnel[".allSearchFields"] = array();
$tdatahris_personnel[".filterFields"] = array();
$tdatahris_personnel[".requiredSearchFields"] = array();

$tdatahris_personnel[".allSearchFields"][] = "firstname";
	$tdatahris_personnel[".allSearchFields"][] = "ID";
	$tdatahris_personnel[".allSearchFields"][] = "middlename";
	$tdatahris_personnel[".allSearchFields"][] = "fullName";
	$tdatahris_personnel[".allSearchFields"][] = "lastname";
	$tdatahris_personnel[".allSearchFields"][] = "age";
	$tdatahris_personnel[".allSearchFields"][] = "dateofbirth";
	$tdatahris_personnel[".allSearchFields"][] = "skills";
	$tdatahris_personnel[".allSearchFields"][] = "civilstatus";
	$tdatahris_personnel[".allSearchFields"][] = "gender";
	$tdatahris_personnel[".allSearchFields"][] = "currentaddress";
	$tdatahris_personnel[".allSearchFields"][] = "sss";
	$tdatahris_personnel[".allSearchFields"][] = "permanentaddress";
	$tdatahris_personnel[".allSearchFields"][] = "tin";
	$tdatahris_personnel[".allSearchFields"][] = "pagibig";
	$tdatahris_personnel[".allSearchFields"][] = "emailaddress";
	$tdatahris_personnel[".allSearchFields"][] = "philhealth";
	$tdatahris_personnel[".allSearchFields"][] = "telephone";
	

$tdatahris_personnel[".googleLikeFields"] = array();
$tdatahris_personnel[".googleLikeFields"][] = "ID";
$tdatahris_personnel[".googleLikeFields"][] = "fullName";
$tdatahris_personnel[".googleLikeFields"][] = "age";
$tdatahris_personnel[".googleLikeFields"][] = "firstname";
$tdatahris_personnel[".googleLikeFields"][] = "middlename";
$tdatahris_personnel[".googleLikeFields"][] = "lastname";
$tdatahris_personnel[".googleLikeFields"][] = "gender";
$tdatahris_personnel[".googleLikeFields"][] = "currentaddress";
$tdatahris_personnel[".googleLikeFields"][] = "permanentaddress";
$tdatahris_personnel[".googleLikeFields"][] = "sss";
$tdatahris_personnel[".googleLikeFields"][] = "tin";
$tdatahris_personnel[".googleLikeFields"][] = "pagibig";
$tdatahris_personnel[".googleLikeFields"][] = "philhealth";
$tdatahris_personnel[".googleLikeFields"][] = "emailaddress";
$tdatahris_personnel[".googleLikeFields"][] = "telephone";
$tdatahris_personnel[".googleLikeFields"][] = "dateofbirth";
$tdatahris_personnel[".googleLikeFields"][] = "skills";
$tdatahris_personnel[".googleLikeFields"][] = "civilstatus";


$tdatahris_personnel[".advSearchFields"] = array();
$tdatahris_personnel[".advSearchFields"][] = "firstname";
$tdatahris_personnel[".advSearchFields"][] = "ID";
$tdatahris_personnel[".advSearchFields"][] = "middlename";
$tdatahris_personnel[".advSearchFields"][] = "fullName";
$tdatahris_personnel[".advSearchFields"][] = "lastname";
$tdatahris_personnel[".advSearchFields"][] = "age";
$tdatahris_personnel[".advSearchFields"][] = "dateofbirth";
$tdatahris_personnel[".advSearchFields"][] = "skills";
$tdatahris_personnel[".advSearchFields"][] = "civilstatus";
$tdatahris_personnel[".advSearchFields"][] = "gender";
$tdatahris_personnel[".advSearchFields"][] = "currentaddress";
$tdatahris_personnel[".advSearchFields"][] = "sss";
$tdatahris_personnel[".advSearchFields"][] = "permanentaddress";
$tdatahris_personnel[".advSearchFields"][] = "tin";
$tdatahris_personnel[".advSearchFields"][] = "pagibig";
$tdatahris_personnel[".advSearchFields"][] = "emailaddress";
$tdatahris_personnel[".advSearchFields"][] = "philhealth";
$tdatahris_personnel[".advSearchFields"][] = "telephone";

$tdatahris_personnel[".tableType"] = "list";

$tdatahris_personnel[".printerPageOrientation"] = 0;
$tdatahris_personnel[".nPrinterPageScale"] = 100;

$tdatahris_personnel[".nPrinterSplitRecords"] = 40;

$tdatahris_personnel[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_personnel[".pageSize"] = 20;

$tdatahris_personnel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_personnel[".strOrderBy"] = $tstrOrderBy;

$tdatahris_personnel[".orderindexes"] = array();

$tdatahris_personnel[".sqlHead"] = "SELECT ID,  concat(upper(lastname), \", \", firstname) AS fullName,  TIMESTAMPDIFF(YEAR, dateofbirth, now()) AS age,  firstname,  middlename,  lastname,  gender,  currentaddress,  permanentaddress,  sss,  tin,  pagibig,  philhealth,  emailaddress,  telephone,  dateofbirth,  skills,  civilstatus";
$tdatahris_personnel[".sqlFrom"] = "FROM hris_personnel";
$tdatahris_personnel[".sqlWhereExpr"] = "";
$tdatahris_personnel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_personnel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_personnel[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_personnel[".highlightSearchResults"] = true;

$tableKeyshris_personnel = array();
$tableKeyshris_personnel[] = "ID";
$tdatahris_personnel[".Keys"] = $tableKeyshris_personnel;

$tdatahris_personnel[".listFields"] = array();
$tdatahris_personnel[".listFields"][] = "fullName";
$tdatahris_personnel[".listFields"][] = "age";
$tdatahris_personnel[".listFields"][] = "gender";
$tdatahris_personnel[".listFields"][] = "currentaddress";
$tdatahris_personnel[".listFields"][] = "permanentaddress";
$tdatahris_personnel[".listFields"][] = "emailaddress";
$tdatahris_personnel[".listFields"][] = "telephone";

$tdatahris_personnel[".hideMobileList"] = array();


$tdatahris_personnel[".viewFields"] = array();
$tdatahris_personnel[".viewFields"][] = "firstname";
$tdatahris_personnel[".viewFields"][] = "ID";
$tdatahris_personnel[".viewFields"][] = "middlename";
$tdatahris_personnel[".viewFields"][] = "fullName";
$tdatahris_personnel[".viewFields"][] = "lastname";
$tdatahris_personnel[".viewFields"][] = "age";
$tdatahris_personnel[".viewFields"][] = "dateofbirth";
$tdatahris_personnel[".viewFields"][] = "skills";
$tdatahris_personnel[".viewFields"][] = "civilstatus";
$tdatahris_personnel[".viewFields"][] = "gender";
$tdatahris_personnel[".viewFields"][] = "currentaddress";
$tdatahris_personnel[".viewFields"][] = "sss";
$tdatahris_personnel[".viewFields"][] = "permanentaddress";
$tdatahris_personnel[".viewFields"][] = "tin";
$tdatahris_personnel[".viewFields"][] = "pagibig";
$tdatahris_personnel[".viewFields"][] = "emailaddress";
$tdatahris_personnel[".viewFields"][] = "philhealth";
$tdatahris_personnel[".viewFields"][] = "telephone";

$tdatahris_personnel[".addFields"] = array();
$tdatahris_personnel[".addFields"][] = "firstname";
$tdatahris_personnel[".addFields"][] = "middlename";
$tdatahris_personnel[".addFields"][] = "lastname";
$tdatahris_personnel[".addFields"][] = "dateofbirth";
$tdatahris_personnel[".addFields"][] = "skills";
$tdatahris_personnel[".addFields"][] = "civilstatus";
$tdatahris_personnel[".addFields"][] = "gender";
$tdatahris_personnel[".addFields"][] = "currentaddress";
$tdatahris_personnel[".addFields"][] = "sss";
$tdatahris_personnel[".addFields"][] = "permanentaddress";
$tdatahris_personnel[".addFields"][] = "tin";
$tdatahris_personnel[".addFields"][] = "pagibig";
$tdatahris_personnel[".addFields"][] = "emailaddress";
$tdatahris_personnel[".addFields"][] = "philhealth";
$tdatahris_personnel[".addFields"][] = "telephone";

$tdatahris_personnel[".inlineAddFields"] = array();

$tdatahris_personnel[".editFields"] = array();
$tdatahris_personnel[".editFields"][] = "firstname";
$tdatahris_personnel[".editFields"][] = "middlename";
$tdatahris_personnel[".editFields"][] = "lastname";
$tdatahris_personnel[".editFields"][] = "dateofbirth";
$tdatahris_personnel[".editFields"][] = "skills";
$tdatahris_personnel[".editFields"][] = "civilstatus";
$tdatahris_personnel[".editFields"][] = "gender";
$tdatahris_personnel[".editFields"][] = "currentaddress";
$tdatahris_personnel[".editFields"][] = "sss";
$tdatahris_personnel[".editFields"][] = "permanentaddress";
$tdatahris_personnel[".editFields"][] = "tin";
$tdatahris_personnel[".editFields"][] = "pagibig";
$tdatahris_personnel[".editFields"][] = "emailaddress";
$tdatahris_personnel[".editFields"][] = "philhealth";
$tdatahris_personnel[".editFields"][] = "telephone";

$tdatahris_personnel[".inlineEditFields"] = array();

$tdatahris_personnel[".exportFields"] = array();
$tdatahris_personnel[".exportFields"][] = "firstname";
$tdatahris_personnel[".exportFields"][] = "ID";
$tdatahris_personnel[".exportFields"][] = "middlename";
$tdatahris_personnel[".exportFields"][] = "fullName";
$tdatahris_personnel[".exportFields"][] = "lastname";
$tdatahris_personnel[".exportFields"][] = "age";
$tdatahris_personnel[".exportFields"][] = "dateofbirth";
$tdatahris_personnel[".exportFields"][] = "skills";
$tdatahris_personnel[".exportFields"][] = "civilstatus";
$tdatahris_personnel[".exportFields"][] = "gender";
$tdatahris_personnel[".exportFields"][] = "currentaddress";
$tdatahris_personnel[".exportFields"][] = "sss";
$tdatahris_personnel[".exportFields"][] = "permanentaddress";
$tdatahris_personnel[".exportFields"][] = "tin";
$tdatahris_personnel[".exportFields"][] = "pagibig";
$tdatahris_personnel[".exportFields"][] = "emailaddress";
$tdatahris_personnel[".exportFields"][] = "philhealth";
$tdatahris_personnel[".exportFields"][] = "telephone";

$tdatahris_personnel[".importFields"] = array();
$tdatahris_personnel[".importFields"][] = "ID";
$tdatahris_personnel[".importFields"][] = "fullName";
$tdatahris_personnel[".importFields"][] = "age";
$tdatahris_personnel[".importFields"][] = "firstname";
$tdatahris_personnel[".importFields"][] = "middlename";
$tdatahris_personnel[".importFields"][] = "lastname";
$tdatahris_personnel[".importFields"][] = "gender";
$tdatahris_personnel[".importFields"][] = "currentaddress";
$tdatahris_personnel[".importFields"][] = "permanentaddress";
$tdatahris_personnel[".importFields"][] = "sss";
$tdatahris_personnel[".importFields"][] = "tin";
$tdatahris_personnel[".importFields"][] = "pagibig";
$tdatahris_personnel[".importFields"][] = "philhealth";
$tdatahris_personnel[".importFields"][] = "emailaddress";
$tdatahris_personnel[".importFields"][] = "telephone";
$tdatahris_personnel[".importFields"][] = "dateofbirth";
$tdatahris_personnel[".importFields"][] = "skills";
$tdatahris_personnel[".importFields"][] = "civilstatus";

$tdatahris_personnel[".printFields"] = array();
$tdatahris_personnel[".printFields"][] = "firstname";
$tdatahris_personnel[".printFields"][] = "ID";
$tdatahris_personnel[".printFields"][] = "middlename";
$tdatahris_personnel[".printFields"][] = "fullName";
$tdatahris_personnel[".printFields"][] = "lastname";
$tdatahris_personnel[".printFields"][] = "age";
$tdatahris_personnel[".printFields"][] = "dateofbirth";
$tdatahris_personnel[".printFields"][] = "skills";
$tdatahris_personnel[".printFields"][] = "civilstatus";
$tdatahris_personnel[".printFields"][] = "gender";
$tdatahris_personnel[".printFields"][] = "currentaddress";
$tdatahris_personnel[".printFields"][] = "sss";
$tdatahris_personnel[".printFields"][] = "permanentaddress";
$tdatahris_personnel[".printFields"][] = "tin";
$tdatahris_personnel[".printFields"][] = "pagibig";
$tdatahris_personnel[".printFields"][] = "emailaddress";
$tdatahris_personnel[".printFields"][] = "philhealth";
$tdatahris_personnel[".printFields"][] = "telephone";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
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

	

	
	$tdatahris_personnel["ID"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hris_personnel","fullName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fullName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(upper(lastname), \", \", firstname)";
	
		
		
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

	

	
	$tdatahris_personnel["fullName"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hris_personnel","age"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "age"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMESTAMPDIFF(YEAR, dateofbirth, now())";
	
		
		
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

	

	
	$tdatahris_personnel["age"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","firstname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "firstname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";
	
		
		
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

	

	
	$tdatahris_personnel["firstname"] = $fdata;
//	middlename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "middlename";
	$fdata["GoodName"] = "middlename";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","middlename"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "middlename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "middlename";
	
		
		
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

	

	
	$tdatahris_personnel["middlename"] = $fdata;
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","lastname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lastname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastname";
	
		
		
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

	

	
	$tdatahris_personnel["lastname"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","gender"); 
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
	$fdata["FullName"] = "gender";
	
		
		
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

	

	
	$tdatahris_personnel["gender"] = $fdata;
//	currentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "currentaddress";
	$fdata["GoodName"] = "currentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","currentaddress"); 
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
	$fdata["FullName"] = "currentaddress";
	
		
		
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

	

	
	$tdatahris_personnel["currentaddress"] = $fdata;
//	permanentaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "permanentaddress";
	$fdata["GoodName"] = "permanentaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","permanentaddress"); 
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
	$fdata["FullName"] = "permanentaddress";
	
		
		
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

	

	
	$tdatahris_personnel["permanentaddress"] = $fdata;
//	sss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sss";
	$fdata["GoodName"] = "sss";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","sss"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sss"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sss";
	
		
		
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

	

	
	$tdatahris_personnel["sss"] = $fdata;
//	tin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tin";
	$fdata["GoodName"] = "tin";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","tin"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tin"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tin";
	
		
		
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

	

	
	$tdatahris_personnel["tin"] = $fdata;
//	pagibig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pagibig";
	$fdata["GoodName"] = "pagibig";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","pagibig"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pagibig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pagibig";
	
		
		
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

	

	
	$tdatahris_personnel["pagibig"] = $fdata;
//	philhealth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "philhealth";
	$fdata["GoodName"] = "philhealth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","philhealth"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "philhealth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "philhealth";
	
		
		
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

	

	
	$tdatahris_personnel["philhealth"] = $fdata;
//	emailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "emailaddress";
	$fdata["GoodName"] = "emailaddress";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","emailaddress"); 
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
	$fdata["FullName"] = "emailaddress";
	
		
		
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

	

	
	$tdatahris_personnel["emailaddress"] = $fdata;
//	telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "telephone";
	$fdata["GoodName"] = "telephone";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","telephone"); 
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
	$fdata["FullName"] = "telephone";
	
		
		
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

	

	
	$tdatahris_personnel["telephone"] = $fdata;
//	dateofbirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dateofbirth";
	$fdata["GoodName"] = "dateofbirth";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","dateofbirth"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dateofbirth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateofbirth";
	
		
		
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

	

	
	$tdatahris_personnel["dateofbirth"] = $fdata;
//	skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "skills";
	$fdata["GoodName"] = "skills";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","skills"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "skills"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skills";
	
		
		
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

	

	
	$tdatahris_personnel["skills"] = $fdata;
//	civilstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "civilstatus";
	$fdata["GoodName"] = "civilstatus";
	$fdata["ownerTable"] = "hris_personnel";
	$fdata["Label"] = GetFieldLabel("hris_personnel","civilstatus"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "civilstatus"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "civilstatus";
	
		
		
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

	

	
	$tdatahris_personnel["civilstatus"] = $fdata;

	
$tables_data["hris_personnel"]=&$tdatahris_personnel;
$field_labels["hris_personnel"] = &$fieldLabelshris_personnel;
$fieldToolTips["hris_personnel"] = &$fieldToolTipshris_personnel;
$page_titles["hris_personnel"] = &$pageTitleshris_personnel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_personnel"] = array();
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
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personnelID";
//	hris_journey
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_journey";
		$detailsParam["dOriginalTable"] = "hris_journey";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_journey";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personnelID";
//	hris_educationprofile
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_educationprofile";
		$detailsParam["dOriginalTable"] = "hris_educationprofile";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_educationprofile";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personelID";
//	hris_licert
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_licert";
		$detailsParam["dOriginalTable"] = "hris_licert";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_licert";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personnelID";
//	hris_trainings
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_trainings";
		$detailsParam["dOriginalTable"] = "hris_trainings";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_trainings";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personnelID";
//	hris_affiliation
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hris_affiliation";
		$detailsParam["dOriginalTable"] = "hris_affiliation";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hris_affiliation";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["hris_personnel"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hris_personnel"][$dIndex]["detailKeys"][]="personnelID";
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_personnel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_personnel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  concat(upper(lastname), \", \", firstname) AS fullName,  TIMESTAMPDIFF(YEAR, dateofbirth, now()) AS age,  firstname,  middlename,  lastname,  gender,  currentaddress,  permanentaddress,  sss,  tin,  pagibig,  philhealth,  emailaddress,  telephone,  dateofbirth,  skills,  civilstatus";
$proto0["m_strFrom"] = "FROM hris_personnel";
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
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_personnel";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_CUSTOM";
$proto8["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "upper(lastname)"
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\", \""
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "firstname"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "concat(upper(lastname), \", \", firstname)";
$proto7["m_srcTableName"] = "hris_personnel";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "fullName";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "YEAR"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "dateofbirth"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "now()"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "TIMESTAMPDIFF";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "TIMESTAMPDIFF(YEAR, dateofbirth, now())";
$proto12["m_srcTableName"] = "hris_personnel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "age";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto17["m_sql"] = "firstname";
$proto17["m_srcTableName"] = "hris_personnel";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "middlename",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto19["m_sql"] = "middlename";
$proto19["m_srcTableName"] = "hris_personnel";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto21["m_sql"] = "lastname";
$proto21["m_srcTableName"] = "hris_personnel";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto23["m_sql"] = "gender";
$proto23["m_srcTableName"] = "hris_personnel";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "currentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto25["m_sql"] = "currentaddress";
$proto25["m_srcTableName"] = "hris_personnel";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "permanentaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto27["m_sql"] = "permanentaddress";
$proto27["m_srcTableName"] = "hris_personnel";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "sss",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto29["m_sql"] = "sss";
$proto29["m_srcTableName"] = "hris_personnel";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tin",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto31["m_sql"] = "tin";
$proto31["m_srcTableName"] = "hris_personnel";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "pagibig",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto33["m_sql"] = "pagibig";
$proto33["m_srcTableName"] = "hris_personnel";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "philhealth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto35["m_sql"] = "philhealth";
$proto35["m_srcTableName"] = "hris_personnel";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddress",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto37["m_sql"] = "emailaddress";
$proto37["m_srcTableName"] = "hris_personnel";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "telephone",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto39["m_sql"] = "telephone";
$proto39["m_srcTableName"] = "hris_personnel";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "dateofbirth",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto41["m_sql"] = "dateofbirth";
$proto41["m_srcTableName"] = "hris_personnel";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "skills",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto43["m_sql"] = "skills";
$proto43["m_srcTableName"] = "hris_personnel";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "civilstatus",
	"m_strTable" => "hris_personnel",
	"m_srcTableName" => "hris_personnel"
));

$proto45["m_sql"] = "civilstatus";
$proto45["m_srcTableName"] = "hris_personnel";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "hris_personnel";
$proto48["m_srcTableName"] = "hris_personnel";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "ID";
$proto48["m_columns"][] = "firstname";
$proto48["m_columns"][] = "middlename";
$proto48["m_columns"][] = "lastname";
$proto48["m_columns"][] = "gender";
$proto48["m_columns"][] = "currentaddress";
$proto48["m_columns"][] = "permanentaddress";
$proto48["m_columns"][] = "sss";
$proto48["m_columns"][] = "tin";
$proto48["m_columns"][] = "pagibig";
$proto48["m_columns"][] = "philhealth";
$proto48["m_columns"][] = "emailaddress";
$proto48["m_columns"][] = "telephone";
$proto48["m_columns"][] = "dateofbirth";
$proto48["m_columns"][] = "skills";
$proto48["m_columns"][] = "civilstatus";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "hris_personnel";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "hris_personnel";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_personnel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_personnel = createSqlQuery_hris_personnel();


	
																		
	
$tdatahris_personnel[".sqlquery"] = $queryData_hris_personnel;

$tableEvents["hris_personnel"] = new eventsBase;
$tdatahris_personnel[".hasEvents"] = false;

?>