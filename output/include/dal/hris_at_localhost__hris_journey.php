<?php
$dalTablehris_journey = array();
$dalTablehris_journey["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_journey["personnelID"] = array("type"=>200,"varname"=>"personnelID");
$dalTablehris_journey["memoType"] = array("type"=>200,"varname"=>"memoType");
$dalTablehris_journey["dateIssued"] = array("type"=>7,"varname"=>"dateIssued");
$dalTablehris_journey["validity"] = array("type"=>7,"varname"=>"validity");
$dalTablehris_journey["title"] = array("type"=>200,"varname"=>"title");
$dalTablehris_journey["file"] = array("type"=>201,"varname"=>"file");
	$dalTablehris_journey["ID"]["key"]=true;

$dal_info["hris_at_localhost__hris_journey"] = &$dalTablehris_journey;
?>