<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_leavecredit = array();
	$tdatahris_leavecredit[".truncateText"] = true;
	$tdatahris_leavecredit[".NumberOfChars"] = 80;
	$tdatahris_leavecredit[".ShortName"] = "hris_leavecredit";
	$tdatahris_leavecredit[".OwnerID"] = "";
	$tdatahris_leavecredit[".OriginalTable"] = "hris_leavecredit";

//	field labels
$fieldLabelshris_leavecredit = array();
$fieldToolTipshris_leavecredit = array();
$pageTitleshris_leavecredit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_leavecredit["English"] = array();
	$fieldToolTipshris_leavecredit["English"] = array();
	$pageTitleshris_leavecredit["English"] = array();
	$fieldLabelshris_leavecredit["English"]["ID"] = "ID";
	$fieldToolTipshris_leavecredit["English"]["ID"] = "";
	$fieldLabelshris_leavecredit["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_leavecredit["English"]["personnelID"] = "";
	$fieldLabelshris_leavecredit["English"]["leavetype"] = "Leavetype";
	$fieldToolTipshris_leavecredit["English"]["leavetype"] = "";
	$fieldLabelshris_leavecredit["English"]["fiscalyear"] = "Fiscal Year";
	$fieldToolTipshris_leavecredit["English"]["fiscalyear"] = "";
	$fieldLabelshris_leavecredit["English"]["credit"] = "Credit";
	$fieldToolTipshris_leavecredit["English"]["credit"] = "";
	$fieldLabelshris_leavecredit["English"]["debit"] = "Debit";
	$fieldToolTipshris_leavecredit["English"]["debit"] = "";
	$fieldLabelshris_leavecredit["English"]["notes"] = "Notes";
	$fieldToolTipshris_leavecredit["English"]["notes"] = "";
	$fieldLabelshris_leavecredit["English"]["approverID"] = "Approver ID";
	$fieldToolTipshris_leavecredit["English"]["approverID"] = "";
	$fieldLabelshris_leavecredit["English"]["dateapproved"] = "Dateapproved";
	$fieldToolTipshris_leavecredit["English"]["dateapproved"] = "";
	$fieldLabelshris_leavecredit["English"]["datesubmitted"] = "Datesubmitted";
	$fieldToolTipshris_leavecredit["English"]["datesubmitted"] = "";
	$fieldLabelshris_leavecredit["English"]["inclusivedates"] = "Inclusivedates";
	$fieldToolTipshris_leavecredit["English"]["inclusivedates"] = "";
	if (count($fieldToolTipshris_leavecredit["English"]))
		$tdatahris_leavecredit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_leavecredit[""] = array();
	$fieldToolTipshris_leavecredit[""] = array();
	$pageTitleshris_leavecredit[""] = array();
	$fieldLabelshris_leavecredit[""]["ID"] = "ID";
	$fieldToolTipshris_leavecredit[""]["ID"] = "";
	$fieldLabelshris_leavecredit[""]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_leavecredit[""]["personnelID"] = "";
	$fieldLabelshris_leavecredit[""]["leavetype"] = "Leavetype";
	$fieldToolTipshris_leavecredit[""]["leavetype"] = "";
	$fieldLabelshris_leavecredit[""]["fiscalyear"] = "Fiscalyear";
	$fieldToolTipshris_leavecredit[""]["fiscalyear"] = "";
	$fieldLabelshris_leavecredit[""]["credit"] = "Credit";
	$fieldToolTipshris_leavecredit[""]["credit"] = "";
	$fieldLabelshris_leavecredit[""]["debit"] = "Debit";
	$fieldToolTipshris_leavecredit[""]["debit"] = "";
	$fieldLabelshris_leavecredit[""]["notes"] = "Notes";
	$fieldToolTipshris_leavecredit[""]["notes"] = "";
	$fieldLabelshris_leavecredit[""]["approverID"] = "Approver ID";
	$fieldToolTipshris_leavecredit[""]["approverID"] = "";
	$fieldLabelshris_leavecredit[""]["dateapproved"] = "Dateapproved";
	$fieldToolTipshris_leavecredit[""]["dateapproved"] = "";
	$fieldLabelshris_leavecredit[""]["datesubmitted"] = "Datesubmitted";
	$fieldToolTipshris_leavecredit[""]["datesubmitted"] = "";
	$fieldLabelshris_leavecredit[""]["inclusivedates"] = "Inclusivedates";
	$fieldToolTipshris_leavecredit[""]["inclusivedates"] = "";
	if (count($fieldToolTipshris_leavecredit[""]))
		$tdatahris_leavecredit[".isUseToolTips"] = true;
}


	$tdatahris_leavecredit[".NCSearch"] = true;



