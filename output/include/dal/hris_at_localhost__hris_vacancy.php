<?php
$dalTablehris_vacancy = array();
$dalTablehris_vacancy["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_vacancy["jobtitle"] = array("type"=>200,"varname"=>"jobtitle");
$dalTablehris_vacancy["jobdesc"] = array("type"=>201,"varname"=>"jobdesc");
$dalTablehris_vacancy["deptunit"] = array("type"=>200,"varname"=>"deptunit");
$dalTablehris_vacancy["validity"] = array("type"=>7,"varname"=>"validity");
	$dalTablehris_vacancy["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_vacancy"] = &$dalTablehris_vacancy;
?>