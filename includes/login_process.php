<?php
	session_start();
	include('db_conn.php');
	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax){
		$username = mysql_real_escape_string($_REQUEST['username']);
		$password = mysql_real_escape_string($_REQUEST['password']);
		$q = mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
		if(mysql_num_rows($q)>0){
			$_SESSION['username'] = $username;
			echo "success";
		}else{
			echo 'failed';
		}
	}
?>