$tdatahris_leavecredit[".shortTableName"] = "hris_leavecredit";
$tdatahris_leavecredit[".nSecOptions"] = 0;
$tdatahris_leavecredit[".recsPerRowPrint"] = 1;
$tdatahris_leavecredit[".mainTableOwnerID"] = "";
$tdatahris_leavecredit[".moveNext"] = 1;
$tdatahris_leavecredit[".entityType"] = 0;

$tdatahris_leavecredit[".strOriginalTableName"] = "hris_leavecredit";

	



$tdatahris_leavecredit[".showAddInPopup"] = false;

$tdatahris_leavecredit[".showEditInPopup"] = false;

$tdatahris_leavecredit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_leavecredit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_leavecredit[".fieldsForRegister"] = array();

$tdatahris_leavecredit[".listAjax"] = false;

	$tdatahris_leavecredit[".audit"] = false;

	$tdatahris_leavecredit[".locking"] = false;

$tdatahris_leavecredit[".edit"] = true;
$tdatahris_leavecredit[".afterEditAction"] = 1;
$tdatahris_leavecredit[".closePopupAfterEdit"] = 1;
$tdatahris_leavecredit[".afterEditActionDetTable"] = "";

$tdatahris_leavecredit[".add"] = true;
$tdatahris_leavecredit[".afterAddAction"] = 1;
$tdatahris_leavecredit[".closePopupAfterAdd"] = 1;
$tdatahris_leavecredit[".afterAddActionDetTable"] = "";

$tdatahris_leavecredit[".list"] = true;

$tdatahris_leavecredit[".view"] = true;

$tdatahris_leavecredit[".import"] = true;

$tdatahris_leavecredit[".exportTo"] = true;

$tdatahris_leavecredit[".printFriendly"] = true;

$tdatahris_leavecredit[".delete"] = true;

