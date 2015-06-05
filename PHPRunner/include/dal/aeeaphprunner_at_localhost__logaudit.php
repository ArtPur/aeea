<?php
$dalTablelogaudit = array();
$dalTablelogaudit["id"] = array("type"=>3,"varname"=>"id");
$dalTablelogaudit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTablelogaudit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTablelogaudit["user"] = array("type"=>200,"varname"=>"user");
$dalTablelogaudit["table"] = array("type"=>200,"varname"=>"table");
$dalTablelogaudit["action"] = array("type"=>200,"varname"=>"action");
$dalTablelogaudit["description"] = array("type"=>201,"varname"=>"description");
	$dalTablelogaudit["id"]["key"]=true;

$dal_info["aeeaphprunner_at_localhost__logaudit"] = &$dalTablelogaudit;
?>