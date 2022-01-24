<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_trainings = array();	
	$tdatahris_trainings[".truncateText"] = true;
	$tdatahris_trainings[".NumberOfChars"] = 80; 
	$tdatahris_trainings[".ShortName"] = "hris_trainings";
	$tdatahris_trainings[".OwnerID"] = "";
	$tdatahris_trainings[".OriginalTable"] = "hris_trainings";

//	field labels
$fieldLabelshris_trainings = array();
$fieldToolTipshris_trainings = array();
$pageTitleshris_trainings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_trainings["English"] = array();
	$fieldToolTipshris_trainings["English"] = array();
	$pageTitleshris_trainings["English"] = array();
	$fieldLabelshris_trainings["English"]["ID"] = "ID";
	$fieldToolTipshris_trainings["English"]["ID"] = "";
	$fieldLabelshris_trainings["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_trainings["English"]["personnelID"] = "";
	$fieldLabelshris_trainings["English"]["trainingname"] = "Trainingname";
	$fieldToolTipshris_trainings["English"]["trainingname"] = "";
	$fieldLabelshris_trainings["English"]["address"] = "Address";
	$fieldToolTipshris_trainings["English"]["address"] = "";
	$fieldLabelshris_trainings["English"]["startdate"] = "Startdate";
	$fieldToolTipshris_trainings["English"]["startdate"] = "";
	$fieldLabelshris_trainings["English"]["enddate"] = "Enddate";
	$fieldToolTipshris_trainings["English"]["enddate"] = "";
	if (count($fieldToolTipshris_trainings["English"]))
		$tdatahris_trainings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_trainings[""] = array();
	$fieldToolTipshris_trainings[""] = array();
	$pageTitleshris_trainings[""] = array();
	$fieldLabelshris_trainings[""]["ID"] = "ID";
	$fieldToolTipshris_trainings[""]["ID"] = "";
	if (count($fieldToolTipshris_trainings[""]))
		$tdatahris_trainings[".isUseToolTips"] = true;
}
	
	
	$tdatahris_trainings[".NCSearch"] = true;



$tdatahris_trainings[".shortTableName"] = "hris_trainings";
$tdatahris_trainings[".nSecOptions"] = 0;
$tdatahris_trainings[".recsPerRowList"] = 1;
$tdatahris_trainings[".mainTableOwnerID"] = "";
$tdatahris_trainings[".moveNext"] = 1;
$tdatahris_trainings[".nType"] = 0;

$tdatahris_trainings[".strOriginalTableName"] = "hris_trainings";




$tdatahris_trainings[".showAddInPopup"] = false;

$tdatahris_trainings[".showEditInPopup"] = false;

$tdatahris_trainings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_trainings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_trainings[".fieldsForRegister"] = array();

$tdatahris_trainings[".listAjax"] = false;

	$tdatahris_trainings[".audit"] = false;

	$tdatahris_trainings[".locking"] = false;

$tdatahris_trainings[".edit"] = true;

$tdatahris_trainings[".list"] = true;

$tdatahris_trainings[".view"] = true;

$tdatahris_trainings[".import"] = true;

$tdatahris_trainings[".exportTo"] = true;

$tdatahris_trainings[".printFriendly"] = true;

$tdatahris_trainings[".delete"] = true;

