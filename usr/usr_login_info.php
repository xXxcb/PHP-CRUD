<?php
	
	include_once('../connect.php');
		
		$db = mysqli_select_db($conn, "invent-mgmt-db");
		session_start();// Starting Session
		$user_check = $_SESSION['login_user'];
		$usrf = '';
		$usrl = '';

		$row = array();
	if ($ses_sql = mysqli_query($conn, "Select Firstname, Lastname from reg_users where username ='$user_check'", MYSQLI_USE_RESULT)) {
				while ($row = mysqli_fetch_assoc($ses_sql)) {
			    $usrf = $row['Firstname'];
			    $usrl = $row['Lastname'];
			}
		}
		$login_session = $usrf +' ' + $usrl;
			if(!isset($login_session)){
			mysqli_close($conn); // Closing Connection
			header('Location: usr/usr_index.php'); // Redirecting To Home Page
	}
?>