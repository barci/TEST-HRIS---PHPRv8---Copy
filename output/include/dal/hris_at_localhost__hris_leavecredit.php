<?php
$dalTablehris_leavecredit = array();
$dalTablehris_leavecredit["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_leavecredit["personnelID"] = array("type"=>200,"varname"=>"personnelID");
$dalTablehris_leavecredit["leavetype"] = array("type"=>200,"varname"=>"leavetype");
$dalTablehris_leavecredit["datesubmitted"] = array("type"=>135,"varname"=>"datesubmitted");
$dalTablehris_leavecredit["inclusivedates"] = array("type"=>200,"varname"=>"inclusivedates");
$dalTablehris_leavecredit["fiscalyear"] = array("type"=>200,"varname"=>"fiscalyear");
$dalTablehris_leavecredit["credit"] = array("type"=>200,"varname"=>"credit");
$dalTablehris_leavecredit["debit"] = array("type"=>200,"varname"=>"debit");
$dalTablehris_leavecredit["notes"] = array("type"=>200,"varname"=>"notes");
$dalTablehris_leavecredit["approverID"] = array("type"=>200,"varname"=>"approverID");
$dalTablehris_leavecredit["dateapproved"] = array("type"=>135,"varname"=>"dateapproved");
	$dalTablehris_leavecredit["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_leavecredit"] = &$dalTablehris_leavecredit;
?>