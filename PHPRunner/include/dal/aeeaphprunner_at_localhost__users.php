<?php
$dalTableusers = array();
$dalTableusers["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableusers["firstname"] = array("type"=>200,"varname"=>"firstname");
$dalTableusers["lastname"] = array("type"=>200,"varname"=>"lastname");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password");
$dalTableusers["password_salt"] = array("type"=>200,"varname"=>"password_salt");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["country"] = array("type"=>200,"varname"=>"country");
$dalTableusers["created"] = array("type"=>135,"varname"=>"created");
$dalTableusers["user_group"] = array("type"=>3,"varname"=>"user_group");
$dalTableusers["attempt"] = array("type"=>200,"varname"=>"attempt");
	$dalTableusers["user_id"]["key"]=true;

$dal_info["aeeaphprunner_at_localhost__users"] = &$dalTableusers;
?>