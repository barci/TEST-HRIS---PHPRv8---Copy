<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_orgsetup = array();
	$tdatahris_orgsetup[".truncateText"] = true;
	$tdatahris_orgsetup[".NumberOfChars"] = 80;
	$tdatahris_orgsetup[".ShortName"] = "hris_orgsetup";
	$tdatahris_orgsetup[".OwnerID"] = "";
	$tdatahris_orgsetup[".OriginalTable"] = "hris_orgsetup";

//	field labels
$fieldLabelshris_orgsetup = array();
$fieldToolTipshris_orgsetup = array();
$pageTitleshris_orgsetup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_orgsetup["English"] = array();
	$fieldToolTipshris_orgsetup["English"] = array();
	$pageTitleshris_orgsetup["English"] = array();
	$fieldLabelshris_orgsetup["English"]["ID"] = "ID";
	$fieldToolTipshris_orgsetup["English"]["ID"] = "";
	$fieldLabelshris_orgsetup["English"]["headID"] = "Head ID";
	$fieldToolTipshris_orgsetup["English"]["headID"] = "";
	$fieldLabelshris_orgsetup["English"]["memberID"] = "Member ID";
	$fieldToolTipshris_orgsetup["English"]["memberID"] = "";
	$fieldLabelshris_orgsetup["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_orgsetup["English"]["jobtitle"] = "";
	$fieldLabelshris_orgsetup["English"]["unit"] = "Unit";
	$fieldToolTipshris_orgsetup["English"]["unit"] = "";
	$fieldLabelshris_orgsetup["English"]["department"] = "Department";
	$fieldToolTipshris_orgsetup["English"]["department"] = "";
	if (count($fieldToolTipshris_orgsetup["English"]))
		$tdatahris_orgsetup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_orgsetup[""] = array();
	$fieldToolTipshris_orgsetup[""] = array();
	$pageTitleshris_orgsetup[""] = array();
	$fieldLabelshris_orgsetup[""]["ID"] = "ID";
	$fieldToolTipshris_orgsetup[""]["ID"] = "";
	$fieldLabelshris_orgsetup[""]["headID"] = "Head ID";
	$fieldToolTipshris_orgsetup[""]["headID"] = "";
	$fieldLabelshris_orgsetup[""]["memberID"] = "Member ID";
	$fieldToolTipshris_orgsetup[""]["memberID"] = "";
	$fieldLabelshris_orgsetup[""]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_orgsetup[""]["jobtitle"] = "";
	$fieldLabelshris_orgsetup[""]["unit"] = "Unit";
	$fieldToolTipshris_orgsetup[""]["unit"] = "";
	$fieldLabelshris_orgsetup[""]["department"] = "Department";
	$fieldToolTipshris_orgsetup[""]["department"] = "";
	if (count($fieldToolTipshris_orgsetup[""]))
		$tdatahris_orgsetup[".isUseToolTips"] = true;
}


	$tdatahris_orgsetup[".NCSearch"] = true;



$tdatahris_orgsetup[".shortTableName"] = "hris_orgsetup";
$tdatahris_orgsetup[".nSecOptions"] = 0;
$tdatahris_orgsetup[".recsPerRowPrint"] = 1;
$tdatahris_orgsetup[".mainTableOwnerID"] = "";
$tdatahris_orgsetup[".moveNext"] = 1;
$tdatahris_orgsetup[".entityType"] = 0;

$tdatahris_orgsetup[".strOriginalTableName"] = "hris_orgsetup";

	



$tdatahris_orgsetup[".showAddInPopup"] = false;

$tdatahris_orgsetup[".showEditInPopup"] = false;

$tdatahris_orgsetup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_orgsetup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_orgsetup[".fieldsForRegister"] = array();

$tdatahris_orgsetup[".listAjax"] = false;

	$tdatahris_orgsetup[".audit"] = false;

	$tdatahris_orgsetup[".locking"] = false;

