<?php
function DisplayMasterTableInfoForPrint_User_Manager($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "User Manager";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "hris_user" )
	{
		$keysAssoc["emailaddress"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("emailaddress", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("emailaddress", $keys[1-1], "", true);

				$keyValue = runner_htmlspecialchars($keysAssoc["emailaddress"]);
		$showKeys.= " ".GetFieldLabel("User_Manager","emailaddress").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));
	
	$xt->assign("ID_mastervalue", $viewControls->showDBValue("ID", $data, $keylink));
	$format = $settings->getViewFormat("ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("ID_class", $class); // add class for field header as field value
	$xt->assign("fullName_mastervalue", $viewControls->showDBValue("fullName", $data, $keylink));
	$format = $settings->getViewFormat("fullName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("fullName")))
		$class = ' rnr-field-number';
		
	$xt->assign("fullName_class", $class); // add class for field header as field value
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
	$xt->assign("firstname_mastervalue", $viewControls->showDBValue("firstname", $data, $keylink));
	$format = $settings->getViewFormat("firstname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("firstname")))
		$class = ' rnr-field-number';
		
	$xt->assign("firstname_class", $class); // add class for field header as field value
	$xt->assign("middlename_mastervalue", $viewControls->showDBValue("middlename", $data, $keylink));
	$format = $settings->getViewFormat("middlename");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("middlename")))
		$class = ' rnr-field-number';
		
	$xt->assign("middlename_class", $class); // add class for field header as field value
	$xt->assign("lastname_mastervalue", $viewControls->showDBValue("lastname", $data, $keylink));
	$format = $settings->getViewFormat("lastname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("lastname")))
		$class = ' rnr-field-number';
		
	$xt->assign("lastname_class", $class); // add class for field header as field value
	$xt->assign("gender_mastervalue", $viewControls->showDBValue("gender", $data, $keylink));
	$format = $settings->getViewFormat("gender");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("gender")))
		$class = ' rnr-field-number';
		
	$xt->assign("gender_class", $class); // add class for field header as field value
	$xt->assign("emailaddress_mastervalue", $viewControls->showDBValue("emailaddress", $data, $keylink));
	$format = $settings->getViewFormat("emailaddress");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("emailaddress")))
		$class = ' rnr-field-number';
		
	$xt->assign("emailaddress_class", $class); // add class for field header as field value

	$layout = GetPageLayout("User_Manager", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("User_Manager", "masterprint"));
}

?>