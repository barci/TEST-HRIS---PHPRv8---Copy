<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_tito = array();	
	$tdatahris_tito[".truncateText"] = true;
	$tdatahris_tito[".NumberOfChars"] = 80; 
	$tdatahris_tito[".ShortName"] = "hris_tito";
	$tdatahris_tito[".OwnerID"] = "";
	$tdatahris_tito[".OriginalTable"] = "hris_tito";

//	field labels
$fieldLabelshris_tito = array();
$fieldToolTipshris_tito = array();
$pageTitleshris_tito = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_tito["English"] = array();
	$fieldToolTipshris_tito["English"] = array();
	$pageTitleshris_tito["English"] = array();
	$fieldLabelshris_tito["English"]["ID"] = "ID";
	$fieldToolTipshris_tito["English"]["ID"] = "";
	$fieldLabelshris_tito["English"]["personnelID"] = "Personnel ID";
	$fieldToolTipshris_tito["English"]["personnelID"] = "";
	$fieldLabelshris_tito["English"]["TimeIn"] = "Time In";
	$fieldToolTipshris_tito["English"]["TimeIn"] = "";
	$fieldLabelshris_tito["English"]["TimeOut"] = "Time Out";
	$fieldToolTipshris_tito["English"]["TimeOut"] = "";
	$fieldLabelshris_tito["English"]["IPin"] = "IPin";
	$fieldToolTipshris_tito["English"]["IPin"] = "";
	$fieldLabelshris_tito["English"]["IPout"] = "IPout";
	$fieldToolTipshris_tito["English"]["IPout"] = "";
	$fieldLabelshris_tito["English"]["TotalHours"] = "Total Hours";
	$fieldToolTipshris_tito["English"]["TotalHours"] = "";
	$fieldLabelshris_tito["English"]["CheckedBy"] = "Checked By";
	$fieldToolTipshris_tito["English"]["CheckedBy"] = "";
	$fieldLabelshris_tito["English"]["department"] = "Department";
	$fieldToolTipshris_tito["English"]["department"] = "";
	$fieldLabelshris_tito["English"]["unit"] = "Unit";
	$fieldToolTipshris_tito["English"]["unit"] = "";
	$fieldLabelshris_tito["English"]["jobtitle"] = "Jobtitle";
	$fieldToolTipshris_tito["English"]["jobtitle"] = "";
	if (count($fieldToolTipshris_tito["English"]))
		$tdatahris_tito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_tito[""] = array();
	$fieldToolTipshris_tito[""] = array();
	$pageTitleshris_tito[""] = array();
	$fieldLabelshris_tito[""]["ID"] = "ID";
	$fieldToolTipshris_tito[""]["ID"] = "";
	if (count($fieldToolTipshris_tito[""]))
		$tdatahris_tito[".isUseToolTips"] = true;
}
	
	
	$tdatahris_tito[".NCSearch"] = true;



$tdatahris_tito[".shortTableName"] = "hris_tito";
$tdatahris_tito[".nSecOptions"] = 0;
$tdatahris_tito[".recsPerRowList"] = 1;
$tdatahris_tito[".mainTableOwnerID"] = "";
$tdatahris_tito[".moveNext"] = 1;
$tdatahris_tito[".nType"] = 0;

$tdatahris_tito[".strOriginalTableName"] = "hris_tito";




$tdatahris_tito[".showAddInPopup"] = false;

$tdatahris_tito[".showEditInPopup"] = false;

$tdatahris_tito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_tito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_tito[".fieldsForRegister"] = array();

$tdatahris_tito[".listAjax"] = false;

	$tdatahris_tito[".audit"] = false;

	$tdatahris_tito[".locking"] = false;

$tdatahris_tito[".edit"] = true;

$tdatahris_tito[".list"] = true;

$tdatahris_tito[".view"] = true;

$tdatahris_tito[".import"] = true;

$tdatahris_tito[".exportTo"] = true;

