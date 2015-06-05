<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'functions/users.php';
require 'functions/general.php';


$current_file = explode('', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if (logged_in() === true) {
	$session_user_id = $_SESSION['rep_id'];
	$user_data = user_data($session_user_id, 'rep_id', 'username', 'password', 'firstname', 'lastname', 'email', 'country', 'photo');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
	if ($current_file !== 'changepassword.php' && $user_data['password_recover'] == 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}

$errors = array();
?>