$tdatahris_trainings[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_trainings[".searchSaving"] = false;
//

$tdatahris_trainings[".showSearchPanel"] = true;
		$tdatahris_trainings[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_trainings[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_trainings[".isUseAjaxSuggest"] = true;

$tdatahris_trainings[".rowHighlite"] = true;



$tdatahris_trainings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_trainings[".isUseTimeForSearch"] = false;





$tdatahris_trainings[".allSearchFields"] = array();
$tdatahris_trainings[".filterFields"] = array();
$tdatahris_trainings[".requiredSearchFields"] = array();

$tdatahris_trainings[".allSearchFields"][] = "ID";
	$tdatahris_trainings[".allSearchFields"][] = "personnelID";
	$tdatahris_trainings[".allSearchFields"][] = "trainingname";
	$tdatahris_trainings[".allSearchFields"][] = "address";
	$tdatahris_trainings[".allSearchFields"][] = "startdate";
	$tdatahris_trainings[".allSearchFields"][] = "enddate";
	

$tdatahris_trainings[".googleLikeFields"] = array();
$tdatahris_trainings[".googleLikeFields"][] = "ID";
$tdatahris_trainings[".googleLikeFields"][] = "personnelID";
$tdatahris_trainings[".googleLikeFields"][] = "trainingname";
$tdatahris_trainings[".googleLikeFields"][] = "address";
$tdatahris_trainings[".googleLikeFields"][] = "startdate";
$tdatahris_trainings[".googleLikeFields"][] = "enddate";


$tdatahris_trainings[".advSearchFields"] = array();
$tdatahris_trainings[".advSearchFields"][] = "ID";
$tdatahris_trainings[".advSearchFields"][] = "personnelID";
$tdatahris_trainings[".advSearchFields"][] = "trainingname";
$tdatahris_trainings[".advSearchFields"][] = "address";
$tdatahris_trainings[".advSearchFields"][] = "startdate";
$tdatahris_trainings[".advSearchFields"][] = "enddate";

$tdatahris_trainings[".tableType"] = "list";

$tdatahris_trainings[".printerPageOrientation"] = 0;
$tdatahris_trainings[".nPrinterPageScale"] = 100;

$tdatahris_trainings[".nPrinterSplitRecords"] = 40;

$tdatahris_trainings[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_trainings[".pageSize"] = 20;

$tdatahris_trainings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_trainings[".strOrderBy"] = $tstrOrderBy;

$tdatahris_trainings[".orderindexes"] = array();

$tdatahris_trainings[".sqlHead"] = "SELECT ID,   personnelID,   trainingname,   address,   startdate,   enddate";
$tdatahris_trainings[".sqlFrom"] = "FROM hris_trainings";
$tdatahris_trainings[".sqlWhereExpr"] = "";
$tdatahris_trainings[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_trainings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_trainings[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_trainings[".highlightSearchResults"] = true;

$tableKeyshris_trainings = array();
$tableKeyshris_trainings[] = "ID";
$tdatahris_trainings[".Keys"] = $tableKeyshris_trainings;

$tdatahris_trainings[".listFields"] = array();
$tdatahris_trainings[".listFields"][] = "ID";
$tdatahris_trainings[".listFields"][] = "personnelID";
$tdatahris_trainings[".listFields"][] = "trainingname";
$tdatahris_trainings[".listFields"][] = "address";
$tdatahris_trainings[".listFields"][] = "startdate";
$tdatahris_trainings[".listFields"][] = "enddate";

$tdatahris_trainings[".hideMobileList"] = array();


$tdatahris_trainings[".viewFields"] = array();
$tdatahris_trainings[".viewFields"][] = "ID";
$tdatahris_trainings[".viewFields"][] = "personnelID";
$tdatahris_trainings[".viewFields"][] = "trainingname";
$tdatahris_trainings[".viewFields"][] = "address";
$tdatahris_trainings[".viewFields"][] = "startdate";
$tdatahris_trainings[".viewFields"][] = "enddate";

$tdatahris_trainings[".addFields"] = array();
$tdatahris_trainings[".addFields"][] = "personnelID";
$tdatahris_trainings[".addFields"][] = "trainingname";
$tdatahris_trainings[".addFields"][] = "address";
$tdatahris_trainings[".addFields"][] = "startdate";
$tdatahris_trainings[".addFields"][] = "enddate";

$tdatahris_trainings[".inlineAddFields"] = array();
$tdatahris_trainings[".inlineAddFields"][] = "personnelID";
$tdatahris_trainings[".inlineAddFields"][] = "trainingname";
$tdatahris_trainings[".inlineAddFields"][] = "address";
$tdatahris_trainings[".inlineAddFields"][] = "startdate";
$tdatahris_trainings[".inlineAddFields"][] = "enddate";

$tdatahris_trainings[".editFields"] = array();
$tdatahris_trainings[".editFields"][] = "personnelID";
$tdatahris_trainings[".editFields"][] = "trainingname";
$tdatahris_trainings[".editFields"][] = "address";
$tdatahris_trainings[".editFields"][] = "startdate";
$tdatahris_trainings[".editFields"][] = "enddate";

$tdatahris_trainings[".inlineEditFields"] = array();
$tdatahris_trainings[".inlineEditFields"][] = "personnelID";
$tdatahris_trainings[".inlineEditFields"][] = "trainingname";
$tdatahris_trainings[".inlineEditFields"][] = "address";
$tdatahris_trainings[".inlineEditFields"][] = "startdate";
$tdatahris_trainings[".inlineEditFields"][] = "enddate";

$tdatahris_trainings[".exportFields"] = array();
$tdatahris_trainings[".exportFields"][] = "ID";
$tdatahris_trainings[".exportFields"][] = "personnelID";
$tdatahris_trainings[".exportFields"][] = "trainingname";
$tdatahris_trainings[".exportFields"][] = "address";
$tdatahris_trainings[".exportFields"][] = "startdate";
$tdatahris_trainings[".exportFields"][] = "enddate";

$tdatahris_trainings[".importFields"] = array();
$tdatahris_trainings[".importFields"][] = "ID";
$tdatahris_trainings[".importFields"][] = "personnelID";
$tdatahris_trainings[".importFields"][] = "trainingname";
$tdatahris_trainings[".importFields"][] = "address";
$tdatahris_trainings[".importFields"][] = "startdate";
$tdatahris_trainings[".importFields"][] = "enddate";

$tdatahris_trainings[".printFields"] = array();
$tdatahris_trainings[".printFields"][] = "ID";
$tdatahris_trainings[".printFields"][] = "personnelID";
$tdatahris_trainings[".printFields"][] = "trainingname";
$tdatahris_trainings[".printFields"][] = "address";
$tdatahris_trainings[".printFields"][] = "startdate";
$tdatahris_trainings[".printFields"][] = "enddate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","ID"); 
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

	

	
	$tdatahris_trainings["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","personnelID"); 
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

	

	
	$tdatahris_trainings["personnelID"] = $fdata;
//	trainingname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trainingname";
	$fdata["GoodName"] = "trainingname";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","trainingname"); 
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
	
		$fdata["strField"] = "trainingname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trainingname";
	
		
		
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

	

	
	$tdatahris_trainings["trainingname"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","address"); 
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
	
		$fdata["strField"] = "address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";
	
		
		
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

	

	
	$tdatahris_trainings["address"] = $fdata;
//	startdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "startdate";
	$fdata["GoodName"] = "startdate";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","startdate"); 
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
	
		$fdata["strField"] = "startdate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdate";
	
		
		
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

	

	
	$tdatahris_trainings["startdate"] = $fdata;
//	enddate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "enddate";
	$fdata["GoodName"] = "enddate";
	$fdata["ownerTable"] = "hris_trainings";
	$fdata["Label"] = GetFieldLabel("hris_trainings","enddate"); 
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
	
		$fdata["strField"] = "enddate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enddate";
	
		
		
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

	

	
	$tdatahris_trainings["enddate"] = $fdata;

	
$tables_data["hris_trainings"]=&$tdatahris_trainings;
$field_labels["hris_trainings"] = &$fieldLabelshris_trainings;
$fieldToolTips["hris_trainings"] = &$fieldToolTipshris_trainings;
$page_titles["hris_trainings"] = &$pageTitleshris_trainings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_trainings"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_trainings"] = array();


	
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
					$masterTablesData["hris_trainings"][0] = $masterParams;	
				$masterTablesData["hris_trainings"][0]["masterKeys"] = array();
	$masterTablesData["hris_trainings"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_trainings"][0]["detailKeys"] = array();
	$masterTablesData["hris_trainings"][0]["detailKeys"][]="personnelID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_trainings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   personnelID,   trainingname,   address,   startdate,   enddate";
$proto0["m_strFrom"] = "FROM hris_trainings";
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
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_trainings";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto7["m_sql"] = "personnelID";
$proto7["m_srcTableName"] = "hris_trainings";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "trainingname",
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto9["m_sql"] = "trainingname";
$proto9["m_srcTableName"] = "hris_trainings";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto11["m_sql"] = "address";
$proto11["m_srcTableName"] = "hris_trainings";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "startdate",
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto13["m_sql"] = "startdate";
$proto13["m_srcTableName"] = "hris_trainings";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "enddate",
	"m_strTable" => "hris_trainings",
	"m_srcTableName" => "hris_trainings"
));

$proto15["m_sql"] = "enddate";
$proto15["m_srcTableName"] = "hris_trainings";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "hris_trainings";
$proto18["m_srcTableName"] = "hris_trainings";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "personnelID";
$proto18["m_columns"][] = "trainingname";
$proto18["m_columns"][] = "address";
$proto18["m_columns"][] = "startdate";
$proto18["m_columns"][] = "enddate";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "hris_trainings";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "hris_trainings";
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
$proto0["m_srcTableName"]="hris_trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_trainings = createSqlQuery_hris_trainings();


	
						
	
$tdatahris_trainings[".sqlquery"] = $queryData_hris_trainings;

$tableEvents["hris_trainings"] = new eventsBase;
$tdatahris_trainings[".hasEvents"] = false;

?>