<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["hris_personnel"]["hris_educationprofile.personelID"]["edit"] = array("table" => "hris_educationprofile", "field" => "personelID", "page" => "edit");
	$lookupTableLinks["hris_job"]["hris_job.department"]["edit"] = array("table" => "hris_job", "field" => "department", "page" => "edit");
	$lookupTableLinks["hris_job"]["hris_job.unit"]["edit"] = array("table" => "hris_job", "field" => "unit", "page" => "edit");
	$lookupTableLinks["hris_personnel"]["hris_job.personnelID"]["edit"] = array("table" => "hris_job", "field" => "personnelID", "page" => "edit");
	$lookupTableLinks["hris_personnel"]["hris_licert.personnelID"]["edit"] = array("table" => "hris_licert", "field" => "personnelID", "page" => "edit");
	$lookupTableLinks["hris_personnel"]["hris_tito.personnelID"]["edit"] = array("table" => "hris_tito", "field" => "personnelID", "page" => "edit");
	$lookupTableLinks["hris_personnel"]["hris_journey.personnelID"]["edit"] = array("table" => "hris_journey", "field" => "personnelID", "page" => "edit");
	$lookupTableLinks["hris_job"]["hris_vacancy.jobtitle"]["edit"] = array("table" => "hris_vacancy", "field" => "jobtitle", "page" => "edit");
	$lookupTableLinks["DeptUnit"]["hris_vacancy.deptunit"]["edit"] = array("table" => "hris_vacancy", "field" => "deptunit", "page" => "edit");
	$lookupTableLinks["hris_files"]["hris_files.category"]["edit"] = array("table" => "hris_files", "field" => "category", "page" => "edit");
	$lookupTableLinks["hris_files"]["hris_files.area"]["edit"] = array("table" => "hris_files", "field" => "area", "page" => "edit");
	$lookupTableLinks["hris_personnel"]["User_Manager.fullName"]["edit"] = array("table" => "User Manager", "field" => "fullName", "page" => "edit");
	$lookupTableLinks["hris_job"]["Job_Titles.department"]["edit"] = array("table" => "Job Titles", "field" => "department", "page" => "edit");
	$lookupTableLinks["hris_job"]["Job_Titles.unit"]["edit"] = array("table" => "Job Titles", "field" => "unit", "page" => "edit");
}

?>