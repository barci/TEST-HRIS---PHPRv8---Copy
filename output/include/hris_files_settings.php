<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_files = array();	
	$tdatahris_files[".truncateText"] = true;
	$tdatahris_files[".NumberOfChars"] = 80; 
	$tdatahris_files[".ShortName"] = "hris_files";
	$tdatahris_files[".OwnerID"] = "";
	$tdatahris_files[".OriginalTable"] = "hris_files";

//	field labels
$fieldLabelshris_files = array();
$fieldToolTipshris_files = array();
$pageTitleshris_files = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_files["English"] = array();
	$fieldToolTipshris_files["English"] = array();
	$pageTitleshris_files["English"] = array();
	$fieldLabelshris_files["English"]["ID"] = "ID";
	$fieldToolTipshris_files["English"]["ID"] = "";
	$fieldLabelshris_files["English"]["name"] = "Name";
	$fieldToolTipshris_files["English"]["name"] = "";
	$fieldLabelshris_files["English"]["type"] = "Type";
	$fieldToolTipshris_files["English"]["type"] = "";
	$fieldLabelshris_files["English"]["category"] = "Category";
	$fieldToolTipshris_files["English"]["category"] = "";
	$fieldLabelshris_files["English"]["area"] = "Area";
	$fieldToolTipshris_files["English"]["area"] = "";
	$fieldLabelshris_files["English"]["file"] = "File";
	$fieldToolTipshris_files["English"]["file"] = "";
	$fieldLabelshris_files["English"]["url"] = "Url";
	$fieldToolTipshris_files["English"]["url"] = "";
	if (count($fieldToolTipshris_files["English"]))
		$tdatahris_files[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_files[""] = array();
	$fieldToolTipshris_files[""] = array();
	$pageTitleshris_files[""] = array();
	$fieldLabelshris_files[""]["ID"] = "ID";
	$fieldToolTipshris_files[""]["ID"] = "";
	$fieldLabelshris_files[""]["name"] = "Name";
	$fieldToolTipshris_files[""]["name"] = "";
	$fieldLabelshris_files[""]["type"] = "Type";
	$fieldToolTipshris_files[""]["type"] = "";
	$fieldLabelshris_files[""]["category"] = "Category";
	$fieldToolTipshris_files[""]["category"] = "";
	$fieldLabelshris_files[""]["area"] = "Area";
	$fieldToolTipshris_files[""]["area"] = "";
	$fieldLabelshris_files[""]["file"] = "File";
	$fieldToolTipshris_files[""]["file"] = "";
	$fieldLabelshris_files[""]["url"] = "Url";
	$fieldToolTipshris_files[""]["url"] = "";
	if (count($fieldToolTipshris_files[""]))
		$tdatahris_files[".isUseToolTips"] = true;
}
	
	
	$tdatahris_files[".NCSearch"] = true;



$tdatahris_files[".shortTableName"] = "hris_files";
$tdatahris_files[".nSecOptions"] = 0;
$tdatahris_files[".recsPerRowList"] = 1;
$tdatahris_files[".mainTableOwnerID"] = "";
$tdatahris_files[".moveNext"] = 1;
$tdatahris_files[".nType"] = 0;

$tdatahris_files[".strOriginalTableName"] = "hris_files";




$tdatahris_files[".showAddInPopup"] = false;

$tdatahris_files[".showEditInPopup"] = false;

