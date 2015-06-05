<?php
require_once 'dbconfig.php';
	try {
	// Establish server connection and select database
	$dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
	die("Sorry, we could not connect you to this database, please contact the Administrator to sort this out.". $e->getMessage());
	}
	
?>