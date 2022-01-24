<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_leavetype = array();
	$tdatahris_leavetype[".truncateText"] = true;
	$tdatahris_leavetype[".NumberOfChars"] = 80;
	$tdatahris_leavetype[".ShortName"] = "hris_leavetype";
	$tdatahris_leavetype[".OwnerID"] = "";
	$tdatahris_leavetype[".OriginalTable"] = "hris_leavetype";

//	field labels
$fieldLabelshris_leavetype = array();
$fieldToolTipshris_leavetype = array();
$pageTitleshris_leavetype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_leavetype["English"] = array();
	$fieldToolTipshris_leavetype["English"] = array();
	$pageTitleshris_leavetype["English"] = array();
	$fieldLabelshris_leavetype["English"]["ID"] = "ID";
	$fieldToolTipshris_leavetype["English"]["ID"] = "";
	$fieldLabelshris_leavetype["English"]["code"] = "Code";
	$fieldToolTipshris_leavetype["English"]["code"] = "";
	$fieldLabelshris_leavetype["English"]["description"] = "Description";
	$fieldToolTipshris_leavetype["English"]["description"] = "";
	$fieldLabelshris_leavetype["English"]["credits"] = "Credits";
	$fieldToolTipshris_leavetype["English"]["credits"] = "";
	$fieldLabelshris_leavetype["English"]["maxcredit"] = "Maxcredit";
	$fieldToolTipshris_leavetype["English"]["maxcredit"] = "";
	$fieldLabelshris_leavetype["English"]["unit"] = "Unit";
	$fieldToolTipshris_leavetype["English"]["unit"] = "";
	$fieldLabelshris_leavetype["English"]["implementation"] = "Implementation";
	$fieldToolTipshris_leavetype["English"]["implementation"] = "";
	$fieldLabelshris_leavetype["English"]["notes"] = "Notes";
	$fieldToolTipshris_leavetype["English"]["notes"] = "";
	$fieldLabelshris_leavetype["English"]["civilstatus"] = "Civilstatus";
	$fieldToolTipshris_leavetype["English"]["civilstatus"] = "";
	$fieldLabelshris_leavetype["English"]["gender"] = "Gender";
	$fieldToolTipshris_leavetype["English"]["gender"] = "";
	if (count($fieldToolTipshris_leavetype["English"]))
		$tdatahris_leavetype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_leavetype[""] = array();
	$fieldToolTipshris_leavetype[""] = array();
	$pageTitleshris_leavetype[""] = array();
	$fieldLabelshris_leavetype[""]["ID"] = "ID";
	$fieldToolTipshris_leavetype[""]["ID"] = "";
	$fieldLabelshris_leavetype[""]["code"] = "Code";
	$fieldToolTipshris_leavetype[""]["code"] = "";
	$fieldLabelshris_leavetype[""]["description"] = "Description";
	$fieldToolTipshris_leavetype[""]["description"] = "";
	$fieldLabelshris_leavetype[""]["credits"] = "Credits";
	$fieldToolTipshris_leavetype[""]["credits"] = "";
	$fieldLabelshris_leavetype[""]["maxcredit"] = "Maxcredit";
	$fieldToolTipshris_leavetype[""]["maxcredit"] = "";
	$fieldLabelshris_leavetype[""]["unit"] = "Unit";
	$fieldToolTipshris_leavetype[""]["unit"] = "";
	$fieldLabelshris_leavetype[""]["implementation"] = "Implementation";
	$fieldToolTipshris_leavetype[""]["implementation"] = "";
	$fieldLabelshris_leavetype[""]["notes"] = "Notes";
	$fieldToolTipshris_leavetype[""]["notes"] = "";
	$fieldLabelshris_leavetype[""]["civilstatus"] = "Civilstatus";
	$fieldToolTipshris_leavetype[""]["civilstatus"] = "";
	$fieldLabelshris_leavetype[""]["gender"] = "Gender";
	$fieldToolTipshris_leavetype[""]["gender"] = "";
	if (count($fieldToolTipshris_leavetype[""]))
		$tdatahris_leavetype[".isUseToolTips"] = true;
}


	$tdatahris_leavetype[".NCSearch"] = true;



