<?php 
class eventsBase
{
	var $events = array();
	var $captchas = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
		
	function existsCAPTCHA($page)
	{
		return (array_key_exists($page,$this->captchas)!==FALSE);
	}
	
	function callCAPTCHA(&$pageObject)
	{
		if($pageObject->pageType == "add")
			$this->displayCaptchaOnAdd();
		elseif($pageObject->pageType == "edit")
			$this->displayCaptchaOnEdit();
		elseif($pageObject->pageType == "register")
			$this->displayCaptchaOnRegister();
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events
		$this->events["Login_Session_Cookies"] = true;


	
	
		}
// Captchas functions	
//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		
// FISCAL YEAR COMPUTATION
$yr = date("Y");
$prevyr = $yr - 1;
$nextyr = $yr + 1;
$m = date("m");
if($m>=8) {
  $fiscalyr = "$yr-$nextyr";
}
else {
  $fiscalyr = "$prevyr-$yr";
}

// GET GENDER AND CIVIL STATUS
$gndr = DBLookup("SELECT gender from hris_personnel where emailaddress='$username'"); 
$cstat = DBLookup("SELECT civilstatus from hris_personnel where emailaddress='$username'"); 

// UPDATING THE LOGIN SESSIONS
$_SESSION['GENDER']=$gndr;
$_SESSION['CIVIL_STATUS']=$cstat;
$_SESSION['FISCAL_YR']=$fiscalyr;



    
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function Login_Session_Cookies(&$params)
	{
	print "Fiscal Year $_SESSION[FISCAL_YR] $_SESSION[CIVIL_STATUS] $_SESSION[GENDER]";
	;
}

} 
?>
