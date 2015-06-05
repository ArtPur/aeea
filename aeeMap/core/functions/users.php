<?php
function change_profile_image($rep_id, $file_temp, $file_extn) {
	$file_path = 'images/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	move_uploaded_file($file_temp, $file_path);
	mysql_query("UPDATE `reps` SET `profile` = '" . mysql_real_escape_string($file_path) . "' WHERE `rep_id` = " . (int)$rep_id);
}

function mail_reps($subject, $body) {
	$query = mysql_query("SELECT `email`, `firstname` FROM `reps` WHERE `allow_email` = 1");
	while (($row = mysql_fetch_assoc($query)) !== false) {
		email($row['email'], $subject, "Hello " . $row['firstname'] . ",\n\n" . $body);
	}
}

function has_access($rep_id, $type) {
	$rep_id 	= (int)$rep_id;
	$type 		= (int)$type;
	
	return (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `rep_id` = $rep_id AND `type` = $type"), 0) == 1) ? true : false;
}

function recover($mode, $email) {
	$mode 		= sanitize($mode);
	$email		= sanitize($email);
	
	$user_data 	= user_data(rep_id_from_email($email), 'rep_id', 'firstname', 'username');
	
	if ($mode == 'username') {
		email($email, 'Your username', "Hello " . $user_data['firstname'] . ",\n\nYour username is: " . $user_data['username'] . "\n\n-Accelerated Education Africa");
	} else if ($mode == 'password') {
		$generated_password = substr(md5(rand(999, 999999)), 0, 8);
		change_password($user_data['rep_id'], $generated_password);
		
		update_user($user_data['rep_id'], array('password_recover' => '1'));
		
		email($email, 'Your password recovery', "Hello " . $user_data['firstname'] . ",\n\nYour new password is: " . $generated_password . "\n\n-Accelerated Education Africa");
	}
}

function update_user($rep_id, $update_data) {
	$update = array();
	array_walk($update_data, 'array_sanitize');
	
	foreach($update_data as $field=>$data) {
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}
	
	mysql_query("UPDATE `reps` SET " . implode(', ', $update) . " WHERE `rep_id` = $rep_id");
}

function activate($email, $email_code) {
	$email 		= mysql_real_escape_string($email);
	$email_code = mysql_real_escape_string($email_code);
	
	if (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `email` = '$email' AND `email_code` = '$email_code' AND `active` = 0"), 0) == 1) {
		mysql_query("UPDATE `reps` SET `active` = 1 WHERE `email` = '$email'");
		return true;
	} else {
		return false;
	}
}

function change_password($rep_id, $password) {
	$rep_id = (int)$rep_id;
	$password = md5($password);
	
	mysql_query("UPDATE `reps` SET `password` = '$password', `password_recover` = 0 WHERE `rep_id` = $rep_id");
}

function register_user($register_data) {
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	mysql_query("INSERT INTO `reps` ($fields) VALUES ($data)");
	email($register_data['email'], 'Activate your account', "Hello " . $register_data['firstname'] . ",\n\nYou need to activate your account, so use the link below:\n\nhttp://localhost/aea//forms/activate.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . "\n\n - phpacademy");
}

function user_count() {
	return mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `active` = 1"), 0);
}

function user_data($rep_id) {
	$data = array();
	$rep_id = (int)$rep_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1) {
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `reps` WHERE `rep_id` = $rep_id"));
		
		return $data;
	}
}

function logged_in() {
	return (isset($_SESSION['rep_id'])) ? true : false;
}

function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `username` = '$username'"), 0) == 1) ? true : false;
}

function email_exists($email) {
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `email` = '$email'"), 0) == 1) ? true : false;
}

function user_active($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `username` = '$username' AND `active` = 1"), 0) == 1) ? true : false;
}

function rep_id_from_username($username) {
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `rep_id` FROM `reps` WHERE `username` = '$username'"), 0, 'rep_id');
}

function rep_id_from_email($email) {
	$email = sanitize($email);
	return mysql_result(mysql_query("SELECT `rep_id` FROM `reps` WHERE `email` = '$email'"), 0, 'rep_id');
}

function login($username, $password) {
	$rep_id = rep_id_from_username($username);
	
	$username = sanitize($username);
	$password = md5($password);
	
	return (mysql_result(mysql_query("SELECT COUNT(`rep_id`) FROM `reps` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $rep_id : false;
}
?>