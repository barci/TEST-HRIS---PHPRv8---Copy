<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_affiliation = array();	
	$tdatahris_affiliation[".truncateText"] = true;
	$tdatahris_affiliation[".NumberOfChars"] = 80; 
	$tdatahris_affiliation[".ShortName"] = "hris_affiliation";
	$tdatahris_affiliation[".OwnerID"] = "";
	$tdatahris_affiliation[".OriginalTable"] = "hris_affiliation";

//	field labels
$fieldLabelshris_affiliation = array();
$fieldToolTipshris_affiliation = array();
$pageTitleshris_affiliation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_affiliation["English"] = array();
	$fieldToolTipshris_affiliation["English"] = array();
	$pageTitleshris_affiliation["English"] = array();
	$fieldLabelshris_affiliation["English"]["ID"] = "ID";
	$fieldToolTipshris_affiliation["English"]["ID"] = "";
	$fieldLabelshris_affiliation["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_affiliation["English"]["personnelID"] = "";
	$fieldLabelshris_affiliation["English"]["name"] = "Name";
	$fieldToolTipshris_affiliation["English"]["name"] = "";
	$fieldLabelshris_affiliation["English"]["membership"] = "Membership";
	$fieldToolTipshris_affiliation["English"]["membership"] = "";
	$fieldLabelshris_affiliation["English"]["role"] = "Role";
	$fieldToolTipshris_affiliation["English"]["role"] = "";
	$fieldLabelshris_affiliation["English"]["status"] = "Status";
	$fieldToolTipshris_affiliation["English"]["status"] = "";
	if (count($fieldToolTipshris_affiliation["English"]))
		$tdatahris_affiliation[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_affiliation[""] = array();
	$fieldToolTipshris_affiliation[""] = array();
	$pageTitleshris_affiliation[""] = array();
	$fieldLabelshris_affiliation[""]["ID"] = "ID";
	$fieldToolTipshris_affiliation[""]["ID"] = "";
	if (count($fieldToolTipshris_affiliation[""]))
		$tdatahris_affiliation[".isUseToolTips"] = true;
}
	
	
	$tdatahris_affiliation[".NCSearch"] = true;



$tdatahris_affiliation[".shortTableName"] = "hris_affiliation";
$tdatahris_affiliation[".nSecOptions"] = 0;
$tdatahris_affiliation[".recsPerRowList"] = 1;
$tdatahris_affiliation[".mainTableOwnerID"] = "";
$tdatahris_affiliation[".moveNext"] = 1;
$tdatahris_affiliation[".nType"] = 0;

$tdatahris_affiliation[".strOriginalTableName"] = "hris_affiliation";




$tdatahris_affiliation[".showAddInPopup"] = false;

$tdatahris_affiliation[".showEditInPopup"] = false;

$tdatahris_affiliation[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_affiliation[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_affiliation[".fieldsForRegister"] = array();

$tdatahris_affiliation[".listAjax"] = false;

	$tdatahris_affiliation[".audit"] = false;

	$tdatahris_affiliation[".locking"] = false;

$tdatahris_affiliation[".edit"] = true;

$tdatahris_affiliation[".list"] = true;

$tdatahris_affiliation[".view"] = true;

$tdatahris_affiliation[".import"] = true;

$tdatahris_affiliation[".exportTo"] = true;

$tdatahris_affiliation[".printFriendly"] = true;

$tdatahris_affiliation[".delete"] = true;

$tdatahris_affiliation[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_affiliation[".searchSaving"] = false;
//

$tdatahris_affiliation[".showSearchPanel"] = true;
		$tdatahris_affiliation[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_affiliation[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_affiliation[".isUseAjaxSuggest"] = true;

$tdatahris_affiliation[".rowHighlite"] = true;



$tdatahris_affiliation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_affiliation[".isUseTimeForSearch"] = false;





$tdatahris_affiliation[".allSearchFields"] = array();
$tdatahris_affiliation[".filterFields"] = array();
$tdatahris_affiliation[".requiredSearchFields"] = array();

$tdatahris_affiliation[".allSearchFields"][] = "ID";
	$tdatahris_affiliation[".allSearchFields"][] = "personnelID";
	$tdatahris_affiliation[".allSearchFields"][] = "name";
	$tdatahris_affiliation[".allSearchFields"][] = "membership";
	$tdatahris_affiliation[".allSearchFields"][] = "role";
	$tdatahris_affiliation[".allSearchFields"][] = "status";
	

$tdatahris_affiliation[".googleLikeFields"] = array();
$tdatahris_affiliation[".googleLikeFields"][] = "ID";
$tdatahris_affiliation[".googleLikeFields"][] = "personnelID";
$tdatahris_affiliation[".googleLikeFields"][] = "name";
$tdatahris_affiliation[".googleLikeFields"][] = "membership";
$tdatahris_affiliation[".googleLikeFields"][] = "role";
$tdatahris_affiliation[".googleLikeFields"][] = "status";


$tdatahris_affiliation[".advSearchFields"] = array();
$tdatahris_affiliation[".advSearchFields"][] = "ID";
$tdatahris_affiliation[".advSearchFields"][] = "personnelID";
$tdatahris_affiliation[".advSearchFields"][] = "name";
$tdatahris_affiliation[".advSearchFields"][] = "membership";
$tdatahris_affiliation[".advSearchFields"][] = "role";
$tdatahris_affiliation[".advSearchFields"][] = "status";

$tdatahris_affiliation[".tableType"] = "list";

$tdatahris_affiliation[".printerPageOrientation"] = 0;
$tdatahris_affiliation[".nPrinterPageScale"] = 100;

$tdatahris_affiliation[".nPrinterSplitRecords"] = 40;

$tdatahris_affiliation[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_affiliation[".pageSize"] = 20;

$tdatahris_affiliation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_affiliation[".strOrderBy"] = $tstrOrderBy;

$tdatahris_affiliation[".orderindexes"] = array();

$tdatahris_affiliation[".sqlHead"] = "SELECT ID,   personnelID,   name,   membership,   `role`,   status";
$tdatahris_affiliation[".sqlFrom"] = "FROM hris_affiliation";
$tdatahris_affiliation[".sqlWhereExpr"] = "";
$tdatahris_affiliation[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_affiliation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_affiliation[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_affiliation[".highlightSearchResults"] = true;

$tableKeyshris_affiliation = array();
$tableKeyshris_affiliation[] = "ID";
$tdatahris_affiliation[".Keys"] = $tableKeyshris_affiliation;

$tdatahris_affiliation[".listFields"] = array();
$tdatahris_affiliation[".listFields"][] = "ID";
$tdatahris_affiliation[".listFields"][] = "personnelID";
$tdatahris_affiliation[".listFields"][] = "name";
$tdatahris_affiliation[".listFields"][] = "membership";
$tdatahris_affiliation[".listFields"][] = "role";
$tdatahris_affiliation[".listFields"][] = "status";

$tdatahris_affiliation[".hideMobileList"] = array();


$tdatahris_affiliation[".viewFields"] = array();
$tdatahris_affiliation[".viewFields"][] = "ID";
$tdatahris_affiliation[".viewFields"][] = "personnelID";
$tdatahris_affiliation[".viewFields"][] = "name";
$tdatahris_affiliation[".viewFields"][] = "membership";
$tdatahris_affiliation[".viewFields"][] = "role";
$tdatahris_affiliation[".viewFields"][] = "status";

$tdatahris_affiliation[".addFields"] = array();
$tdatahris_affiliation[".addFields"][] = "personnelID";
$tdatahris_affiliation[".addFields"][] = "name";
$tdatahris_affiliation[".addFields"][] = "membership";
$tdatahris_affiliation[".addFields"][] = "role";
$tdatahris_affiliation[".addFields"][] = "status";

$tdatahris_affiliation[".inlineAddFields"] = array();

$tdatahris_affiliation[".editFields"] = array();
$tdatahris_affiliation[".editFields"][] = "personnelID";
$tdatahris_affiliation[".editFields"][] = "name";
$tdatahris_affiliation[".editFields"][] = "membership";
$tdatahris_affiliation[".editFields"][] = "role";
$tdatahris_affiliation[".editFields"][] = "status";

$tdatahris_affiliation[".inlineEditFields"] = array();

$tdatahris_affiliation[".exportFields"] = array();
$tdatahris_affiliation[".exportFields"][] = "ID";
$tdatahris_affiliation[".exportFields"][] = "personnelID";
$tdatahris_affiliation[".exportFields"][] = "name";
$tdatahris_affiliation[".exportFields"][] = "membership";
$tdatahris_affiliation[".exportFields"][] = "role";
$tdatahris_affiliation[".exportFields"][] = "status";

$tdatahris_affiliation[".importFields"] = array();
$tdatahris_affiliation[".importFields"][] = "ID";
$tdatahris_affiliation[".importFields"][] = "personnelID";
$tdatahris_affiliation[".importFields"][] = "name";
$tdatahris_affiliation[".importFields"][] = "membership";
$tdatahris_affiliation[".importFields"][] = "role";
$tdatahris_affiliation[".importFields"][] = "status";

$tdatahris_affiliation[".printFields"] = array();
$tdatahris_affiliation[".printFields"][] = "ID";
$tdatahris_affiliation[".printFields"][] = "personnelID";
$tdatahris_affiliation[".printFields"][] = "name";
$tdatahris_affiliation[".printFields"][] = "membership";
$tdatahris_affiliation[".printFields"][] = "role";
$tdatahris_affiliation[".printFields"][] = "status";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","ID"); 
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

	

	
	$tdatahris_affiliation["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","personnelID"); 
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

	

	
	$tdatahris_affiliation["personnelID"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","name"); 
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
	$fdata["FullName"] = "name";
	
		
		
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

	

	
	$tdatahris_affiliation["name"] = $fdata;
//	membership
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "membership";
	$fdata["GoodName"] = "membership";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","membership"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "membership"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "membership";
	
		
		
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

	

	
	$tdatahris_affiliation["membership"] = $fdata;
//	role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "role";
	$fdata["GoodName"] = "role";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","role"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "role"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`role`";
	
		
		
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

	

	
	$tdatahris_affiliation["role"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "hris_affiliation";
	$fdata["Label"] = GetFieldLabel("hris_affiliation","status"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";
	
		
		
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

	

	
	$tdatahris_affiliation["status"] = $fdata;

	
$tables_data["hris_affiliation"]=&$tdatahris_affiliation;
$field_labels["hris_affiliation"] = &$fieldLabelshris_affiliation;
$fieldToolTips["hris_affiliation"] = &$fieldToolTipshris_affiliation;
$page_titles["hris_affiliation"] = &$pageTitleshris_affiliation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_affiliation"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_affiliation"] = array();


	
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
					$masterTablesData["hris_affiliation"][0] = $masterParams;	
				$masterTablesData["hris_affiliation"][0]["masterKeys"] = array();
	$masterTablesData["hris_affiliation"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_affiliation"][0]["detailKeys"] = array();
	$masterTablesData["hris_affiliation"][0]["detailKeys"][]="personnelID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_affiliation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   personnelID,   name,   membership,   `role`,   status";
$proto0["m_strFrom"] = "FROM hris_affiliation";
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
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_affiliation";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto7["m_sql"] = "personnelID";
$proto7["m_srcTableName"] = "hris_affiliation";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto9["m_sql"] = "name";
$proto9["m_srcTableName"] = "hris_affiliation";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "membership",
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto11["m_sql"] = "membership";
$proto11["m_srcTableName"] = "hris_affiliation";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "role",
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto13["m_sql"] = "`role`";
$proto13["m_srcTableName"] = "hris_affiliation";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "hris_affiliation",
	"m_srcTableName" => "hris_affiliation"
));

$proto15["m_sql"] = "status";
$proto15["m_srcTableName"] = "hris_affiliation";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "hris_affiliation";
$proto18["m_srcTableName"] = "hris_affiliation";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "personnelID";
$proto18["m_columns"][] = "name";
$proto18["m_columns"][] = "membership";
$proto18["m_columns"][] = "role";
$proto18["m_columns"][] = "status";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "hris_affiliation";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "hris_affiliation";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_affiliation";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_affiliation = createSqlQuery_hris_affiliation();


	
						
	
$tdatahris_affiliation[".sqlquery"] = $queryData_hris_affiliation;

$tableEvents["hris_affiliation"] = new eventsBase;
$tdatahris_affiliation[".hasEvents"] = false;

?>