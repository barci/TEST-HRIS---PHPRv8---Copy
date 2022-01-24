<?php
$dalTablehris_job = array();
$dalTablehris_job["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_job["empID"] = array("type"=>200,"varname"=>"empID");
$dalTablehris_job["department"] = array("type"=>200,"varname"=>"department");
$dalTablehris_job["unit"] = array("type"=>200,"varname"=>"unit");
$dalTablehris_job["jobtitle"] = array("type"=>200,"varname"=>"jobtitle");
$dalTablehris_job["jobdescription"] = array("type"=>201,"varname"=>"jobdescription");
$dalTablehris_job["datehired"] = array("type"=>7,"varname"=>"datehired");
$dalTablehris_job["reference"] = array("type"=>200,"varname"=>"reference");
$dalTablehris_job["dateend"] = array("type"=>7,"varname"=>"dateend");
$dalTablehris_job["type"] = array("type"=>200,"varname"=>"type");
$dalTablehris_job["category"] = array("type"=>200,"varname"=>"category");
$dalTablehris_job["empstatus"] = array("type"=>200,"varname"=>"empstatus");
$dalTablehris_job["personnelID"] = array("type"=>200,"varname"=>"personnelID");
	$dalTablehris_job["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_job"] = &$dalTablehris_job;
?>