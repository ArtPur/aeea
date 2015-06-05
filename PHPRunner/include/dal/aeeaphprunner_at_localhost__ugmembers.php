<?php
$dalTableugmembers = array();
$dalTableugmembers["UserName"] = array("type"=>200,"varname"=>"UserName");
$dalTableugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID");
	$dalTableugmembers["UserName"]["key"]=true;
	$dalTableugmembers["GroupID"]["key"]=true;

$dal_info["aeeaphprunner_at_localhost__ugmembers"] = &$dalTableugmembers;
?>