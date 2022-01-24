<?php
$dalTablehris_user = array();
$dalTablehris_user["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_user["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTablehris_user["email"] = array("type"=>200,"varname"=>"email");
$dalTablehris_user["password"] = array("type"=>200,"varname"=>"password");
$dalTablehris_user["role"] = array("type"=>200,"varname"=>"role");
	$dalTablehris_user["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_user"] = &$dalTablehris_user;
?>