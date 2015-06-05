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

		$this->events["AfterUnsuccessfulLogin"]=true;

		$this->events["AfterRemindPassword"]=true;

		$this->events["AfterChangePassword"]=true;


//	onscreen events


	
	
		}
// Captchas functions	
//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		
//**********  Redirect to another page  ************
global $dal;

$tblUsers = $dal->Table("users");

$rs = $tblUsers->Query("username='".$username."' and 

  password='".$password."'","");

$data = db_fetch_array($rs);

header("Location: users_edit.php?editid1=".$data["users_id"]);

exit();

function AfterSuccessfulLogin($username, $password, $data)

{

 $_SESSION["username"] = $data["username"];

}


;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				// After unsuccessful login
function AfterUnsuccessfulLogin($username, $password, &$message, &$pageObject)
{

		

//**********  Display a message on the Web page  ************
echo "Oops! Something went wrong ... either your username or password are incorrect or you dont have permission to enter this site.";




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterUnsuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After password reminder sent
function AfterRemindPassword($username, $email, &$pageObject)
{

		

//**********  Redirect to another page  ************
header("Location: index.php");
exit();



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterRemindPassword

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// After password changed
function AfterChangePassword($oldpassword, $newpassword, &$pageObject)
{

		
//**********  Redirect to another page  ************
global $dal;

$tblUsers = $dal->Table("users");

$rs = $tblUsers->Query("username='".$username."' and 

  password='".$password."'","");

$data = db_fetch_array($rs);

header("Location: users_edit.php?editid1=".$data["users_id"]);

exit();

;		
} // function AfterChangePassword

		
		
		
		
		
		
		
		
		

//	onscreen events

} 
?>