$tdatahris_leavecredit[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_leavecredit[".searchSaving"] = false;
//

$tdatahris_leavecredit[".showSearchPanel"] = true;
		$tdatahris_leavecredit[".flexibleSearch"] = true;

$tdatahris_leavecredit[".isUseAjaxSuggest"] = true;

$tdatahris_leavecredit[".rowHighlite"] = true;



$tdatahris_leavecredit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_leavecredit[".isUseTimeForSearch"] = false;



$tdatahris_leavecredit[".badgeColor"] = "7F7F7F";


$tdatahris_leavecredit[".allSearchFields"] = array();
$tdatahris_leavecredit[".filterFields"] = array();
$tdatahris_leavecredit[".requiredSearchFields"] = array();

$tdatahris_leavecredit[".allSearchFields"][] = "ID";
	$tdatahris_leavecredit[".allSearchFields"][] = "personnelID";
	$tdatahris_leavecredit[".allSearchFields"][] = "leavetype";
	$tdatahris_leavecredit[".allSearchFields"][] = "datesubmitted";
	$tdatahris_leavecredit[".allSearchFields"][] = "inclusivedates";
	$tdatahris_leavecredit[".allSearchFields"][] = "fiscalyear";
	$tdatahris_leavecredit[".allSearchFields"][] = "credit";
	$tdatahris_leavecredit[".allSearchFields"][] = "debit";
	$tdatahris_leavecredit[".allSearchFields"][] = "notes";
	$tdatahris_leavecredit[".allSearchFields"][] = "approverID";
	$tdatahris_leavecredit[".allSearchFields"][] = "dateapproved";
	

$tdatahris_leavecredit[".googleLikeFields"] = array();
$tdatahris_leavecredit[".googleLikeFields"][] = "ID";
$tdatahris_leavecredit[".googleLikeFields"][] = "personnelID";
$tdatahris_leavecredit[".googleLikeFields"][] = "leavetype";
$tdatahris_leavecredit[".googleLikeFields"][] = "datesubmitted";
$tdatahris_leavecredit[".googleLikeFields"][] = "inclusivedates";
$tdatahris_leavecredit[".googleLikeFields"][] = "fiscalyear";
$tdatahris_leavecredit[".googleLikeFields"][] = "credit";
$tdatahris_leavecredit[".googleLikeFields"][] = "debit";
$tdatahris_leavecredit[".googleLikeFields"][] = "notes";
$tdatahris_leavecredit[".googleLikeFields"][] = "approverID";
$tdatahris_leavecredit[".googleLikeFields"][] = "dateapproved";


$tdatahris_leavecredit[".advSearchFields"] = array();
$tdatahris_leavecredit[".advSearchFields"][] = "ID";
$tdatahris_leavecredit[".advSearchFields"][] = "personnelID";
$tdatahris_leavecredit[".advSearchFields"][] = "leavetype";
$tdatahris_leavecredit[".advSearchFields"][] = "datesubmitted";
$tdatahris_leavecredit[".advSearchFields"][] = "inclusivedates";
$tdatahris_leavecredit[".advSearchFields"][] = "fiscalyear";
$tdatahris_leavecredit[".advSearchFields"][] = "credit";
$tdatahris_leavecredit[".advSearchFields"][] = "debit";
$tdatahris_leavecredit[".advSearchFields"][] = "notes";
$tdatahris_leavecredit[".advSearchFields"][] = "approverID";
$tdatahris_leavecredit[".advSearchFields"][] = "dateapproved";

$tdatahris_leavecredit[".tableType"] = "list";

$tdatahris_leavecredit[".printerPageOrientation"] = 0;
$tdatahris_leavecredit[".nPrinterPageScale"] = 100;

$tdatahris_leavecredit[".nPrinterSplitRecords"] = 40;

$tdatahris_leavecredit[".nPrinterPDFSplitRecords"] = 40;



$tdatahris_leavecredit[".geocodingEnabled"] = false;





$tdatahris_leavecredit[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahris_leavecredit[".pageSize"] = 20;

$tdatahris_leavecredit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_leavecredit[".strOrderBy"] = $tstrOrderBy;

$tdatahris_leavecredit[".orderindexes"] = array();

$tdatahris_leavecredit[".sqlHead"] = "SELECT ID,  	personnelID,  	leavetype,  	datesubmitted,  	inclusivedates,  	fiscalyear,  	credit,  	debit,  	notes,  	approverID,  	dateapproved";
$tdatahris_leavecredit[".sqlFrom"] = "FROM hris_leavecredit";
$tdatahris_leavecredit[".sqlWhereExpr"] = "";
$tdatahris_leavecredit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_leavecredit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_leavecredit[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_leavecredit[".highlightSearchResults"] = true;

$tableKeyshris_leavecredit = array();
$tableKeyshris_leavecredit[] = "ID";
$tdatahris_leavecredit[".Keys"] = $tableKeyshris_leavecredit;

$tdatahris_leavecredit[".listFields"] = array();
$tdatahris_leavecredit[".listFields"][] = "ID";
$tdatahris_leavecredit[".listFields"][] = "personnelID";
$tdatahris_leavecredit[".listFields"][] = "leavetype";
$tdatahris_leavecredit[".listFields"][] = "datesubmitted";
$tdatahris_leavecredit[".listFields"][] = "inclusivedates";
$tdatahris_leavecredit[".listFields"][] = "fiscalyear";
$tdatahris_leavecredit[".listFields"][] = "credit";
$tdatahris_leavecredit[".listFields"][] = "debit";
$tdatahris_leavecredit[".listFields"][] = "notes";
$tdatahris_leavecredit[".listFields"][] = "approverID";
$tdatahris_leavecredit[".listFields"][] = "dateapproved";

$tdatahris_leavecredit[".hideMobileList"] = array();


$tdatahris_leavecredit[".viewFields"] = array();
$tdatahris_leavecredit[".viewFields"][] = "ID";
$tdatahris_leavecredit[".viewFields"][] = "personnelID";
$tdatahris_leavecredit[".viewFields"][] = "leavetype";
$tdatahris_leavecredit[".viewFields"][] = "datesubmitted";
$tdatahris_leavecredit[".viewFields"][] = "inclusivedates";
$tdatahris_leavecredit[".viewFields"][] = "fiscalyear";
$tdatahris_leavecredit[".viewFields"][] = "credit";
$tdatahris_leavecredit[".viewFields"][] = "debit";
$tdatahris_leavecredit[".viewFields"][] = "notes";
$tdatahris_leavecredit[".viewFields"][] = "approverID";
$tdatahris_leavecredit[".viewFields"][] = "dateapproved";

$tdatahris_leavecredit[".addFields"] = array();
$tdatahris_leavecredit[".addFields"][] = "personnelID";
$tdatahris_leavecredit[".addFields"][] = "leavetype";
$tdatahris_leavecredit[".addFields"][] = "datesubmitted";
$tdatahris_leavecredit[".addFields"][] = "inclusivedates";
$tdatahris_leavecredit[".addFields"][] = "fiscalyear";
$tdatahris_leavecredit[".addFields"][] = "credit";
$tdatahris_leavecredit[".addFields"][] = "debit";
$tdatahris_leavecredit[".addFields"][] = "notes";
$tdatahris_leavecredit[".addFields"][] = "approverID";
$tdatahris_leavecredit[".addFields"][] = "dateapproved";

$tdatahris_leavecredit[".masterListFields"] = array();
$tdatahris_leavecredit[".masterListFields"][] = "ID";
$tdatahris_leavecredit[".masterListFields"][] = "personnelID";
$tdatahris_leavecredit[".masterListFields"][] = "leavetype";
$tdatahris_leavecredit[".masterListFields"][] = "datesubmitted";
$tdatahris_leavecredit[".masterListFields"][] = "inclusivedates";
$tdatahris_leavecredit[".masterListFields"][] = "fiscalyear";
$tdatahris_leavecredit[".masterListFields"][] = "credit";
$tdatahris_leavecredit[".masterListFields"][] = "debit";
$tdatahris_leavecredit[".masterListFields"][] = "notes";
$tdatahris_leavecredit[".masterListFields"][] = "approverID";
$tdatahris_leavecredit[".masterListFields"][] = "dateapproved";

$tdatahris_leavecredit[".inlineAddFields"] = array();

$tdatahris_leavecredit[".editFields"] = array();
$tdatahris_leavecredit[".editFields"][] = "personnelID";
$tdatahris_leavecredit[".editFields"][] = "leavetype";
$tdatahris_leavecredit[".editFields"][] = "datesubmitted";
$tdatahris_leavecredit[".editFields"][] = "inclusivedates";
$tdatahris_leavecredit[".editFields"][] = "fiscalyear";
$tdatahris_leavecredit[".editFields"][] = "credit";
$tdatahris_leavecredit[".editFields"][] = "debit";
$tdatahris_leavecredit[".editFields"][] = "notes";
$tdatahris_leavecredit[".editFields"][] = "approverID";
$tdatahris_leavecredit[".editFields"][] = "dateapproved";

$tdatahris_leavecredit[".inlineEditFields"] = array();

$tdatahris_leavecredit[".exportFields"] = array();
$tdatahris_leavecredit[".exportFields"][] = "ID";
$tdatahris_leavecredit[".exportFields"][] = "personnelID";
$tdatahris_leavecredit[".exportFields"][] = "leavetype";
$tdatahris_leavecredit[".exportFields"][] = "datesubmitted";
$tdatahris_leavecredit[".exportFields"][] = "inclusivedates";
$tdatahris_leavecredit[".exportFields"][] = "fiscalyear";
$tdatahris_leavecredit[".exportFields"][] = "credit";
$tdatahris_leavecredit[".exportFields"][] = "debit";
$tdatahris_leavecredit[".exportFields"][] = "notes";
$tdatahris_leavecredit[".exportFields"][] = "approverID";
$tdatahris_leavecredit[".exportFields"][] = "dateapproved";

$tdatahris_leavecredit[".importFields"] = array();
$tdatahris_leavecredit[".importFields"][] = "ID";
$tdatahris_leavecredit[".importFields"][] = "personnelID";
$tdatahris_leavecredit[".importFields"][] = "leavetype";
$tdatahris_leavecredit[".importFields"][] = "datesubmitted";
$tdatahris_leavecredit[".importFields"][] = "inclusivedates";
$tdatahris_leavecredit[".importFields"][] = "fiscalyear";
$tdatahris_leavecredit[".importFields"][] = "credit";
$tdatahris_leavecredit[".importFields"][] = "debit";
$tdatahris_leavecredit[".importFields"][] = "notes";
$tdatahris_leavecredit[".importFields"][] = "approverID";
$tdatahris_leavecredit[".importFields"][] = "dateapproved";

$tdatahris_leavecredit[".printFields"] = array();
$tdatahris_leavecredit[".printFields"][] = "ID";
$tdatahris_leavecredit[".printFields"][] = "personnelID";
$tdatahris_leavecredit[".printFields"][] = "leavetype";
$tdatahris_leavecredit[".printFields"][] = "datesubmitted";
$tdatahris_leavecredit[".printFields"][] = "inclusivedates";
$tdatahris_leavecredit[".printFields"][] = "fiscalyear";
$tdatahris_leavecredit[".printFields"][] = "credit";
$tdatahris_leavecredit[".printFields"][] = "debit";
$tdatahris_leavecredit[".printFields"][] = "notes";
$tdatahris_leavecredit[".printFields"][] = "approverID";
$tdatahris_leavecredit[".printFields"][] = "dateapproved";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","ID");
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




	$tdatahris_leavecredit["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","personnelID");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavecredit["personnelID"] = $fdata;
//	leavetype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "leavetype";
	$fdata["GoodName"] = "leavetype";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","leavetype");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "leavetype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavetype";

	
	
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




	$tdatahris_leavecredit["leavetype"] = $fdata;
//	datesubmitted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "datesubmitted";
	$fdata["GoodName"] = "datesubmitted";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","datesubmitted");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "datesubmitted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datesubmitted";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatahris_leavecredit["datesubmitted"] = $fdata;
//	inclusivedates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclusivedates";
	$fdata["GoodName"] = "inclusivedates";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","inclusivedates");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inclusivedates";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inclusivedates";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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




	$tdatahris_leavecredit["inclusivedates"] = $fdata;
//	fiscalyear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fiscalyear";
	$fdata["GoodName"] = "fiscalyear";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","fiscalyear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fiscalyear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fiscalyear";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahris_leavecredit["fiscalyear"] = $fdata;
//	credit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "credit";
	$fdata["GoodName"] = "credit";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","credit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "credit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "credit";

	
	
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




	$tdatahris_leavecredit["credit"] = $fdata;
//	debit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "debit";
	$fdata["GoodName"] = "debit";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","debit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "debit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "debit";

	
	
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




	$tdatahris_leavecredit["debit"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","notes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

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




	$tdatahris_leavecredit["notes"] = $fdata;
//	approverID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approverID";
	$fdata["GoodName"] = "approverID";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","approverID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "approverID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approverID";

	
	
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




	$tdatahris_leavecredit["approverID"] = $fdata;
//	dateapproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dateapproved";
	$fdata["GoodName"] = "dateapproved";
	$fdata["ownerTable"] = "hris_leavecredit";
	$fdata["Label"] = GetFieldLabel("hris_leavecredit","dateapproved");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateapproved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateapproved";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatahris_leavecredit["dateapproved"] = $fdata;


$tables_data["hris_leavecredit"]=&$tdatahris_leavecredit;
$field_labels["hris_leavecredit"] = &$fieldLabelshris_leavecredit;
$fieldToolTips["hris_leavecredit"] = &$fieldToolTipshris_leavecredit;
$page_titles["hris_leavecredit"] = &$pageTitleshris_leavecredit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_leavecredit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hris_leavecredit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_leavecredit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	personnelID,  	leavetype,  	datesubmitted,  	inclusivedates,  	fiscalyear,  	credit,  	debit,  	notes,  	approverID,  	dateapproved";
$proto0["m_strFrom"] = "FROM hris_leavecredit";
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
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "hris_leavecredit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto8["m_sql"] = "personnelID";
$proto8["m_srcTableName"] = "hris_leavecredit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "leavetype",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto10["m_sql"] = "leavetype";
$proto10["m_srcTableName"] = "hris_leavecredit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "datesubmitted",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto12["m_sql"] = "datesubmitted";
$proto12["m_srcTableName"] = "hris_leavecredit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclusivedates",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto14["m_sql"] = "inclusivedates";
$proto14["m_srcTableName"] = "hris_leavecredit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fiscalyear",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto16["m_sql"] = "fiscalyear";
$proto16["m_srcTableName"] = "hris_leavecredit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "credit",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto18["m_sql"] = "credit";
$proto18["m_srcTableName"] = "hris_leavecredit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "debit",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto20["m_sql"] = "debit";
$proto20["m_srcTableName"] = "hris_leavecredit";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto22["m_sql"] = "notes";
$proto22["m_srcTableName"] = "hris_leavecredit";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approverID",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto24["m_sql"] = "approverID";
$proto24["m_srcTableName"] = "hris_leavecredit";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "dateapproved",
	"m_strTable" => "hris_leavecredit",
	"m_srcTableName" => "hris_leavecredit"
));

$proto26["m_sql"] = "dateapproved";
$proto26["m_srcTableName"] = "hris_leavecredit";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "hris_leavecredit";
$proto29["m_srcTableName"] = "hris_leavecredit";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "personnelID";
$proto29["m_columns"][] = "leavetype";
$proto29["m_columns"][] = "datesubmitted";
$proto29["m_columns"][] = "inclusivedates";
$proto29["m_columns"][] = "fiscalyear";
$proto29["m_columns"][] = "credit";
$proto29["m_columns"][] = "debit";
$proto29["m_columns"][] = "notes";
$proto29["m_columns"][] = "approverID";
$proto29["m_columns"][] = "dateapproved";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "hris_leavecredit";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "hris_leavecredit";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_leavecredit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_leavecredit = createSqlQuery_hris_leavecredit();


	
		;

											

$tdatahris_leavecredit[".sqlquery"] = $queryData_hris_leavecredit;

$tableEvents["hris_leavecredit"] = new eventsBase;
$tdatahris_leavecredit[".hasEvents"] = false;

?>