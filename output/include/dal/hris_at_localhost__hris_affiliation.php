<?php
$dalTablehris_affiliation = array();
$dalTablehris_affiliation["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_affiliation["personnelID"] = array("type"=>200,"varname"=>"personnelID");
$dalTablehris_affiliation["name"] = array("type"=>200,"varname"=>"name");
$dalTablehris_affiliation["membership"] = array("type"=>200,"varname"=>"membership");
$dalTablehris_affiliation["role"] = array("type"=>200,"varname"=>"role");
$dalTablehris_affiliation["status"] = array("type"=>200,"varname"=>"status");
	$dalTablehris_affiliation["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_affiliation"] = &$dalTablehris_affiliation;
?>