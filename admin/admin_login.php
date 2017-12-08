<?php
	
	include_once('../connect.php');
		
		$db = mysqli_select_db($conn, "invent-mgmt-db");
		session_start();// Starting Session
		$user_check = $_SESSION['login_user'];
		$usr = '';
		$row = array();
	if ($ses_sql = mysqli_query($conn, "select Firstname from admin_users where username ='$user_check'", MYSQLI_USE_RESULT)) {
				while ($row = mysqli_fetch_assoc($ses_sql)) {
			    $usr = $row['Firstname'];
			}
		}
		$login_session = $usr;
			if(!isset($login_session)){
			mysqli_close($conn); // Closing Connection
			header('Location: index.php'); // Redirecting To Home Page
	}
?>