$tdatahris_leavetype[".shortTableName"] = "hris_leavetype";
$tdatahris_leavetype[".nSecOptions"] = 0;
$tdatahris_leavetype[".recsPerRowPrint"] = 1;
$tdatahris_leavetype[".mainTableOwnerID"] = "";
$tdatahris_leavetype[".moveNext"] = 1;
$tdatahris_leavetype[".entityType"] = 0;

$tdatahris_leavetype[".strOriginalTableName"] = "hris_leavetype";

	



$tdatahris_leavetype[".showAddInPopup"] = false;

$tdatahris_leavetype[".showEditInPopup"] = false;

$tdatahris_leavetype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_leavetype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_leavetype[".fieldsForRegister"] = array();

$tdatahris_leavetype[".listAjax"] = false;

	$tdatahris_leavetype[".audit"] = false;

	$tdatahris_leavetype[".locking"] = false;

$tdatahris_leavetype[".edit"] = true;
$tdatahris_leavetype[".afterEditAction"] = 1;
$tdatahris_leavetype[".closePopupAfterEdit"] = 1;
$tdatahris_leavetype[".afterEditActionDetTable"] = "";

$tdatahris_leavetype[".add"] = true;
$tdatahris_leavetype[".afterAddAction"] = 1;
$tdatahris_leavetype[".closePopupAfterAdd"] = 1;
$tdatahris_leavetype[".afterAddActionDetTable"] = "";

$tdatahris_leavetype[".list"] = true;

$tdatahris_leavetype[".inlineEdit"] = true;
$tdatahris_leavetype[".inlineAdd"] = true;
$tdatahris_leavetype[".view"] = true;

$tdatahris_leavetype[".import"] = true;

$tdatahris_leavetype[".exportTo"] = true;

$tdatahris_leavetype[".printFriendly"] = true;

$tdatahris_leavetype[".delete"] = true;

