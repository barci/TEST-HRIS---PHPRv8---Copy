<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_journey = array();	
	$tdatahris_journey[".truncateText"] = true;
	$tdatahris_journey[".NumberOfChars"] = 80; 
	$tdatahris_journey[".ShortName"] = "hris_journey";
	$tdatahris_journey[".OwnerID"] = "";
	$tdatahris_journey[".OriginalTable"] = "hris_journey";

//	field labels
$fieldLabelshris_journey = array();
$fieldToolTipshris_journey = array();
$pageTitleshris_journey = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_journey["English"] = array();
	$fieldToolTipshris_journey["English"] = array();
	$pageTitleshris_journey["English"] = array();
	$fieldLabelshris_journey["English"]["ID"] = "ID";
	$fieldToolTipshris_journey["English"]["ID"] = "";
	$fieldLabelshris_journey["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_journey["English"]["personnelID"] = "";
	$fieldLabelshris_journey["English"]["memoType"] = "Memo Type";
	$fieldToolTipshris_journey["English"]["memoType"] = "";
	$fieldLabelshris_journey["English"]["dateIssued"] = "Date Issued";
	$fieldToolTipshris_journey["English"]["dateIssued"] = "";
	$fieldLabelshris_journey["English"]["validity"] = "Validity";
	$fieldToolTipshris_journey["English"]["validity"] = "";
	$fieldLabelshris_journey["English"]["title"] = "Title";
	$fieldToolTipshris_journey["English"]["title"] = "";
	$fieldLabelshris_journey["English"]["file"] = "File";
	$fieldToolTipshris_journey["English"]["file"] = "";
	if (count($fieldToolTipshris_journey["English"]))
		$tdatahris_journey[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_journey[""] = array();
	$fieldToolTipshris_journey[""] = array();
	$pageTitleshris_journey[""] = array();
	$fieldLabelshris_journey[""]["ID"] = "ID";
	$fieldToolTipshris_journey[""]["ID"] = "";
	$fieldLabelshris_journey[""]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_journey[""]["personnelID"] = "";
	$fieldLabelshris_journey[""]["memoType"] = "Memo Type";
	$fieldToolTipshris_journey[""]["memoType"] = "";
	$fieldLabelshris_journey[""]["dateIssued"] = "Date Issued";
	$fieldToolTipshris_journey[""]["dateIssued"] = "";
	$fieldLabelshris_journey[""]["validity"] = "Validity";
	$fieldToolTipshris_journey[""]["validity"] = "";
	$fieldLabelshris_journey[""]["title"] = "Title";
	$fieldToolTipshris_journey[""]["title"] = "";
	$fieldLabelshris_journey[""]["file"] = "File";
	$fieldToolTipshris_journey[""]["file"] = "";
	if (count($fieldToolTipshris_journey[""]))
		$tdatahris_journey[".isUseToolTips"] = true;
}
	
	
	$tdatahris_journey[".NCSearch"] = true;



$tdatahris_journey[".shortTableName"] = "hris_journey";
$tdatahris_journey[".nSecOptions"] = 0;
$tdatahris_journey[".recsPerRowList"] = 1;
$tdatahris_journey[".mainTableOwnerID"] = "";
$tdatahris_journey[".moveNext"] = 1;
$tdatahris_journey[".nType"] = 0;

$tdatahris_journey[".strOriginalTableName"] = "hris_journey";




$tdatahris_journey[".showAddInPopup"] = false;

$tdatahris_journey[".showEditInPopup"] = false;

$tdatahris_journey[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_journey[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_journey[".fieldsForRegister"] = array();

$tdatahris_journey[".listAjax"] = false;

	$tdatahris_journey[".audit"] = false;

	$tdatahris_journey[".locking"] = false;

$tdatahris_journey[".edit"] = true;

$tdatahris_journey[".list"] = true;

$tdatahris_journey[".inlineEdit"] = true;
$tdatahris_journey[".inlineAdd"] = true;
$tdatahris_journey[".view"] = true;

$tdatahris_journey[".import"] = true;

$tdatahris_journey[".exportTo"] = true;

$tdatahris_journey[".printFriendly"] = true;

$tdatahris_journey[".delete"] = true;

$tdatahris_journey[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_journey[".searchSaving"] = false;
//

$tdatahris_journey[".showSearchPanel"] = true;
		$tdatahris_journey[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_journey[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_journey[".isUseAjaxSuggest"] = true;

$tdatahris_journey[".rowHighlite"] = true;



$tdatahris_journey[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_journey[".isUseTimeForSearch"] = false;





$tdatahris_journey[".allSearchFields"] = array();
$tdatahris_journey[".filterFields"] = array();
$tdatahris_journey[".requiredSearchFields"] = array();

$tdatahris_journey[".allSearchFields"][] = "ID";
	$tdatahris_journey[".allSearchFields"][] = "personnelID";
	$tdatahris_journey[".allSearchFields"][] = "memoType";
	$tdatahris_journey[".allSearchFields"][] = "dateIssued";
	$tdatahris_journey[".allSearchFields"][] = "validity";
	$tdatahris_journey[".allSearchFields"][] = "title";
	$tdatahris_journey[".allSearchFields"][] = "file";
	

$tdatahris_journey[".googleLikeFields"] = array();
$tdatahris_journey[".googleLikeFields"][] = "ID";
$tdatahris_journey[".googleLikeFields"][] = "personnelID";
$tdatahris_journey[".googleLikeFields"][] = "memoType";
$tdatahris_journey[".googleLikeFields"][] = "dateIssued";
$tdatahris_journey[".googleLikeFields"][] = "validity";
$tdatahris_journey[".googleLikeFields"][] = "title";
$tdatahris_journey[".googleLikeFields"][] = "file";


$tdatahris_journey[".advSearchFields"] = array();
$tdatahris_journey[".advSearchFields"][] = "ID";
$tdatahris_journey[".advSearchFields"][] = "personnelID";
$tdatahris_journey[".advSearchFields"][] = "memoType";
$tdatahris_journey[".advSearchFields"][] = "dateIssued";
$tdatahris_journey[".advSearchFields"][] = "validity";
$tdatahris_journey[".advSearchFields"][] = "title";
$tdatahris_journey[".advSearchFields"][] = "file";

$tdatahris_journey[".tableType"] = "list";

$tdatahris_journey[".printerPageOrientation"] = 0;
$tdatahris_journey[".nPrinterPageScale"] = 100;

$tdatahris_journey[".nPrinterSplitRecords"] = 40;

$tdatahris_journey[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_journey[".pageSize"] = 20;

$tdatahris_journey[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dateIssued DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_journey[".strOrderBy"] = $tstrOrderBy;

$tdatahris_journey[".orderindexes"] = array();
$tdatahris_journey[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "dateIssued");

$tdatahris_journey[".sqlHead"] = "SELECT ID,  personnelID,  memoType,  dateIssued,  validity,  title,  `file`";
$tdatahris_journey[".sqlFrom"] = "FROM hris_journey";
$tdatahris_journey[".sqlWhereExpr"] = "";
$tdatahris_journey[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_journey[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_journey[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_journey[".highlightSearchResults"] = true;

$tableKeyshris_journey = array();
$tableKeyshris_journey[] = "ID";
$tdatahris_journey[".Keys"] = $tableKeyshris_journey;

$tdatahris_journey[".listFields"] = array();
$tdatahris_journey[".listFields"][] = "ID";
$tdatahris_journey[".listFields"][] = "personnelID";
$tdatahris_journey[".listFields"][] = "memoType";
$tdatahris_journey[".listFields"][] = "dateIssued";
$tdatahris_journey[".listFields"][] = "validity";
$tdatahris_journey[".listFields"][] = "title";
$tdatahris_journey[".listFields"][] = "file";

$tdatahris_journey[".hideMobileList"] = array();


$tdatahris_journey[".viewFields"] = array();
$tdatahris_journey[".viewFields"][] = "ID";
$tdatahris_journey[".viewFields"][] = "personnelID";
$tdatahris_journey[".viewFields"][] = "memoType";
$tdatahris_journey[".viewFields"][] = "dateIssued";
$tdatahris_journey[".viewFields"][] = "validity";
$tdatahris_journey[".viewFields"][] = "title";
$tdatahris_journey[".viewFields"][] = "file";

$tdatahris_journey[".addFields"] = array();
$tdatahris_journey[".addFields"][] = "personnelID";
$tdatahris_journey[".addFields"][] = "memoType";
$tdatahris_journey[".addFields"][] = "dateIssued";
$tdatahris_journey[".addFields"][] = "validity";
$tdatahris_journey[".addFields"][] = "title";
$tdatahris_journey[".addFields"][] = "file";

$tdatahris_journey[".inlineAddFields"] = array();
$tdatahris_journey[".inlineAddFields"][] = "personnelID";
$tdatahris_journey[".inlineAddFields"][] = "memoType";
$tdatahris_journey[".inlineAddFields"][] = "dateIssued";
$tdatahris_journey[".inlineAddFields"][] = "validity";
$tdatahris_journey[".inlineAddFields"][] = "title";
$tdatahris_journey[".inlineAddFields"][] = "file";

$tdatahris_journey[".editFields"] = array();
$tdatahris_journey[".editFields"][] = "personnelID";
$tdatahris_journey[".editFields"][] = "memoType";
$tdatahris_journey[".editFields"][] = "dateIssued";
$tdatahris_journey[".editFields"][] = "validity";
$tdatahris_journey[".editFields"][] = "title";
$tdatahris_journey[".editFields"][] = "file";

$tdatahris_journey[".inlineEditFields"] = array();
$tdatahris_journey[".inlineEditFields"][] = "personnelID";
$tdatahris_journey[".inlineEditFields"][] = "memoType";
$tdatahris_journey[".inlineEditFields"][] = "dateIssued";
$tdatahris_journey[".inlineEditFields"][] = "validity";
$tdatahris_journey[".inlineEditFields"][] = "title";
$tdatahris_journey[".inlineEditFields"][] = "file";

$tdatahris_journey[".exportFields"] = array();
$tdatahris_journey[".exportFields"][] = "ID";
$tdatahris_journey[".exportFields"][] = "personnelID";
$tdatahris_journey[".exportFields"][] = "memoType";
$tdatahris_journey[".exportFields"][] = "dateIssued";
$tdatahris_journey[".exportFields"][] = "validity";
$tdatahris_journey[".exportFields"][] = "title";
$tdatahris_journey[".exportFields"][] = "file";

$tdatahris_journey[".importFields"] = array();
$tdatahris_journey[".importFields"][] = "ID";
$tdatahris_journey[".importFields"][] = "personnelID";
$tdatahris_journey[".importFields"][] = "memoType";
$tdatahris_journey[".importFields"][] = "dateIssued";
$tdatahris_journey[".importFields"][] = "validity";
$tdatahris_journey[".importFields"][] = "title";
$tdatahris_journey[".importFields"][] = "file";

$tdatahris_journey[".printFields"] = array();
$tdatahris_journey[".printFields"][] = "ID";
$tdatahris_journey[".printFields"][] = "personnelID";
$tdatahris_journey[".printFields"][] = "memoType";
$tdatahris_journey[".printFields"][] = "dateIssued";
$tdatahris_journey[".printFields"][] = "validity";
$tdatahris_journey[".printFields"][] = "title";
$tdatahris_journey[".printFields"][] = "file";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","ID"); 
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

	

	
	$tdatahris_journey["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","personnelID"); 
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

	

	
	$tdatahris_journey["personnelID"] = $fdata;
//	memoType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "memoType";
	$fdata["GoodName"] = "memoType";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","memoType"); 
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
	
		$fdata["strField"] = "memoType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "memoType";
	
		
		
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
	$edata["LookupValues"][] = "Appointment";
	$edata["LookupValues"][] = "Promotions";
	$edata["LookupValues"][] = "Shift in Rank";
	$edata["LookupValues"][] = "Transfer";
	$edata["LookupValues"][] = "Disciplinary";

		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatahris_journey["memoType"] = $fdata;
//	dateIssued
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dateIssued";
	$fdata["GoodName"] = "dateIssued";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","dateIssued"); 
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
	
		$fdata["strField"] = "dateIssued"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateIssued";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Long Date");
	
		
		
		
		
		
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_journey["dateIssued"] = $fdata;
//	validity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "validity";
	$fdata["GoodName"] = "validity";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","validity"); 
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
	
		$fdata["strField"] = "validity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validity";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Long Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_journey["validity"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","title"); 
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
	
		$fdata["strField"] = "title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";
	
		
		
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

	

	
	$tdatahris_journey["title"] = $fdata;
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "hris_journey";
	$fdata["Label"] = GetFieldLabel("hris_journey","file"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`file`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
						$vdata["ShowFileSize"] = true; 
			$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatahris_journey["file"] = $fdata;

	
$tables_data["hris_journey"]=&$tdatahris_journey;
$field_labels["hris_journey"] = &$fieldLabelshris_journey;
$fieldToolTips["hris_journey"] = &$fieldToolTipshris_journey;
$page_titles["hris_journey"] = &$pageTitleshris_journey;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_journey"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_journey"] = array();


	
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
					$masterTablesData["hris_journey"][0] = $masterParams;	
				$masterTablesData["hris_journey"][0]["masterKeys"] = array();
	$masterTablesData["hris_journey"][0]["masterKeys"][]="ID";
				$masterTablesData["hris_journey"][0]["detailKeys"] = array();
	$masterTablesData["hris_journey"][0]["detailKeys"][]="personnelID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_journey()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  personnelID,  memoType,  dateIssued,  validity,  title,  `file`";
$proto0["m_strFrom"] = "FROM hris_journey";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dateIssued DESC";
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
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_journey";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto7["m_sql"] = "personnelID";
$proto7["m_srcTableName"] = "hris_journey";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "memoType",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto9["m_sql"] = "memoType";
$proto9["m_srcTableName"] = "hris_journey";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dateIssued",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto11["m_sql"] = "dateIssued";
$proto11["m_srcTableName"] = "hris_journey";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "validity",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto13["m_sql"] = "validity";
$proto13["m_srcTableName"] = "hris_journey";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto15["m_sql"] = "title";
$proto15["m_srcTableName"] = "hris_journey";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto17["m_sql"] = "`file`";
$proto17["m_srcTableName"] = "hris_journey";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hris_journey";
$proto20["m_srcTableName"] = "hris_journey";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "personnelID";
$proto20["m_columns"][] = "memoType";
$proto20["m_columns"][] = "dateIssued";
$proto20["m_columns"][] = "validity";
$proto20["m_columns"][] = "title";
$proto20["m_columns"][] = "file";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "hris_journey";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "hris_journey";
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
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "dateIssued",
	"m_strTable" => "hris_journey",
	"m_srcTableName" => "hris_journey"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 0;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hris_journey";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_journey = createSqlQuery_hris_journey();


	
							
	
$tdatahris_journey[".sqlquery"] = $queryData_hris_journey;

$tableEvents["hris_journey"] = new eventsBase;
$tdatahris_journey[".hasEvents"] = false;

?>