$tdatahris_files[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_files[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_files[".fieldsForRegister"] = array();

$tdatahris_files[".listAjax"] = false;

	$tdatahris_files[".audit"] = false;

	$tdatahris_files[".locking"] = false;


$tdatahris_files[".list"] = true;

$tdatahris_files[".inlineEdit"] = true;
$tdatahris_files[".inlineAdd"] = true;
$tdatahris_files[".view"] = true;

$tdatahris_files[".import"] = true;

$tdatahris_files[".exportTo"] = true;

$tdatahris_files[".printFriendly"] = true;

$tdatahris_files[".delete"] = true;

$tdatahris_files[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_files[".searchSaving"] = false;
//

$tdatahris_files[".showSearchPanel"] = true;
		$tdatahris_files[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_files[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_files[".isUseAjaxSuggest"] = true;

$tdatahris_files[".rowHighlite"] = true;



$tdatahris_files[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_files[".isUseTimeForSearch"] = false;





$tdatahris_files[".allSearchFields"] = array();
$tdatahris_files[".filterFields"] = array();
$tdatahris_files[".requiredSearchFields"] = array();

$tdatahris_files[".allSearchFields"][] = "ID";
	$tdatahris_files[".allSearchFields"][] = "name";
	$tdatahris_files[".allSearchFields"][] = "type";
	$tdatahris_files[".allSearchFields"][] = "area";
	$tdatahris_files[".allSearchFields"][] = "category";
	$tdatahris_files[".allSearchFields"][] = "file";
	$tdatahris_files[".allSearchFields"][] = "url";
	
$tdatahris_files[".filterFields"][] = "type";	
$tdatahris_files[".filterFields"][] = "category";	
$tdatahris_files[".filterFields"][] = "area";	

$tdatahris_files[".googleLikeFields"] = array();
$tdatahris_files[".googleLikeFields"][] = "ID";
$tdatahris_files[".googleLikeFields"][] = "name";
$tdatahris_files[".googleLikeFields"][] = "type";
$tdatahris_files[".googleLikeFields"][] = "category";
$tdatahris_files[".googleLikeFields"][] = "area";
$tdatahris_files[".googleLikeFields"][] = "file";
$tdatahris_files[".googleLikeFields"][] = "url";


$tdatahris_files[".advSearchFields"] = array();
$tdatahris_files[".advSearchFields"][] = "ID";
$tdatahris_files[".advSearchFields"][] = "name";
$tdatahris_files[".advSearchFields"][] = "type";
$tdatahris_files[".advSearchFields"][] = "area";
$tdatahris_files[".advSearchFields"][] = "category";
$tdatahris_files[".advSearchFields"][] = "file";
$tdatahris_files[".advSearchFields"][] = "url";

$tdatahris_files[".tableType"] = "list";

$tdatahris_files[".printerPageOrientation"] = 0;
$tdatahris_files[".nPrinterPageScale"] = 100;

$tdatahris_files[".nPrinterSplitRecords"] = 40;

$tdatahris_files[".nPrinterPDFSplitRecords"] = 40;





	
$tdatahris_files[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahris_files[".pageSize"] = 20;

$tdatahris_files[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_files[".strOrderBy"] = $tstrOrderBy;

$tdatahris_files[".orderindexes"] = array();

$tdatahris_files[".sqlHead"] = "SELECT ID,  	name,  	`type`,  	category,  	area,  	`file`,  	url";
$tdatahris_files[".sqlFrom"] = "FROM hris_files";
$tdatahris_files[".sqlWhereExpr"] = "";
$tdatahris_files[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_files[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_files[".highlightSearchResults"] = true;

$tableKeyshris_files = array();
$tableKeyshris_files[] = "ID";
$tdatahris_files[".Keys"] = $tableKeyshris_files;

$tdatahris_files[".listFields"] = array();
$tdatahris_files[".listFields"][] = "name";
$tdatahris_files[".listFields"][] = "type";
$tdatahris_files[".listFields"][] = "area";
$tdatahris_files[".listFields"][] = "category";
$tdatahris_files[".listFields"][] = "file";
$tdatahris_files[".listFields"][] = "url";

$tdatahris_files[".hideMobileList"] = array();


$tdatahris_files[".viewFields"] = array();
$tdatahris_files[".viewFields"][] = "ID";
$tdatahris_files[".viewFields"][] = "name";
$tdatahris_files[".viewFields"][] = "type";
$tdatahris_files[".viewFields"][] = "area";
$tdatahris_files[".viewFields"][] = "category";
$tdatahris_files[".viewFields"][] = "file";
$tdatahris_files[".viewFields"][] = "url";

$tdatahris_files[".addFields"] = array();

$tdatahris_files[".inlineAddFields"] = array();
$tdatahris_files[".inlineAddFields"][] = "name";
$tdatahris_files[".inlineAddFields"][] = "type";
$tdatahris_files[".inlineAddFields"][] = "area";
$tdatahris_files[".inlineAddFields"][] = "category";
$tdatahris_files[".inlineAddFields"][] = "file";
$tdatahris_files[".inlineAddFields"][] = "url";

$tdatahris_files[".editFields"] = array();

$tdatahris_files[".inlineEditFields"] = array();
$tdatahris_files[".inlineEditFields"][] = "name";
$tdatahris_files[".inlineEditFields"][] = "type";
$tdatahris_files[".inlineEditFields"][] = "area";
$tdatahris_files[".inlineEditFields"][] = "category";
$tdatahris_files[".inlineEditFields"][] = "file";
$tdatahris_files[".inlineEditFields"][] = "url";

$tdatahris_files[".exportFields"] = array();
$tdatahris_files[".exportFields"][] = "ID";
$tdatahris_files[".exportFields"][] = "name";
$tdatahris_files[".exportFields"][] = "type";
$tdatahris_files[".exportFields"][] = "area";
$tdatahris_files[".exportFields"][] = "category";
$tdatahris_files[".exportFields"][] = "file";
$tdatahris_files[".exportFields"][] = "url";

$tdatahris_files[".importFields"] = array();
$tdatahris_files[".importFields"][] = "ID";
$tdatahris_files[".importFields"][] = "name";
$tdatahris_files[".importFields"][] = "type";
$tdatahris_files[".importFields"][] = "category";
$tdatahris_files[".importFields"][] = "area";
$tdatahris_files[".importFields"][] = "file";
$tdatahris_files[".importFields"][] = "url";

$tdatahris_files[".printFields"] = array();
$tdatahris_files[".printFields"][] = "ID";
$tdatahris_files[".printFields"][] = "name";
$tdatahris_files[".printFields"][] = "type";
$tdatahris_files[".printFields"][] = "area";
$tdatahris_files[".printFields"][] = "category";
$tdatahris_files[".printFields"][] = "file";
$tdatahris_files[".printFields"][] = "url";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","ID"); 
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

	

	
	$tdatahris_files["ID"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
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

	

	
	$tdatahris_files["name"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";
	
		
		
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
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Document";
	$edata["LookupValues"][] = "Image";
	$edata["LookupValues"][] = "Video";

		
		$edata["SelectSize"] = 1;
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_files["type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","category"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "category"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";
	
		
		
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
	$edata["LookupTable"] = "hris_files";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "category";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category";
	
		
	$edata["LookupOrderBy"] = "category";
	
		
			
		
				
	
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_files["category"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","area"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "area"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";
	
		
		
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
	$edata["LookupTable"] = "hris_files";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "area";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "area";
	
		
	$edata["LookupOrderBy"] = "area";
	
		
			
		
				
	
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatahris_files["area"] = $fdata;
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","file"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
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

	

	
	$tdatahris_files["file"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "hris_files";
	$fdata["Label"] = GetFieldLabel("hris_files","url"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Hyperlink");
	
		
		
		
		
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";
	
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatahris_files["url"] = $fdata;

	
$tables_data["hris_files"]=&$tdatahris_files;
$field_labels["hris_files"] = &$fieldLabelshris_files;
$fieldToolTips["hris_files"] = &$fieldToolTipshris_files;
$page_titles["hris_files"] = &$pageTitleshris_files;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_files"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_files"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	name,  	`type`,  	category,  	area,  	`file`,  	url";
$proto0["m_strFrom"] = "FROM hris_files";
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
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_files";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "hris_files";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto9["m_sql"] = "`type`";
$proto9["m_srcTableName"] = "hris_files";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto11["m_sql"] = "category";
$proto11["m_srcTableName"] = "hris_files";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto13["m_sql"] = "area";
$proto13["m_srcTableName"] = "hris_files";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto15["m_sql"] = "`file`";
$proto15["m_srcTableName"] = "hris_files";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "hris_files",
	"m_srcTableName" => "hris_files"
));

$proto17["m_sql"] = "url";
$proto17["m_srcTableName"] = "hris_files";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hris_files";
$proto20["m_srcTableName"] = "hris_files";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "name";
$proto20["m_columns"][] = "type";
$proto20["m_columns"][] = "category";
$proto20["m_columns"][] = "area";
$proto20["m_columns"][] = "file";
$proto20["m_columns"][] = "url";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "hris_files";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "hris_files";
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
$proto0["m_srcTableName"]="hris_files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_files = createSqlQuery_hris_files();


	
							
	
$tdatahris_files[".sqlquery"] = $queryData_hris_files;

$tableEvents["hris_files"] = new eventsBase;
$tdatahris_files[".hasEvents"] = false;

?>