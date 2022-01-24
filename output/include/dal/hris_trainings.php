<?php
$dalTablehris_trainings = array();
$dalTablehris_trainings["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablehris_trainings["personnelID"] = array("type"=>200,"varname"=>"personnelID");
$dalTablehris_trainings["trainingname"] = array("type"=>200,"varname"=>"trainingname");
$dalTablehris_trainings["address"] = array("type"=>200,"varname"=>"address");
$dalTablehris_trainings["startdate"] = array("type"=>7,"varname"=>"startdate");
$dalTablehris_trainings["enddate"] = array("type"=>7,"varname"=>"enddate");
	$dalTablehris_trainings["ID"]["key"]=true;
$dal_info["hris_trainings"]=&$dalTablehris_trainings;

?>