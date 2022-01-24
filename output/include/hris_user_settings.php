<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahris_user = array();	
	$tdatahris_user[".truncateText"] = true;
	$tdatahris_user[".NumberOfChars"] = 80; 
	$tdatahris_user[".ShortName"] = "hris_user";
	$tdatahris_user[".OwnerID"] = "";
	$tdatahris_user[".OriginalTable"] = "hris_user";

//	field labels
$fieldLabelshris_user = array();
$fieldToolTipshris_user = array();
$pageTitleshris_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshris_user["English"] = array();
	$fieldToolTipshris_user["English"] = array();
	$pageTitleshris_user["English"] = array();
	$fieldLabelshris_user["English"]["ID"] = "ID";
	$fieldToolTipshris_user["English"]["ID"] = "";
	$fieldLabelshris_user["English"]["email"] = "Email";
	$fieldToolTipshris_user["English"]["email"] = "";
	$fieldLabelshris_user["English"]["password"] = "Password";
	$fieldToolTipshris_user["English"]["password"] = "";
	$fieldLabelshris_user["English"]["name"] = "Name";
	$fieldToolTipshris_user["English"]["name"] = "";
	$fieldLabelshris_user["English"]["mode"] = "Mode";
	$fieldToolTipshris_user["English"]["mode"] = "";
	if (count($fieldToolTipshris_user["English"]))
		$tdatahris_user[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshris_user[""] = array();
	$fieldToolTipshris_user[""] = array();
	$pageTitleshris_user[""] = array();
	$fieldLabelshris_user[""]["name"] = "Name";
	$fieldToolTipshris_user[""]["name"] = "";
	$fieldLabelshris_user[""]["mode"] = "Mode";
	$fieldToolTipshris_user[""]["mode"] = "";
	$fieldLabelshris_user[""]["ID"] = "ID";
	$fieldToolTipshris_user[""]["ID"] = "";
	if (count($fieldToolTipshris_user[""]))
		$tdatahris_user[".isUseToolTips"] = true;
}
	
	
	$tdatahris_user[".NCSearch"] = true;



$tdatahris_user[".shortTableName"] = "hris_user";
$tdatahris_user[".nSecOptions"] = 0;
$tdatahris_user[".recsPerRowList"] = 1;
$tdatahris_user[".mainTableOwnerID"] = "";
$tdatahris_user[".moveNext"] = 1;
$tdatahris_user[".nType"] = 0;

$tdatahris_user[".strOriginalTableName"] = "hris_user";




$tdatahris_user[".showAddInPopup"] = false;

$tdatahris_user[".showEditInPopup"] = false;

$tdatahris_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahris_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahris_user[".fieldsForRegister"] = array();

$tdatahris_user[".listAjax"] = false;

	$tdatahris_user[".audit"] = false;

	$tdatahris_user[".locking"] = false;


$tdatahris_user[".list"] = true;

$tdatahris_user[".inlineEdit"] = true;
$tdatahris_user[".inlineAdd"] = true;

$tdatahris_user[".import"] = true;

$tdatahris_user[".exportTo"] = true;

$tdatahris_user[".printFriendly"] = true;

$tdatahris_user[".delete"] = true;