$tdatahris_orgsetup[".edit"] = true;
$tdatahris_orgsetup[".afterEditAction"] = 1;
$tdatahris_orgsetup[".closePopupAfterEdit"] = 1;
$tdatahris_orgsetup[".afterEditActionDetTable"] = "";


$tdatahris_orgsetup[".list"] = true;

$tdatahris_orgsetup[".inlineEdit"] = true;
$tdatahris_orgsetup[".inlineAdd"] = true;
$tdatahris_orgsetup[".view"] = true;

$tdatahris_orgsetup[".import"] = true;

$tdatahris_orgsetup[".exportTo"] = true;

$tdatahris_orgsetup[".printFriendly"] = true;

$tdatahris_orgsetup[".delete"] = true;

$tdatahris_orgsetup[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_orgsetup[".searchSaving"] = false;
//

$tdatahris_orgsetup[".showSearchPanel"] = true;
		$tdatahris_orgsetup[".flexibleSearch"] = true;

$tdatahris_orgsetup[".isUseAjaxSuggest"] = true;

$tdatahris_orgsetup[".rowHighlite"] = true;



$tdatahris_orgsetup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_orgsetup[".isUseTimeForSearch"] = false;





$tdatahris_orgsetup[".allSearchFields"] = array();
$tdatahris_orgsetup[".filterFields"] = array();
$tdatahris_orgsetup[".requiredSearchFields"] = array();

$tdatahris_orgsetup[".allSearchFields"][] = "ID";
	$tdatahris_orgsetup[".allSearchFields"][] = "department";
	$tdatahris_orgsetup[".allSearchFields"][] = "unit";
	$tdatahris_orgsetup[".allSearchFields"][] = "jobtitle";
	$tdatahris_orgsetup[".allSearchFields"][] = "headID";
	$tdatahris_orgsetup[".allSearchFields"][] = "memberID";
	
$tdatahris_orgsetup[".filterFields"][] = "department";
$tdatahris_orgsetup[".filterFields"][] = "unit";

$tdatahris_orgsetup[".googleLikeFields"] = array();
$tdatahris_orgsetup[".googleLikeFields"][] = "ID";
$tdatahris_orgsetup[".googleLikeFields"][] = "department";
$tdatahris_orgsetup[".googleLikeFields"][] = "unit";
$tdatahris_orgsetup[".googleLikeFields"][] = "jobtitle";
$tdatahris_orgsetup[".googleLikeFields"][] = "headID";
$tdatahris_orgsetup[".googleLikeFields"][] = "memberID";


$tdatahris_orgsetup[".advSearchFields"] = array();
$tdatahris_orgsetup[".advSearchFields"][] = "ID";
$tdatahris_orgsetup[".advSearchFields"][] = "department";
$tdatahris_orgsetup[".advSearchFields"][] = "unit";
$tdatahris_orgsetup[".advSearchFields"][] = "jobtitle";
$tdatahris_orgsetup[".advSearchFields"][] = "headID";
$tdatahris_orgsetup[".advSearchFields"][] = "memberID";

$tdatahris_orgsetup[".tableType"] = "list";

$tdatahris_orgsetup[".printerPageOrientation"] = 0;
$tdatahris_orgsetup[".nPrinterPageScale"] = 100;

$tdatahris_orgsetup[".nPrinterSplitRecords"] = 40;

$tdatahris_orgsetup[".nPrinterPDFSplitRecords"] = 40;



$tdatahris_orgsetup[".geocodingEnabled"] = false;





$tdatahris_orgsetup[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahris_orgsetup[".pageSize"] = 20;

$tdatahris_orgsetup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_orgsetup[".strOrderBy"] = $tstrOrderBy;

$tdatahris_orgsetup[".orderindexes"] = array();

$tdatahris_orgsetup[".sqlHead"] = "SELECT hris_orgsetup.ID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_orgsetup.headID,  hris_orgsetup.memberID";
$tdatahris_orgsetup[".sqlFrom"] = "FROM hris_orgsetup  , hris_job";
$tdatahris_orgsetup[".sqlWhereExpr"] = "hris_orgsetup.headID =hris_job.personnelID";
$tdatahris_orgsetup[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_orgsetup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_orgsetup[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_orgsetup[".highlightSearchResults"] = true;

$tableKeyshris_orgsetup = array();
$tableKeyshris_orgsetup[] = "ID";
$tdatahris_orgsetup[".Keys"] = $tableKeyshris_orgsetup;

$tdatahris_orgsetup[".listFields"] = array();
$tdatahris_orgsetup[".listFields"][] = "ID";
$tdatahris_orgsetup[".listFields"][] = "department";
$tdatahris_orgsetup[".listFields"][] = "unit";
$tdatahris_orgsetup[".listFields"][] = "jobtitle";
$tdatahris_orgsetup[".listFields"][] = "headID";
$tdatahris_orgsetup[".listFields"][] = "memberID";

$tdatahris_orgsetup[".hideMobileList"] = array();


$tdatahris_orgsetup[".viewFields"] = array();
$tdatahris_orgsetup[".viewFields"][] = "ID";
$tdatahris_orgsetup[".viewFields"][] = "department";
$tdatahris_orgsetup[".viewFields"][] = "unit";
$tdatahris_orgsetup[".viewFields"][] = "jobtitle";
$tdatahris_orgsetup[".viewFields"][] = "headID";
$tdatahris_orgsetup[".viewFields"][] = "memberID";

$tdatahris_orgsetup[".addFields"] = array();

$tdatahris_orgsetup[".masterListFields"] = array();
$tdatahris_orgsetup[".masterListFields"][] = "ID";
$tdatahris_orgsetup[".masterListFields"][] = "department";
$tdatahris_orgsetup[".masterListFields"][] = "unit";
$tdatahris_orgsetup[".masterListFields"][] = "jobtitle";
$tdatahris_orgsetup[".masterListFields"][] = "headID";
$tdatahris_orgsetup[".masterListFields"][] = "memberID";

$tdatahris_orgsetup[".inlineAddFields"] = array();
$tdatahris_orgsetup[".inlineAddFields"][] = "headID";
$tdatahris_orgsetup[".inlineAddFields"][] = "memberID";

$tdatahris_orgsetup[".editFields"] = array();
$tdatahris_orgsetup[".editFields"][] = "headID";
$tdatahris_orgsetup[".editFields"][] = "memberID";

$tdatahris_orgsetup[".inlineEditFields"] = array();
$tdatahris_orgsetup[".inlineEditFields"][] = "headID";
$tdatahris_orgsetup[".inlineEditFields"][] = "memberID";

$tdatahris_orgsetup[".exportFields"] = array();
$tdatahris_orgsetup[".exportFields"][] = "ID";
$tdatahris_orgsetup[".exportFields"][] = "department";
$tdatahris_orgsetup[".exportFields"][] = "unit";
$tdatahris_orgsetup[".exportFields"][] = "jobtitle";
$tdatahris_orgsetup[".exportFields"][] = "headID";
$tdatahris_orgsetup[".exportFields"][] = "memberID";

$tdatahris_orgsetup[".importFields"] = array();
$tdatahris_orgsetup[".importFields"][] = "department";
$tdatahris_orgsetup[".importFields"][] = "unit";
$tdatahris_orgsetup[".importFields"][] = "jobtitle";
$tdatahris_orgsetup[".importFields"][] = "headID";
$tdatahris_orgsetup[".importFields"][] = "memberID";

$tdatahris_orgsetup[".printFields"] = array();
$tdatahris_orgsetup[".printFields"][] = "ID";
$tdatahris_orgsetup[".printFields"][] = "department";
$tdatahris_orgsetup[".printFields"][] = "unit";
$tdatahris_orgsetup[".printFields"][] = "jobtitle";
$tdatahris_orgsetup[".printFields"][] = "headID";
$tdatahris_orgsetup[".printFields"][] = "memberID";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_orgsetup";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_orgsetup.ID";

	
	
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




	$tdatahris_orgsetup["ID"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","department");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatahris_orgsetup["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","unit");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatahris_orgsetup["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","jobtitle");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_orgsetup["jobtitle"] = $fdata;
//	headID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "headID";
	$fdata["GoodName"] = "headID";
	$fdata["ownerTable"] = "hris_orgsetup";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","headID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "headID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_orgsetup.headID";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_orgsetup["headID"] = $fdata;
//	memberID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "memberID";
	$fdata["GoodName"] = "memberID";
	$fdata["ownerTable"] = "hris_orgsetup";
	$fdata["Label"] = GetFieldLabel("hris_orgsetup","memberID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memberID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_orgsetup.memberID";

	
	
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




	$tdatahris_orgsetup["memberID"] = $fdata;


$tables_data["hris_orgsetup"]=&$tdatahris_orgsetup;
$field_labels["hris_orgsetup"] = &$fieldLabelshris_orgsetup;
$fieldToolTips["hris_orgsetup"] = &$fieldToolTipshris_orgsetup;
$page_titles["hris_orgsetup"] = &$pageTitleshris_orgsetup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_orgsetup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hris_orgsetup"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_orgsetup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_orgsetup.ID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_orgsetup.headID,  hris_orgsetup.memberID";
$proto0["m_strFrom"] = "FROM hris_orgsetup  , hris_job";
$proto0["m_strWhere"] = "hris_orgsetup.headID =hris_job.personnelID";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "hris_orgsetup.headID =hris_job.personnelID";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "headID",
	"m_strTable" => "hris_orgsetup",
	"m_srcTableName" => "hris_orgsetup"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=hris_job.personnelID";
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
	"m_strTable" => "hris_orgsetup",
	"m_srcTableName" => "hris_orgsetup"
));

$proto6["m_sql"] = "hris_orgsetup.ID";
$proto6["m_srcTableName"] = "hris_orgsetup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_orgsetup"
));

$proto8["m_sql"] = "hris_job.department";
$proto8["m_srcTableName"] = "hris_orgsetup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_orgsetup"
));

