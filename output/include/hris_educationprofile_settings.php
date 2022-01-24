<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_educationprofile = array();	
	$tdatahris_educationprofile[".truncateText"] = true;
	$tdatahris_educationprofile[".NumberOfChars"] = 80; 
	$tdatahris_educationprofile[".ShortName"] = "hris_educationprofile";
	$tdatahris_educationprofile[".OwnerID"] = "";
	$tdatahris_educationprofile[".OriginalTable"] = "hris_educationprofile";

//	field labels
$fieldLabelshris_educationprofile = array();
$fieldToolTipshris_educationprofile = array();
$pageTitleshris_educationprofile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_educationprofile["English"] = array();
	$fieldToolTipshris_educationprofile["English"] = array();
	$pageTitleshris_educationprofile["English"] = array();
	$fieldLabelshris_educationprofile["English"]["ID"] = "ID";
	$fieldToolTipshris_educationprofile["English"]["ID"] = "";
	$fieldLabelshris_educationprofile["English"]["schoolname"] = "Schoolname";
	$fieldToolTipshris_educationprofile["English"]["schoolname"] = "";
	$fieldLabelshris_educationprofile["English"]["schooladd"] = "Schooladd";
	$fieldToolTipshris_educationprofile["English"]["schooladd"] = "";
	$fieldLabelshris_educationprofile["English"]["educationlevel"] = "Educationlevel";
	$fieldToolTipshris_educationprofile["English"]["educationlevel"] = "";
	$fieldLabelshris_educationprofile["English"]["yearstarted"] = "Yearstarted";
	$fieldToolTipshris_educationprofile["English"]["yearstarted"] = "";
	$fieldLabelshris_educationprofile["English"]["yeargraduated"] = "Yeargraduated";
	$fieldToolTipshris_educationprofile["English"]["yeargraduated"] = "";
	$fieldLabelshris_educationprofile["English"]["personelID"] = "Personel ID";
	$fieldToolTipshris_educationprofile["English"]["personelID"] = "";
	if (count($fieldToolTipshris_educationprofile["English"]))
		$tdatahris_educationprofile[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_educationprofile[""] = array();
	$fieldToolTipshris_educationprofile[""] = array();
	$pageTitleshris_educationprofile[""] = array();
	$fieldLabelshris_educationprofile[""]["ID"] = "ID";
	$fieldToolTipshris_educationprofile[""]["ID"] = "";
	if (count($fieldToolTipshris_educationprofile[""]))
		$tdatahris_educationprofile[".isUseToolTips"] = true;
}
	
	
	$tdatahris_educationprofile[".NCSearch"] = true;



$tdatahris_educationprofile[".shortTableName"] = "hris_educationprofile";
$tdatahris_educationprofile[".nSecOptions"] = 0;
$tdatahris_educationprofile[".recsPerRowList"] = 1;
$tdatahris_educationprofile[".mainTableOwnerID"] = "";
$tdatahris_educationprofile[".moveNext"] = 1;
$tdatahris_educationprofile[".nType"] = 0;

$tdatahris_educationprofile[".strOriginalTableName"] = "hris_educationprofile";




$tdatahris_educationprofile[".showAddInPopup"] = false;

$tdatahris_educationprofile[".showEditInPopup"] = false;

$tdatahris_educationprofile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_educationprofile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_educationprofile[".fieldsForRegister"] = array();

$tdatahris_educationprofile[".listAjax"] = false;

	$tdatahris_educationprofile[".audit"] = false;

	$tdatahris_educationprofile[".locking"] = false;

$tdatahris_educationprofile[".edit"] = true;

$tdatahris_educationprofile[".list"] = true;

$tdatahris_educationprofile[".inlineEdit"] = true;
$tdatahris_educationprofile[".inlineAdd"] = true;
$tdatahris_educationprofile[".view"] = true;

$tdatahris_educationprofile[".import"] = true;

$tdatahris_educationprofile[".exportTo"] = true;

$tdatahris_educationprofile[".printFriendly"] = true;

$tdatahris_educationprofile[".delete"] = true;

