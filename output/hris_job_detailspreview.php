<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/hris_job_variables.php");

$mode = postvalue("mode");


require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "FusionDeliciousLavender", "MobileDeliciousLavender");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["hris_job_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new RunnerPage($params);

if($mastertable == "hris_personnel")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("personnelID") . "=" . make_db_value("personnelID",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "Job Titles")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("department") . "=" . make_db_value("department",$_SESSION[$strTableName."_masterkey1"]);
		$where.=" and ";
	$where .= $pageObject->getFieldSQLDecrypt("unit") . "=" . make_db_value("unit",$_SESSION[$strTableName."_masterkey2"]);
		$where.=" and ";
	$where .= $pageObject->getFieldSQLDecrypt("jobtitle") . "=" . make_db_value("jobtitle",$_SESSION[$strTableName."_masterkey3"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));
	
	
	//	ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ID", $data, $keylink);
			$row["ID_value"] = $value;
			$format = $pSet->getViewFormat("ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ID")))
				$class = ' rnr-field-number';
			$row["ID_class"] = $class;
	//	empID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("empID", $data, $keylink);
			$row["empID_value"] = $value;
			$format = $pSet->getViewFormat("empID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("empID")))
				$class = ' rnr-field-number';
			$row["empID_class"] = $class;
	//	department - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("department", $data, $keylink);
			$row["department_value"] = $value;
			$format = $pSet->getViewFormat("department");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("department")))
				$class = ' rnr-field-number';
			$row["department_class"] = $class;
	//	unit - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("unit", $data, $keylink);
			$row["unit_value"] = $value;
			$format = $pSet->getViewFormat("unit");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("unit")))
				$class = ' rnr-field-number';
			$row["unit_class"] = $class;
	//	jobtitle - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobtitle", $data, $keylink);
			$row["jobtitle_value"] = $value;
			$format = $pSet->getViewFormat("jobtitle");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobtitle")))
				$class = ' rnr-field-number';
			$row["jobtitle_class"] = $class;
	//	jobdescription - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobdescription", $data, $keylink);
			$row["jobdescription_value"] = $value;
			$format = $pSet->getViewFormat("jobdescription");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobdescription")))
				$class = ' rnr-field-number';
			$row["jobdescription_class"] = $class;
	//	datehired - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("datehired", $data, $keylink);
			$row["datehired_value"] = $value;
			$format = $pSet->getViewFormat("datehired");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("datehired")))
				$class = ' rnr-field-number';
			$row["datehired_class"] = $class;
	//	reference - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reference", $data, $keylink);
			$row["reference_value"] = $value;
			$format = $pSet->getViewFormat("reference");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reference")))
				$class = ' rnr-field-number';
			$row["reference_class"] = $class;
	//	dateend - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateend", $data, $keylink);
			$row["dateend_value"] = $value;
			$format = $pSet->getViewFormat("dateend");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateend")))
				$class = ' rnr-field-number';
			$row["dateend_class"] = $class;
	//	type - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("type", $data, $keylink);
			$row["type_value"] = $value;
			$format = $pSet->getViewFormat("type");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("type")))
				$class = ' rnr-field-number';
			$row["type_class"] = $class;
	//	category - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("category", $data, $keylink);
			$row["category_value"] = $value;
			$format = $pSet->getViewFormat("category");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("category")))
				$class = ' rnr-field-number';
			$row["category_class"] = $class;
	//	empstatus - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("empstatus", $data, $keylink);
			$row["empstatus_value"] = $value;
			$format = $pSet->getViewFormat("empstatus");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("empstatus")))
				$class = ' rnr-field-number';
			$row["empstatus_class"] = $class;
	//	personnelID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("personnelID", $data, $keylink);
			$row["personnelID_value"] = $value;
			$format = $pSet->getViewFormat("personnelID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("personnelID")))
				$class = ' rnr-field-number';
			$row["personnelID_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("hris_job", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>