$proto10["m_sql"] = "hris_job.unit";
$proto10["m_srcTableName"] = "hris_orgsetup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_orgsetup"
));

$proto12["m_sql"] = "hris_job.jobtitle";
$proto12["m_srcTableName"] = "hris_orgsetup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "headID",
	"m_strTable" => "hris_orgsetup",
	"m_srcTableName" => "hris_orgsetup"
));

$proto14["m_sql"] = "hris_orgsetup.headID";
$proto14["m_srcTableName"] = "hris_orgsetup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "memberID",
	"m_strTable" => "hris_orgsetup",
	"m_srcTableName" => "hris_orgsetup"
));

$proto16["m_sql"] = "hris_orgsetup.memberID";
$proto16["m_srcTableName"] = "hris_orgsetup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hris_orgsetup";
$proto19["m_srcTableName"] = "hris_orgsetup";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "headID";
$proto19["m_columns"][] = "memberID";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hris_orgsetup";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hris_orgsetup";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_CROSSJOIN";
			$proto23=array();
$proto23["m_strName"] = "hris_job";
$proto23["m_srcTableName"] = "hris_orgsetup";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "empID";
$proto23["m_columns"][] = "department";
$proto23["m_columns"][] = "unit";
$proto23["m_columns"][] = "jobtitle";
$proto23["m_columns"][] = "jobdescription";
$proto23["m_columns"][] = "datehired";
$proto23["m_columns"][] = "reference";
$proto23["m_columns"][] = "dateend";
$proto23["m_columns"][] = "type";
$proto23["m_columns"][] = "category";
$proto23["m_columns"][] = "empstatus";
$proto23["m_columns"][] = "personnelID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "hris_job";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "hris_orgsetup";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_orgsetup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_orgsetup = createSqlQuery_hris_orgsetup();


	
		;

						

$tdatahris_orgsetup[".sqlquery"] = $queryData_hris_orgsetup;

$tableEvents["hris_orgsetup"] = new eventsBase;
$tdatahris_orgsetup[".hasEvents"] = false;

?>