$tdatahris_educationprofile[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_educationprofile[".searchSaving"] = false;
//

$tdatahris_educationprofile[".showSearchPanel"] = true;
		$tdatahris_educationprofile[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_educationprofile[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_educationprofile[".isUseAjaxSuggest"] = true;

$tdatahris_educationprofile[".rowHighlite"] = true;



$tdatahris_educationprofile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_educationprofile[".isUseTimeForSearch"] = false;





$tdatahris_educationprofile[".allSearchFields"] = array();
$tdatahris_educationprofile[".filterFields"] = array();
$tdatahris_educationprofile[".requiredSearchFields"] = array();

$tdatahris_educationprofile[".allSearchFields"][] = "ID";
	$tdatahris_educationprofile[".allSearchFields"][] = "personelID";
		$tdatahris_educationprofile[".requiredSearchFields"][] = "personelID";		
$tdatahris_educationprofile[".allSearchFields"][] = "schoolname";
		$tdatahris_educationprofile[".requiredSearchFields"][] = "schoolname";		
$tdatahris_educationprofile[".allSearchFields"][] = "schooladd";
	$tdatahris_educationprofile[".allSearchFields"][] = "educationlevel";
		$tdatahris_educationprofile[".requiredSearchFields"][] = "educationlevel";		
$tdatahris_educationprofile[".allSearchFields"][] = "yearstarted";
	$tdatahris_educationprofile[".allSearchFields"][] = "yeargraduated";
	
$tdatahris_educationprofile[".filterFields"][] = "schoolname";	
$tdatahris_educationprofile[".filterFields"][] = "educationlevel";	

$tdatahris_educationprofile[".googleLikeFields"] = array();
$tdatahris_educationprofile[".googleLikeFields"][] = "ID";
$tdatahris_educationprofile[".googleLikeFields"][] = "schoolname";
$tdatahris_educationprofile[".googleLikeFields"][] = "schooladd";
$tdatahris_educationprofile[".googleLikeFields"][] = "educationlevel";
$tdatahris_educationprofile[".googleLikeFields"][] = "yearstarted";
$tdatahris_educationprofile[".googleLikeFields"][] = "yeargraduated";
$tdatahris_educationprofile[".googleLikeFields"][] = "personelID";

$tdatahris_educationprofile[".panelSearchFields"] = array();
$tdatahris_educationprofile[".searchPanelOptions"] = array();
$tdatahris_educationprofile[".panelSearchFields"][] = "personelID";
	$tdatahris_educationprofile[".panelSearchFields"][] = "schoolname";
	$tdatahris_educationprofile[".panelSearchFields"][] = "educationlevel";
	
$tdatahris_educationprofile[".advSearchFields"] = array();
$tdatahris_educationprofile[".advSearchFields"][] = "ID";
$tdatahris_educationprofile[".advSearchFields"][] = "personelID";
$tdatahris_educationprofile[".advSearchFields"][] = "schoolname";
$tdatahris_educationprofile[".advSearchFields"][] = "schooladd";
$tdatahris_educationprofile[".advSearchFields"][] = "educationlevel";
$tdatahris_educationprofile[".advSearchFields"][] = "yearstarted";
$tdatahris_educationprofile[".advSearchFields"][] = "yeargraduated";

$tdatahris_educationprofile[".tableType"] = "list";

$tdatahris_educationprofile[".printerPageOrientation"] = 0;
$tdatahris_educationprofile[".nPrinterPageScale"] = 100;

$tdatahris_educationprofile[".nPrinterSplitRecords"] = 40;

$tdatahris_educationprofile[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_educationprofile[".pageSize"] = 20;

$tdatahris_educationprofile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_educationprofile[".strOrderBy"] = $tstrOrderBy;

$tdatahris_educationprofile[".orderindexes"] = array();

$tdatahris_educationprofile[".sqlHead"] = "SELECT ID,   schoolname,   schooladd,   educationlevel,   yearstarted,   yeargraduated,   personelID";
$tdatahris_educationprofile[".sqlFrom"] = "FROM hris_educationprofile";
$tdatahris_educationprofile[".sqlWhereExpr"] = "";
$tdatahris_educationprofile[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_educationprofile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_educationprofile[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_educationprofile[".highlightSearchResults"] = true;

$tableKeyshris_educationprofile = array();
$tableKeyshris_educationprofile[] = "ID";
$tdatahris_educationprofile[".Keys"] = $tableKeyshris_educationprofile;

$tdatahris_educationprofile[".listFields"] = array();
$tdatahris_educationprofile[".listFields"][] = "ID";
$tdatahris_educationprofile[".listFields"][] = "personelID";
$tdatahris_educationprofile[".listFields"][] = "schoolname";
$tdatahris_educationprofile[".listFields"][] = "schooladd";
$tdatahris_educationprofile[".listFields"][] = "educationlevel";
$tdatahris_educationprofile[".listFields"][] = "yearstarted";
$tdatahris_educationprofile[".listFields"][] = "yeargraduated";

$tdatahris_educationprofile[".hideMobileList"] = array();


$tdatahris_educationprofile[".viewFields"] = array();
$tdatahris_educationprofile[".viewFields"][] = "ID";
$tdatahris_educationprofile[".viewFields"][] = "personelID";
$tdatahris_educationprofile[".viewFields"][] = "schoolname";
$tdatahris_educationprofile[".viewFields"][] = "schooladd";
$tdatahris_educationprofile[".viewFields"][] = "educationlevel";
$tdatahris_educationprofile[".viewFields"][] = "yearstarted";
$tdatahris_educationprofile[".viewFields"][] = "yeargraduated";

$tdatahris_educationprofile[".addFields"] = array();
$tdatahris_educationprofile[".addFields"][] = "personelID";
$tdatahris_educationprofile[".addFields"][] = "schoolname";
$tdatahris_educationprofile[".addFields"][] = "schooladd";
$tdatahris_educationprofile[".addFields"][] = "educationlevel";
$tdatahris_educationprofile[".addFields"][] = "yearstarted";
$tdatahris_educationprofile[".addFields"][] = "yeargraduated";

$tdatahris_educationprofile[".inlineAddFields"] = array();
$tdatahris_educationprofile[".inlineAddFields"][] = "personelID";
$tdatahris_educationprofile[".inlineAddFields"][] = "schoolname";
$tdatahris_educationprofile[".inlineAddFields"][] = "schooladd";
$tdatahris_educationprofile[".inlineAddFields"][] = "educationlevel";
$tdatahris_educationprofile[".inlineAddFields"][] = "yearstarted";
$tdatahris_educationprofile[".inlineAddFields"][] = "yeargraduated";

$tdatahris_educationprofile[".editFields"] = array();
$tdatahris_educationprofile[".editFields"][] = "personelID";
$tdatahris_educationprofile[".editFields"][] = "schoolname";
$tdatahris_educationprofile[".editFields"][] = "schooladd";
$tdatahris_educationprofile[".editFields"][] = "educationlevel";
$tdatahris_educationprofile[".editFields"][] = "yearstarted";
$tdatahris_educationprofile[".editFields"][] = "yeargraduated";

$tdatahris_educationprofile[".inlineEditFields"] = array();
$tdatahris_educationprofile[".inlineEditFields"][] = "personelID";
$tdatahris_educationprofile[".inlineEditFields"][] = "schoolname";
$tdatahris_educationprofile[".inlineEditFields"][] = "schooladd";
$tdatahris_educationprofile[".inlineEditFields"][] = "educationlevel";
$tdatahris_educationprofile[".inlineEditFields"][] = "yearstarted";
$tdatahris_educationprofile[".inlineEditFields"][] = "yeargraduated";

$tdatahris_educationprofile[".exportFields"] = array();
$tdatahris_educationprofile[".exportFields"][] = "ID";
$tdatahris_educationprofile[".exportFields"][] = "personelID";
$tdatahris_educationprofile[".exportFields"][] = "schoolname";
$tdatahris_educationprofile[".exportFields"][] = "schooladd";
$tdatahris_educationprofile[".exportFields"][] = "educationlevel";
$tdatahris_educationprofile[".exportFields"][] = "yearstarted";
$tdatahris_educationprofile[".exportFields"][] = "yeargraduated";

$tdatahris_educationprofile[".importFields"] = array();
$tdatahris_educationprofile[".importFields"][] = "ID";
$tdatahris_educationprofile[".importFields"][] = "schoolname";
$tdatahris_educationprofile[".importFields"][] = "schooladd";
$tdatahris_educationprofile[".importFields"][] = "educationlevel";
$tdatahris_educationprofile[".importFields"][] = "yearstarted";
$tdatahris_educationprofile[".importFields"][] = "yeargraduated";
$tdatahris_educationprofile[".importFields"][] = "personelID";

$tdatahris_educationprofile[".printFields"] = array();
$tdatahris_educationprofile[".printFields"][] = "ID";
$tdatahris_educationprofile[".printFields"][] = "personelID";
$tdatahris_educationprofile[".printFields"][] = "schoolname";
$tdatahris_educationprofile[".printFields"][] = "schooladd";
$tdatahris_educationprofile[".printFields"][] = "educationlevel";
$tdatahris_educationprofile[".printFields"][] = "yearstarted";
$tdatahris_educationprofile[".printFields"][] = "yeargraduated";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","ID"); 
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

	

	
	$tdatahris_educationprofile["ID"] = $fdata;
//	schoolname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "schoolname";
	$fdata["GoodName"] = "schoolname";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","schoolname"); 
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
	
		$fdata["strField"] = "schoolname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "schoolname";
	
		
		
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

	
	$tdatahris_educationprofile["schoolname"] = $fdata;
//	schooladd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "schooladd";
	$fdata["GoodName"] = "schooladd";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","schooladd"); 
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
	
		$fdata["strField"] = "schooladd"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "schooladd";
	
		
		
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

	

	
	$tdatahris_educationprofile["schooladd"] = $fdata;
//	educationlevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "educationlevel";
	$fdata["GoodName"] = "educationlevel";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","educationlevel"); 
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
	
		$fdata["strField"] = "educationlevel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "educationlevel";
	
		
		
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
			$edata["EditParams"].= " maxlength=75";
	
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

	
	$tdatahris_educationprofile["educationlevel"] = $fdata;
//	yearstarted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "yearstarted";
	$fdata["GoodName"] = "yearstarted";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","yearstarted"); 
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
	
		$fdata["strField"] = "yearstarted"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yearstarted";
	
		
		
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

	

	
	$tdatahris_educationprofile["yearstarted"] = $fdata;
//	yeargraduated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yeargraduated";
	$fdata["GoodName"] = "yeargraduated";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","yeargraduated"); 
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
	
		$fdata["strField"] = "yeargraduated"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yeargraduated";
	
		
		
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

	

	
	$tdatahris_educationprofile["yeargraduated"] = $fdata;
//	personelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "personelID";
	$fdata["GoodName"] = "personelID";
	$fdata["ownerTable"] = "hris_educationprofile";
	$fdata["Label"] = GetFieldLabel("hris_educationprofile","personelID"); 
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
	
		$fdata["strField"] = "personelID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personelID";
	
		
		
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

	

	
	$tdatahris_educationprofile["personelID"] = $fdata;

	
$tables_data["hris_educationprofile"]=&$tdatahris_educationprofile;
$field_labels["hris_educationprofile"] = &$fieldLabelshris_educationprofile;
$fieldToolTips["hris_educationprofile"] = &$fieldToolTipshris_educationprofile;
$page_titles["hris_educationprofile"] = &$pageTitleshris_educationprofile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_educationprofile"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_educationprofile"] = array();


	
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
					$masterTablesData["hris_educationprofile"][0] = $masterParams;	
				$masterTablesData["hris_educationprofile"][0]["masterKeys"] = array();
	$masterTablesData["hris_educationprofile"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_educationprofile"][0]["detailKeys"] = array();
	$masterTablesData["hris_educationprofile"][0]["detailKeys"][]="personelID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_educationprofile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   schoolname,   schooladd,   educationlevel,   yearstarted,   yeargraduated,   personelID";
$proto0["m_strFrom"] = "FROM hris_educationprofile";
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
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_educationprofile";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "schoolname",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto7["m_sql"] = "schoolname";
$proto7["m_srcTableName"] = "hris_educationprofile";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "schooladd",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto9["m_sql"] = "schooladd";
$proto9["m_srcTableName"] = "hris_educationprofile";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "educationlevel",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto11["m_sql"] = "educationlevel";
$proto11["m_srcTableName"] = "hris_educationprofile";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "yearstarted",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto13["m_sql"] = "yearstarted";
$proto13["m_srcTableName"] = "hris_educationprofile";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "yeargraduated",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto15["m_sql"] = "yeargraduated";
$proto15["m_srcTableName"] = "hris_educationprofile";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "personelID",
	"m_strTable" => "hris_educationprofile",
	"m_srcTableName" => "hris_educationprofile"
));

$proto17["m_sql"] = "personelID";
$proto17["m_srcTableName"] = "hris_educationprofile";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hris_educationprofile";
$proto20["m_srcTableName"] = "hris_educationprofile";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "schoolname";
$proto20["m_columns"][] = "schooladd";
$proto20["m_columns"][] = "educationlevel";
$proto20["m_columns"][] = "yearstarted";
$proto20["m_columns"][] = "yeargraduated";
$proto20["m_columns"][] = "personelID";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "hris_educationprofile";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "hris_educationprofile";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_educationprofile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_educationprofile = createSqlQuery_hris_educationprofile();


	
							
	
$tdatahris_educationprofile[".sqlquery"] = $queryData_hris_educationprofile;

$tableEvents["hris_educationprofile"] = new eventsBase;
$tdatahris_educationprofile[".hasEvents"] = false;

?>