$tdatahris_leavetype[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_leavetype[".searchSaving"] = false;
//

$tdatahris_leavetype[".showSearchPanel"] = true;
		$tdatahris_leavetype[".flexibleSearch"] = true;

$tdatahris_leavetype[".isUseAjaxSuggest"] = true;

$tdatahris_leavetype[".rowHighlite"] = true;



$tdatahris_leavetype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_leavetype[".isUseTimeForSearch"] = false;





$tdatahris_leavetype[".allSearchFields"] = array();
$tdatahris_leavetype[".filterFields"] = array();
$tdatahris_leavetype[".requiredSearchFields"] = array();

$tdatahris_leavetype[".allSearchFields"][] = "ID";
	$tdatahris_leavetype[".allSearchFields"][] = "code";
	$tdatahris_leavetype[".allSearchFields"][] = "description";
	$tdatahris_leavetype[".allSearchFields"][] = "credits";
	$tdatahris_leavetype[".allSearchFields"][] = "maxcredit";
	$tdatahris_leavetype[".allSearchFields"][] = "unit";
	$tdatahris_leavetype[".allSearchFields"][] = "implementation";
	$tdatahris_leavetype[".allSearchFields"][] = "civilstatus";
	$tdatahris_leavetype[".allSearchFields"][] = "gender";
	$tdatahris_leavetype[".allSearchFields"][] = "notes";
	

$tdatahris_leavetype[".googleLikeFields"] = array();
$tdatahris_leavetype[".googleLikeFields"][] = "ID";
$tdatahris_leavetype[".googleLikeFields"][] = "code";
$tdatahris_leavetype[".googleLikeFields"][] = "description";
$tdatahris_leavetype[".googleLikeFields"][] = "credits";
$tdatahris_leavetype[".googleLikeFields"][] = "maxcredit";
$tdatahris_leavetype[".googleLikeFields"][] = "unit";
$tdatahris_leavetype[".googleLikeFields"][] = "implementation";
$tdatahris_leavetype[".googleLikeFields"][] = "civilstatus";
$tdatahris_leavetype[".googleLikeFields"][] = "gender";
$tdatahris_leavetype[".googleLikeFields"][] = "notes";


$tdatahris_leavetype[".advSearchFields"] = array();
$tdatahris_leavetype[".advSearchFields"][] = "ID";
$tdatahris_leavetype[".advSearchFields"][] = "code";
$tdatahris_leavetype[".advSearchFields"][] = "description";
$tdatahris_leavetype[".advSearchFields"][] = "credits";
$tdatahris_leavetype[".advSearchFields"][] = "maxcredit";
$tdatahris_leavetype[".advSearchFields"][] = "unit";
$tdatahris_leavetype[".advSearchFields"][] = "implementation";
$tdatahris_leavetype[".advSearchFields"][] = "civilstatus";
$tdatahris_leavetype[".advSearchFields"][] = "gender";
$tdatahris_leavetype[".advSearchFields"][] = "notes";

$tdatahris_leavetype[".tableType"] = "list";

$tdatahris_leavetype[".printerPageOrientation"] = 0;
$tdatahris_leavetype[".nPrinterPageScale"] = 100;

$tdatahris_leavetype[".nPrinterSplitRecords"] = 40;

$tdatahris_leavetype[".nPrinterPDFSplitRecords"] = 40;



$tdatahris_leavetype[".geocodingEnabled"] = false;





$tdatahris_leavetype[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahris_leavetype[".pageSize"] = 20;

$tdatahris_leavetype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_leavetype[".strOrderBy"] = $tstrOrderBy;

$tdatahris_leavetype[".orderindexes"] = array();

$tdatahris_leavetype[".sqlHead"] = "SELECT ID,  	code,  	description,  	credits,  	maxcredit,  	unit,  	implementation,  	civilstatus,  	gender,  	notes";
$tdatahris_leavetype[".sqlFrom"] = "FROM hris_leavetype";
$tdatahris_leavetype[".sqlWhereExpr"] = "";
$tdatahris_leavetype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_leavetype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_leavetype[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_leavetype[".highlightSearchResults"] = true;

$tableKeyshris_leavetype = array();
$tableKeyshris_leavetype[] = "ID";
$tdatahris_leavetype[".Keys"] = $tableKeyshris_leavetype;

$tdatahris_leavetype[".listFields"] = array();
$tdatahris_leavetype[".listFields"][] = "ID";
$tdatahris_leavetype[".listFields"][] = "code";
$tdatahris_leavetype[".listFields"][] = "description";
$tdatahris_leavetype[".listFields"][] = "credits";
$tdatahris_leavetype[".listFields"][] = "maxcredit";
$tdatahris_leavetype[".listFields"][] = "unit";
$tdatahris_leavetype[".listFields"][] = "implementation";
$tdatahris_leavetype[".listFields"][] = "civilstatus";
$tdatahris_leavetype[".listFields"][] = "gender";
$tdatahris_leavetype[".listFields"][] = "notes";

$tdatahris_leavetype[".hideMobileList"] = array();


$tdatahris_leavetype[".viewFields"] = array();
$tdatahris_leavetype[".viewFields"][] = "ID";
$tdatahris_leavetype[".viewFields"][] = "code";
$tdatahris_leavetype[".viewFields"][] = "description";
$tdatahris_leavetype[".viewFields"][] = "credits";
$tdatahris_leavetype[".viewFields"][] = "maxcredit";
$tdatahris_leavetype[".viewFields"][] = "unit";
$tdatahris_leavetype[".viewFields"][] = "implementation";
$tdatahris_leavetype[".viewFields"][] = "civilstatus";
$tdatahris_leavetype[".viewFields"][] = "gender";
$tdatahris_leavetype[".viewFields"][] = "notes";

$tdatahris_leavetype[".addFields"] = array();
$tdatahris_leavetype[".addFields"][] = "code";
$tdatahris_leavetype[".addFields"][] = "description";
$tdatahris_leavetype[".addFields"][] = "credits";
$tdatahris_leavetype[".addFields"][] = "maxcredit";
$tdatahris_leavetype[".addFields"][] = "unit";
$tdatahris_leavetype[".addFields"][] = "implementation";
$tdatahris_leavetype[".addFields"][] = "civilstatus";
$tdatahris_leavetype[".addFields"][] = "gender";
$tdatahris_leavetype[".addFields"][] = "notes";

$tdatahris_leavetype[".masterListFields"] = array();
$tdatahris_leavetype[".masterListFields"][] = "ID";
$tdatahris_leavetype[".masterListFields"][] = "code";
$tdatahris_leavetype[".masterListFields"][] = "description";
$tdatahris_leavetype[".masterListFields"][] = "credits";
$tdatahris_leavetype[".masterListFields"][] = "maxcredit";
$tdatahris_leavetype[".masterListFields"][] = "unit";
$tdatahris_leavetype[".masterListFields"][] = "implementation";
$tdatahris_leavetype[".masterListFields"][] = "civilstatus";
$tdatahris_leavetype[".masterListFields"][] = "gender";
$tdatahris_leavetype[".masterListFields"][] = "notes";

$tdatahris_leavetype[".inlineAddFields"] = array();
$tdatahris_leavetype[".inlineAddFields"][] = "code";
$tdatahris_leavetype[".inlineAddFields"][] = "description";
$tdatahris_leavetype[".inlineAddFields"][] = "credits";
$tdatahris_leavetype[".inlineAddFields"][] = "maxcredit";
$tdatahris_leavetype[".inlineAddFields"][] = "unit";
$tdatahris_leavetype[".inlineAddFields"][] = "implementation";
$tdatahris_leavetype[".inlineAddFields"][] = "civilstatus";
$tdatahris_leavetype[".inlineAddFields"][] = "gender";
$tdatahris_leavetype[".inlineAddFields"][] = "notes";

$tdatahris_leavetype[".editFields"] = array();
$tdatahris_leavetype[".editFields"][] = "code";
$tdatahris_leavetype[".editFields"][] = "description";
$tdatahris_leavetype[".editFields"][] = "credits";
$tdatahris_leavetype[".editFields"][] = "maxcredit";
$tdatahris_leavetype[".editFields"][] = "unit";
$tdatahris_leavetype[".editFields"][] = "implementation";
$tdatahris_leavetype[".editFields"][] = "civilstatus";
$tdatahris_leavetype[".editFields"][] = "gender";
$tdatahris_leavetype[".editFields"][] = "notes";

$tdatahris_leavetype[".inlineEditFields"] = array();
$tdatahris_leavetype[".inlineEditFields"][] = "code";
$tdatahris_leavetype[".inlineEditFields"][] = "description";
$tdatahris_leavetype[".inlineEditFields"][] = "credits";
$tdatahris_leavetype[".inlineEditFields"][] = "maxcredit";
$tdatahris_leavetype[".inlineEditFields"][] = "unit";
$tdatahris_leavetype[".inlineEditFields"][] = "implementation";
$tdatahris_leavetype[".inlineEditFields"][] = "civilstatus";
$tdatahris_leavetype[".inlineEditFields"][] = "gender";
$tdatahris_leavetype[".inlineEditFields"][] = "notes";

$tdatahris_leavetype[".exportFields"] = array();
$tdatahris_leavetype[".exportFields"][] = "ID";
$tdatahris_leavetype[".exportFields"][] = "code";
$tdatahris_leavetype[".exportFields"][] = "description";
$tdatahris_leavetype[".exportFields"][] = "credits";
$tdatahris_leavetype[".exportFields"][] = "maxcredit";
$tdatahris_leavetype[".exportFields"][] = "unit";
$tdatahris_leavetype[".exportFields"][] = "implementation";
$tdatahris_leavetype[".exportFields"][] = "civilstatus";
$tdatahris_leavetype[".exportFields"][] = "gender";
$tdatahris_leavetype[".exportFields"][] = "notes";

$tdatahris_leavetype[".importFields"] = array();
$tdatahris_leavetype[".importFields"][] = "ID";
$tdatahris_leavetype[".importFields"][] = "code";
$tdatahris_leavetype[".importFields"][] = "description";
$tdatahris_leavetype[".importFields"][] = "credits";
$tdatahris_leavetype[".importFields"][] = "maxcredit";
$tdatahris_leavetype[".importFields"][] = "unit";
$tdatahris_leavetype[".importFields"][] = "implementation";
$tdatahris_leavetype[".importFields"][] = "civilstatus";
$tdatahris_leavetype[".importFields"][] = "gender";
$tdatahris_leavetype[".importFields"][] = "notes";

$tdatahris_leavetype[".printFields"] = array();
$tdatahris_leavetype[".printFields"][] = "ID";
$tdatahris_leavetype[".printFields"][] = "code";
$tdatahris_leavetype[".printFields"][] = "description";
$tdatahris_leavetype[".printFields"][] = "credits";
$tdatahris_leavetype[".printFields"][] = "maxcredit";
$tdatahris_leavetype[".printFields"][] = "unit";
$tdatahris_leavetype[".printFields"][] = "implementation";
$tdatahris_leavetype[".printFields"][] = "civilstatus";
$tdatahris_leavetype[".printFields"][] = "gender";
$tdatahris_leavetype[".printFields"][] = "notes";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","ID");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["ID"] = $fdata;
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","code");
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

		$fdata["strField"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
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
	$edata["LookupTable"] = "hris_leavetype";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "code";

	
	$edata["LookupOrderBy"] = "code";

	
	
	
	

	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["code"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","description");
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

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["description"] = $fdata;
//	credits
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "credits";
	$fdata["GoodName"] = "credits";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","credits");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "credits";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "credits";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["credits"] = $fdata;
//	maxcredit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "maxcredit";
	$fdata["GoodName"] = "maxcredit";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","maxcredit");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "maxcredit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maxcredit";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["maxcredit"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","unit");
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "daily";
	$edata["LookupValues"][] = "cash";

		$edata["Multiselect"] = true;

	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["unit"] = $fdata;
//	implementation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "implementation";
	$fdata["GoodName"] = "implementation";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","implementation");
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

		$fdata["strField"] = "implementation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "monthly";
	$edata["LookupValues"][] = "quarterly";
	$edata["LookupValues"][] = "yearly";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["implementation"] = $fdata;
//	civilstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "civilstatus";
	$fdata["GoodName"] = "civilstatus";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","civilstatus");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hris_personnel";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "civilstatus";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "civilstatus";

	
	$edata["LookupOrderBy"] = "civilstatus";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["civilstatus"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","gender");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hris_personnel";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "gender";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "gender";

	
	$edata["LookupOrderBy"] = "gender";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["gender"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "hris_leavetype";
	$fdata["Label"] = GetFieldLabel("hris_leavetype","notes");
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

		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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
			$edata["nCols"] = 400;

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavetype["notes"] = $fdata;


$tables_data["hris_leavetype"]=&$tdatahris_leavetype;
$field_labels["hris_leavetype"] = &$fieldLabelshris_leavetype;
$fieldToolTips["hris_leavetype"] = &$fieldToolTipshris_leavetype;
$page_titles["hris_leavetype"] = &$pageTitleshris_leavetype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_leavetype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hris_leavetype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_leavetype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	code,  	description,  	credits,  	maxcredit,  	unit,  	implementation,  	civilstatus,  	gender,  	notes";
$proto0["m_strFrom"] = "FROM hris_leavetype";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "hris_leavetype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "hris_leavetype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "hris_leavetype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "credits",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto12["m_sql"] = "credits";
$proto12["m_srcTableName"] = "hris_leavetype";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "maxcredit",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto14["m_sql"] = "maxcredit";
$proto14["m_srcTableName"] = "hris_leavetype";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto16["m_sql"] = "unit";
$proto16["m_srcTableName"] = "hris_leavetype";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "implementation",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto18["m_sql"] = "implementation";
$proto18["m_srcTableName"] = "hris_leavetype";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "civilstatus",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto20["m_sql"] = "civilstatus";
$proto20["m_srcTableName"] = "hris_leavetype";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto22["m_sql"] = "gender";
$proto22["m_srcTableName"] = "hris_leavetype";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "hris_leavetype",
	"m_srcTableName" => "hris_leavetype"
));

$proto24["m_sql"] = "notes";
$proto24["m_srcTableName"] = "hris_leavetype";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "hris_leavetype";
$proto27["m_srcTableName"] = "hris_leavetype";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "code";
$proto27["m_columns"][] = "description";
$proto27["m_columns"][] = "credits";
$proto27["m_columns"][] = "maxcredit";
$proto27["m_columns"][] = "unit";
$proto27["m_columns"][] = "implementation";
$proto27["m_columns"][] = "civilstatus";
$proto27["m_columns"][] = "gender";
$proto27["m_columns"][] = "notes";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "hris_leavetype";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "hris_leavetype";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_leavetype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_leavetype = createSqlQuery_hris_leavetype();


	
		;

										

$tdatahris_leavetype[".sqlquery"] = $queryData_hris_leavetype;

$tableEvents["hris_leavetype"] = new eventsBase;
$tdatahris_leavetype[".hasEvents"] = false;

?>