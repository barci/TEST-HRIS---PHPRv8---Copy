<?php
$strTableName="hris_vacancy";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hris_vacancy";

$gstrOrderBy="ORDER BY validity";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hris_vacancy");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hris_vacancy"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>