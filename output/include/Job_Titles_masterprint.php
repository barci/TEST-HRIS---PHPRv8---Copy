<?php
function DisplayMasterTableInfoForPrint_Job_Titles($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Job Titles";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "hris_job" )
	{
		$keysAssoc["department"] = $keys[1-1];
		$keysAssoc["unit"] = $keys[2-1];
		$keysAssoc["jobtitle"] = $keys[3-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Job_Titles","department").": ".$keyValue;
				$where.= " and ";
		$showKeys.= " , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("unit", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("unit", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("unit", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Job_Titles","unit").": ".$keyValue;
				$where.= " and ";
		$showKeys.= " , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("jobtitle", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobtitle", $keys[3-1], "", true);

				$keyValue = $viewControls->showDBValue("jobtitle", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Job_Titles","jobtitle").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export");
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["department"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["unit"]));
	$keylink.= "&key3=".runner_htmlspecialchars(rawurlencode(@$data["jobtitle"]));
	
	$xt->assign("department_mastervalue", $viewControls->showDBValue("department", $data, $keylink));
	$format = $settings->getViewFormat("department");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("department")))
		$class = ' rnr-field-number';
		
	$xt->assign("department_class", $class); // add class for field header as field value
	$xt->assign("unit_mastervalue", $viewControls->showDBValue("unit", $data, $keylink));
	$format = $settings->getViewFormat("unit");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("unit")))
		$class = ' rnr-field-number';
		
	$xt->assign("unit_class", $class); // add class for field header as field value
	$xt->assign("jobtitle_mastervalue", $viewControls->showDBValue("jobtitle", $data, $keylink));
	$format = $settings->getViewFormat("jobtitle");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobtitle")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobtitle_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Job_Titles", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Job_Titles", "masterprint"));
}

?>