$tdatahris_tito[".printFriendly"] = true;

$tdatahris_tito[".delete"] = true;

$tdatahris_tito[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_tito[".searchSaving"] = false;
//

$tdatahris_tito[".showSearchPanel"] = true;
		$tdatahris_tito[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_tito[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_tito[".isUseAjaxSuggest"] = true;

$tdatahris_tito[".rowHighlite"] = true;



$tdatahris_tito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_tito[".isUseTimeForSearch"] = false;





$tdatahris_tito[".allSearchFields"] = array();
$tdatahris_tito[".filterFields"] = array();
$tdatahris_tito[".requiredSearchFields"] = array();

$tdatahris_tito[".allSearchFields"][] = "ID";
	$tdatahris_tito[".allSearchFields"][] = "personnelID";
	$tdatahris_tito[".allSearchFields"][] = "department";
	$tdatahris_tito[".allSearchFields"][] = "unit";
	$tdatahris_tito[".allSearchFields"][] = "jobtitle";
	$tdatahris_tito[".allSearchFields"][] = "TimeIn";
	$tdatahris_tito[".allSearchFields"][] = "TimeOut";
	$tdatahris_tito[".allSearchFields"][] = "IPin";
	$tdatahris_tito[".allSearchFields"][] = "IPout";
	$tdatahris_tito[".allSearchFields"][] = "TotalHours";
	$tdatahris_tito[".allSearchFields"][] = "CheckedBy";
	
$tdatahris_tito[".filterFields"][] = "department";	
$tdatahris_tito[".filterFields"][] = "unit";	
$tdatahris_tito[".filterFields"][] = "jobtitle";	

$tdatahris_tito[".googleLikeFields"] = array();
$tdatahris_tito[".googleLikeFields"][] = "ID";
$tdatahris_tito[".googleLikeFields"][] = "personnelID";
$tdatahris_tito[".googleLikeFields"][] = "department";
$tdatahris_tito[".googleLikeFields"][] = "unit";
$tdatahris_tito[".googleLikeFields"][] = "jobtitle";
$tdatahris_tito[".googleLikeFields"][] = "TimeIn";
$tdatahris_tito[".googleLikeFields"][] = "TimeOut";
$tdatahris_tito[".googleLikeFields"][] = "IPin";
$tdatahris_tito[".googleLikeFields"][] = "IPout";
$tdatahris_tito[".googleLikeFields"][] = "TotalHours";
$tdatahris_tito[".googleLikeFields"][] = "CheckedBy";


$tdatahris_tito[".advSearchFields"] = array();
$tdatahris_tito[".advSearchFields"][] = "ID";
$tdatahris_tito[".advSearchFields"][] = "personnelID";
$tdatahris_tito[".advSearchFields"][] = "department";
$tdatahris_tito[".advSearchFields"][] = "unit";
$tdatahris_tito[".advSearchFields"][] = "jobtitle";
$tdatahris_tito[".advSearchFields"][] = "TimeIn";
$tdatahris_tito[".advSearchFields"][] = "TimeOut";
$tdatahris_tito[".advSearchFields"][] = "IPin";
$tdatahris_tito[".advSearchFields"][] = "IPout";
$tdatahris_tito[".advSearchFields"][] = "TotalHours";
$tdatahris_tito[".advSearchFields"][] = "CheckedBy";

$tdatahris_tito[".tableType"] = "list";

$tdatahris_tito[".printerPageOrientation"] = 0;
$tdatahris_tito[".nPrinterPageScale"] = 100;

$tdatahris_tito[".nPrinterSplitRecords"] = 40;

$tdatahris_tito[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_tito[".pageSize"] = 20;

$tdatahris_tito[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_tito[".strOrderBy"] = $tstrOrderBy;

$tdatahris_tito[".orderindexes"] = array();

$tdatahris_tito[".sqlHead"] = "SELECT hris_tito.ID,  hris_tito.personnelID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_tito.TimeIn,  hris_tito.TimeOut,  hris_tito.IPin,  hris_tito.IPout,  hris_tito.TotalHours,  hris_tito.CheckedBy";
$tdatahris_tito[".sqlFrom"] = "FROM hris_tito  , hris_job";
$tdatahris_tito[".sqlWhereExpr"] = "hris_tito.personnelID =hris_job.personnelID";
$tdatahris_tito[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_tito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_tito[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_tito[".highlightSearchResults"] = true;

$tableKeyshris_tito = array();
$tableKeyshris_tito[] = "ID";
$tdatahris_tito[".Keys"] = $tableKeyshris_tito;

$tdatahris_tito[".listFields"] = array();
$tdatahris_tito[".listFields"][] = "ID";
$tdatahris_tito[".listFields"][] = "personnelID";
$tdatahris_tito[".listFields"][] = "department";
$tdatahris_tito[".listFields"][] = "unit";
$tdatahris_tito[".listFields"][] = "jobtitle";
$tdatahris_tito[".listFields"][] = "TimeIn";
$tdatahris_tito[".listFields"][] = "TimeOut";
$tdatahris_tito[".listFields"][] = "IPin";
$tdatahris_tito[".listFields"][] = "IPout";
$tdatahris_tito[".listFields"][] = "TotalHours";
$tdatahris_tito[".listFields"][] = "CheckedBy";

$tdatahris_tito[".hideMobileList"] = array();


$tdatahris_tito[".viewFields"] = array();
$tdatahris_tito[".viewFields"][] = "ID";
$tdatahris_tito[".viewFields"][] = "personnelID";
$tdatahris_tito[".viewFields"][] = "department";
$tdatahris_tito[".viewFields"][] = "unit";
$tdatahris_tito[".viewFields"][] = "jobtitle";
$tdatahris_tito[".viewFields"][] = "TimeIn";
$tdatahris_tito[".viewFields"][] = "TimeOut";
$tdatahris_tito[".viewFields"][] = "IPin";
$tdatahris_tito[".viewFields"][] = "IPout";
$tdatahris_tito[".viewFields"][] = "TotalHours";
$tdatahris_tito[".viewFields"][] = "CheckedBy";

$tdatahris_tito[".addFields"] = array();
$tdatahris_tito[".addFields"][] = "personnelID";
$tdatahris_tito[".addFields"][] = "TimeIn";
$tdatahris_tito[".addFields"][] = "TimeOut";
$tdatahris_tito[".addFields"][] = "IPin";
$tdatahris_tito[".addFields"][] = "IPout";
$tdatahris_tito[".addFields"][] = "TotalHours";
$tdatahris_tito[".addFields"][] = "CheckedBy";

$tdatahris_tito[".inlineAddFields"] = array();

$tdatahris_tito[".editFields"] = array();
$tdatahris_tito[".editFields"][] = "personnelID";
$tdatahris_tito[".editFields"][] = "TimeIn";
$tdatahris_tito[".editFields"][] = "TimeOut";
$tdatahris_tito[".editFields"][] = "IPin";
$tdatahris_tito[".editFields"][] = "IPout";
$tdatahris_tito[".editFields"][] = "TotalHours";
$tdatahris_tito[".editFields"][] = "CheckedBy";

$tdatahris_tito[".inlineEditFields"] = array();

$tdatahris_tito[".exportFields"] = array();
$tdatahris_tito[".exportFields"][] = "ID";
$tdatahris_tito[".exportFields"][] = "personnelID";
$tdatahris_tito[".exportFields"][] = "department";
$tdatahris_tito[".exportFields"][] = "unit";
$tdatahris_tito[".exportFields"][] = "jobtitle";
$tdatahris_tito[".exportFields"][] = "TimeIn";
$tdatahris_tito[".exportFields"][] = "TimeOut";
$tdatahris_tito[".exportFields"][] = "IPin";
$tdatahris_tito[".exportFields"][] = "IPout";
$tdatahris_tito[".exportFields"][] = "TotalHours";
$tdatahris_tito[".exportFields"][] = "CheckedBy";

$tdatahris_tito[".importFields"] = array();
$tdatahris_tito[".importFields"][] = "ID";
$tdatahris_tito[".importFields"][] = "personnelID";
$tdatahris_tito[".importFields"][] = "department";
$tdatahris_tito[".importFields"][] = "unit";
$tdatahris_tito[".importFields"][] = "jobtitle";
$tdatahris_tito[".importFields"][] = "TimeIn";
$tdatahris_tito[".importFields"][] = "TimeOut";
$tdatahris_tito[".importFields"][] = "IPin";
$tdatahris_tito[".importFields"][] = "IPout";
$tdatahris_tito[".importFields"][] = "TotalHours";
$tdatahris_tito[".importFields"][] = "CheckedBy";

$tdatahris_tito[".printFields"] = array();
$tdatahris_tito[".printFields"][] = "ID";
$tdatahris_tito[".printFields"][] = "personnelID";
$tdatahris_tito[".printFields"][] = "department";
$tdatahris_tito[".printFields"][] = "unit";
$tdatahris_tito[".printFields"][] = "jobtitle";
$tdatahris_tito[".printFields"][] = "TimeIn";
$tdatahris_tito[".printFields"][] = "TimeOut";
$tdatahris_tito[".printFields"][] = "IPin";
$tdatahris_tito[".printFields"][] = "IPout";
$tdatahris_tito[".printFields"][] = "TotalHours";
$tdatahris_tito[".printFields"][] = "CheckedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.ID";
	
		
		
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

	

	
	$tdatahris_tito["ID"] = $fdata;
//	personnelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "personnelID";
	$fdata["GoodName"] = "personnelID";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","personnelID"); 
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
	$fdata["FullName"] = "hris_tito.personnelID";
	
		
		
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
		
		
			$edata["LookupUnique"] = true;
	
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

	

	
	$tdatahris_tito["personnelID"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_tito","department"); 
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

	
	$tdatahris_tito["department"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_tito","unit"); 
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

	
	$tdatahris_tito["unit"] = $fdata;
//	jobtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobtitle";
	$fdata["GoodName"] = "jobtitle";
	$fdata["ownerTable"] = "hris_job";
	$fdata["Label"] = GetFieldLabel("hris_tito","jobtitle"); 
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

	
	$tdatahris_tito["jobtitle"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","TimeIn"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TimeIn"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.TimeIn";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_tito["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","TimeOut"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TimeOut"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.TimeOut";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatahris_tito["TimeOut"] = $fdata;
//	IPin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "IPin";
	$fdata["GoodName"] = "IPin";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","IPin"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "IPin"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.IPin";
	
		
		
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

	

	
	$tdatahris_tito["IPin"] = $fdata;
//	IPout
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "IPout";
	$fdata["GoodName"] = "IPout";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","IPout"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "IPout"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.IPout";
	
		
		
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

	

	
	$tdatahris_tito["IPout"] = $fdata;
//	TotalHours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TotalHours";
	$fdata["GoodName"] = "TotalHours";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","TotalHours"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TotalHours"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.TotalHours";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
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

	

	
	$tdatahris_tito["TotalHours"] = $fdata;
//	CheckedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CheckedBy";
	$fdata["GoodName"] = "CheckedBy";
	$fdata["ownerTable"] = "hris_tito";
	$fdata["Label"] = GetFieldLabel("hris_tito","CheckedBy"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CheckedBy"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hris_tito.CheckedBy";
	
		
		
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

	

	
	$tdatahris_tito["CheckedBy"] = $fdata;

	
$tables_data["hris_tito"]=&$tdatahris_tito;
$field_labels["hris_tito"] = &$fieldLabelshris_tito;
$fieldToolTips["hris_tito"] = &$fieldToolTipshris_tito;
$page_titles["hris_tito"] = &$pageTitleshris_tito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_tito"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_tito"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_tito()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hris_tito.ID,  hris_tito.personnelID,  hris_job.department,  hris_job.unit,  hris_job.jobtitle,  hris_tito.TimeIn,  hris_tito.TimeOut,  hris_tito.IPin,  hris_tito.IPout,  hris_tito.TotalHours,  hris_tito.CheckedBy";
$proto0["m_strFrom"] = "FROM hris_tito  , hris_job";
$proto0["m_strWhere"] = "hris_tito.personnelID =hris_job.personnelID";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "hris_tito.personnelID =hris_job.personnelID";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=hris_job.personnelID";
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
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto5["m_sql"] = "hris_tito.ID";
$proto5["m_srcTableName"] = "hris_tito";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "personnelID",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto7["m_sql"] = "hris_tito.personnelID";
$proto7["m_srcTableName"] = "hris_tito";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_tito"
));

$proto9["m_sql"] = "hris_job.department";
$proto9["m_srcTableName"] = "hris_tito";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_tito"
));

$proto11["m_sql"] = "hris_job.unit";
$proto11["m_srcTableName"] = "hris_tito";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jobtitle",
	"m_strTable" => "hris_job",
	"m_srcTableName" => "hris_tito"
));

$proto13["m_sql"] = "hris_job.jobtitle";
$proto13["m_srcTableName"] = "hris_tito";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto15["m_sql"] = "hris_tito.TimeIn";
$proto15["m_srcTableName"] = "hris_tito";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto17["m_sql"] = "hris_tito.TimeOut";
$proto17["m_srcTableName"] = "hris_tito";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "IPin",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto19["m_sql"] = "hris_tito.IPin";
$proto19["m_srcTableName"] = "hris_tito";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "IPout",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto21["m_sql"] = "hris_tito.IPout";
$proto21["m_srcTableName"] = "hris_tito";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalHours",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto23["m_sql"] = "hris_tito.TotalHours";
$proto23["m_srcTableName"] = "hris_tito";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedBy",
	"m_strTable" => "hris_tito",
	"m_srcTableName" => "hris_tito"
));

$proto25["m_sql"] = "hris_tito.CheckedBy";
$proto25["m_srcTableName"] = "hris_tito";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "hris_tito";
$proto28["m_srcTableName"] = "hris_tito";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "personnelID";
$proto28["m_columns"][] = "TimeIn";
$proto28["m_columns"][] = "TimeOut";
$proto28["m_columns"][] = "IPin";
$proto28["m_columns"][] = "IPout";
$proto28["m_columns"][] = "TotalHours";
$proto28["m_columns"][] = "CheckedBy";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "hris_tito";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "hris_tito";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_CROSSJOIN";
			$proto32=array();
$proto32["m_strName"] = "hris_job";
$proto32["m_srcTableName"] = "hris_tito";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "ID";
$proto32["m_columns"][] = "empID";
$proto32["m_columns"][] = "department";
$proto32["m_columns"][] = "unit";
$proto32["m_columns"][] = "jobtitle";
$proto32["m_columns"][] = "jobdescription";
$proto32["m_columns"][] = "datehired";
$proto32["m_columns"][] = "reference";
$proto32["m_columns"][] = "dateend";
$proto32["m_columns"][] = "type";
$proto32["m_columns"][] = "category";
$proto32["m_columns"][] = "empstatus";
$proto32["m_columns"][] = "personnelID";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "hris_job";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "hris_tito";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_tito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_tito = createSqlQuery_hris_tito();


	
											
	
$tdatahris_tito[".sqlquery"] = $queryData_hris_tito;

$tableEvents["hris_tito"] = new eventsBase;
$tdatahris_tito[".hasEvents"] = false;

?>