$tdatahris_user[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahris_user[".searchSaving"] = false;
//

$tdatahris_user[".showSearchPanel"] = true;
		$tdatahris_user[".flexibleSearch"] = true;		

if (isMobile())
	$tdatahris_user[".isUseAjaxSuggest"] = false;
else 
	$tdatahris_user[".isUseAjaxSuggest"] = true;

$tdatahris_user[".rowHighlite"] = true;



$tdatahris_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahris_user[".isUseTimeForSearch"] = false;





$tdatahris_user[".allSearchFields"] = array();
$tdatahris_user[".filterFields"] = array();
$tdatahris_user[".requiredSearchFields"] = array();

$tdatahris_user[".allSearchFields"][] = "ID";
	$tdatahris_user[".allSearchFields"][] = "name";
	$tdatahris_user[".allSearchFields"][] = "email";
	$tdatahris_user[".allSearchFields"][] = "password";
	$tdatahris_user[".allSearchFields"][] = "mode";
	

$tdatahris_user[".googleLikeFields"] = array();
$tdatahris_user[".googleLikeFields"][] = "ID";
$tdatahris_user[".googleLikeFields"][] = "name";
$tdatahris_user[".googleLikeFields"][] = "email";
$tdatahris_user[".googleLikeFields"][] = "password";
$tdatahris_user[".googleLikeFields"][] = "mode";


$tdatahris_user[".advSearchFields"] = array();
$tdatahris_user[".advSearchFields"][] = "ID";
$tdatahris_user[".advSearchFields"][] = "name";
$tdatahris_user[".advSearchFields"][] = "email";
$tdatahris_user[".advSearchFields"][] = "password";
$tdatahris_user[".advSearchFields"][] = "mode";

$tdatahris_user[".tableType"] = "list";

$tdatahris_user[".printerPageOrientation"] = 0;
$tdatahris_user[".nPrinterPageScale"] = 100;

$tdatahris_user[".nPrinterSplitRecords"] = 40;

$tdatahris_user[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatahris_user[".pageSize"] = 20;

$tdatahris_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahris_user[".strOrderBy"] = $tstrOrderBy;

$tdatahris_user[".orderindexes"] = array();

$tdatahris_user[".sqlHead"] = "SELECT ID,   name,   email,   password,   `mode`";
$tdatahris_user[".sqlFrom"] = "FROM hris_user";
$tdatahris_user[".sqlWhereExpr"] = "";
$tdatahris_user[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahris_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahris_user[".arrGroupsPerPage"] = $arrGPP;

$tdatahris_user[".highlightSearchResults"] = true;

$tableKeyshris_user = array();
$tableKeyshris_user[] = "ID";
$tdatahris_user[".Keys"] = $tableKeyshris_user;

$tdatahris_user[".listFields"] = array();
$tdatahris_user[".listFields"][] = "ID";
$tdatahris_user[".listFields"][] = "name";
$tdatahris_user[".listFields"][] = "email";
$tdatahris_user[".listFields"][] = "mode";

$tdatahris_user[".hideMobileList"] = array();


$tdatahris_user[".viewFields"] = array();
$tdatahris_user[".viewFields"][] = "ID";
$tdatahris_user[".viewFields"][] = "name";
$tdatahris_user[".viewFields"][] = "email";
$tdatahris_user[".viewFields"][] = "password";
$tdatahris_user[".viewFields"][] = "mode";

$tdatahris_user[".addFields"] = array();
$tdatahris_user[".addFields"][] = "name";
$tdatahris_user[".addFields"][] = "email";
$tdatahris_user[".addFields"][] = "password";
$tdatahris_user[".addFields"][] = "mode";

$tdatahris_user[".inlineAddFields"] = array();
$tdatahris_user[".inlineAddFields"][] = "name";
$tdatahris_user[".inlineAddFields"][] = "email";
$tdatahris_user[".inlineAddFields"][] = "mode";

$tdatahris_user[".editFields"] = array();
$tdatahris_user[".editFields"][] = "name";
$tdatahris_user[".editFields"][] = "email";
$tdatahris_user[".editFields"][] = "password";
$tdatahris_user[".editFields"][] = "mode";

$tdatahris_user[".inlineEditFields"] = array();
$tdatahris_user[".inlineEditFields"][] = "name";
$tdatahris_user[".inlineEditFields"][] = "email";
$tdatahris_user[".inlineEditFields"][] = "mode";

$tdatahris_user[".exportFields"] = array();
$tdatahris_user[".exportFields"][] = "ID";
$tdatahris_user[".exportFields"][] = "name";
$tdatahris_user[".exportFields"][] = "email";
$tdatahris_user[".exportFields"][] = "password";
$tdatahris_user[".exportFields"][] = "mode";

$tdatahris_user[".importFields"] = array();
$tdatahris_user[".importFields"][] = "ID";
$tdatahris_user[".importFields"][] = "name";
$tdatahris_user[".importFields"][] = "email";
$tdatahris_user[".importFields"][] = "password";
$tdatahris_user[".importFields"][] = "mode";

$tdatahris_user[".printFields"] = array();
$tdatahris_user[".printFields"][] = "ID";
$tdatahris_user[".printFields"][] = "name";
$tdatahris_user[".printFields"][] = "email";
$tdatahris_user[".printFields"][] = "password";
$tdatahris_user[".printFields"][] = "mode";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hris_user";
	$fdata["Label"] = GetFieldLabel("hris_user","ID"); 
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

	

	
	$tdatahris_user["ID"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "hris_user";
	$fdata["Label"] = GetFieldLabel("hris_user","name"); 
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

	

	
	$tdatahris_user["name"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "hris_user";
	$fdata["Label"] = GetFieldLabel("hris_user","email"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
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

	

	
	$tdatahris_user["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "hris_user";
	$fdata["Label"] = GetFieldLabel("hris_user","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
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

	

	
	$tdatahris_user["password"] = $fdata;
//	mode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mode";
	$fdata["GoodName"] = "mode";
	$fdata["ownerTable"] = "hris_user";
	$fdata["Label"] = GetFieldLabel("hris_user","mode"); 
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
	
		$fdata["strField"] = "mode"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mode`";
	
		
		
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
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "hr";

		
		
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

	

	
	$tdatahris_user["mode"] = $fdata;

	
$tables_data["hris_user"]=&$tdatahris_user;
$field_labels["hris_user"] = &$fieldLabelshris_user;
$fieldToolTips["hris_user"] = &$fieldToolTipshris_user;
$page_titles["hris_user"] = &$pageTitleshris_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hris_user"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hris_user"] = array();


	
				$strOriginalDetailsTable="hris_personnel";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="User Manager";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "User_Manager";
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
					$masterTablesData["hris_user"][0] = $masterParams;	
				$masterTablesData["hris_user"][0]["masterKeys"] = array();
	$masterTablesData["hris_user"][0]["masterKeys"][]="emailaddress";
				$masterTablesData["hris_user"][0]["detailKeys"] = array();
	$masterTablesData["hris_user"][0]["detailKeys"][]="email";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hris_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   name,   email,   password,   `mode`";
$proto0["m_strFrom"] = "FROM hris_user";
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
	"m_strTable" => "hris_user",
	"m_srcTableName" => "hris_user"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "hris_user";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "hris_user",
	"m_srcTableName" => "hris_user"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "hris_user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "hris_user",
	"m_srcTableName" => "hris_user"
));

$proto9["m_sql"] = "email";
$proto9["m_srcTableName"] = "hris_user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "hris_user",
	"m_srcTableName" => "hris_user"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "hris_user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mode",
	"m_strTable" => "hris_user",
	"m_srcTableName" => "hris_user"
));

$proto13["m_sql"] = "`mode`";
$proto13["m_srcTableName"] = "hris_user";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "hris_user";
$proto16["m_srcTableName"] = "hris_user";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "name";
$proto16["m_columns"][] = "email";
$proto16["m_columns"][] = "password";
$proto16["m_columns"][] = "mode";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "hris_user";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "hris_user";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hris_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hris_user = createSqlQuery_hris_user();


	
					
	
$tdatahris_user[".sqlquery"] = $queryData_hris_user;

$tableEvents["hris_user"] = new eventsBase;
$tdatahris_user[".hasEvents"] = false;

?>