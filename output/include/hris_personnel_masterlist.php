<?php
function DisplayMasterTableInfo_hris_personnel($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "hris_personnel";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "hris_job")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "hris_journey")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "hris_educationprofile")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "hris_licert")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "hris_trainings")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "hris_affiliation")
	{
		$keysAssoc["ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("hris_personnel","ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search");
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
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
	$xt->assign("age_mastervalue", $viewControls->showDBValue("age", $data, $keylink));
	$format = $settings->getViewFormat("age");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("age")))
		$class = ' rnr-field-number';
		
	$xt->assign("age_class", $class); // add class for field header as field value
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
	$xt->assign("currentaddress_mastervalue", $viewControls->showDBValue("currentaddress", $data, $keylink));
	$format = $settings->getViewFormat("currentaddress");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("currentaddress")))
		$class = ' rnr-field-number';
		
	$xt->assign("currentaddress_class", $class); // add class for field header as field value
	$xt->assign("permanentaddress_mastervalue", $viewControls->showDBValue("permanentaddress", $data, $keylink));
	$format = $settings->getViewFormat("permanentaddress");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("permanentaddress")))
		$class = ' rnr-field-number';
		
	$xt->assign("permanentaddress_class", $class); // add class for field header as field value
	$xt->assign("sss_mastervalue", $viewControls->showDBValue("sss", $data, $keylink));
	$format = $settings->getViewFormat("sss");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("sss")))
		$class = ' rnr-field-number';
		
	$xt->assign("sss_class", $class); // add class for field header as field value
	$xt->assign("tin_mastervalue", $viewControls->showDBValue("tin", $data, $keylink));
	$format = $settings->getViewFormat("tin");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tin")))
		$class = ' rnr-field-number';
		
	$xt->assign("tin_class", $class); // add class for field header as field value
	$xt->assign("pagibig_mastervalue", $viewControls->showDBValue("pagibig", $data, $keylink));
	$format = $settings->getViewFormat("pagibig");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pagibig")))
		$class = ' rnr-field-number';
		
	$xt->assign("pagibig_class", $class); // add class for field header as field value
	$xt->assign("philhealth_mastervalue", $viewControls->showDBValue("philhealth", $data, $keylink));
	$format = $settings->getViewFormat("philhealth");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("philhealth")))
		$class = ' rnr-field-number';
		
	$xt->assign("philhealth_class", $class); // add class for field header as field value
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
	$xt->assign("telephone_mastervalue", $viewControls->showDBValue("telephone", $data, $keylink));
	$format = $settings->getViewFormat("telephone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("telephone")))
		$class = ' rnr-field-number';
		
	$xt->assign("telephone_class", $class); // add class for field header as field value
	$xt->assign("dateofbirth_mastervalue", $viewControls->showDBValue("dateofbirth", $data, $keylink));
	$format = $settings->getViewFormat("dateofbirth");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dateofbirth")))
		$class = ' rnr-field-number';
		
	$xt->assign("dateofbirth_class", $class); // add class for field header as field value
	$xt->assign("skills_mastervalue", $viewControls->showDBValue("skills", $data, $keylink));
	$format = $settings->getViewFormat("skills");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("skills")))
		$class = ' rnr-field-number';
		
	$xt->assign("skills_class", $class); // add class for field header as field value
	$xt->assign("civilstatus_mastervalue", $viewControls->showDBValue("civilstatus", $data, $keylink));
	$format = $settings->getViewFormat("civilstatus");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("civilstatus")))
		$class = ' rnr-field-number';
		
	$xt->assign("civilstatus_class", $class); // add class for field header as field value

	$layout = GetPageLayout("hris_personnel", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("hris_personnel", "masterlist"));
}

?>