<?php
	include_once('usr_connect.php');
	$result = '';
	$error ='';

		session_start(); 
		 
		if (isset($_POST['submit'])) {
			if (empty($_POST['username']) || empty($_POST['password'])) {
				$result='<div class="alert alert-warning">Please check Username or Password</div>';
			} else {
				$username=$_POST['username'];
				$password=$_POST['password'];

				$username = stripslashes($username);
				$password = stripslashes($password);
				$db = mysqli_select_db($conn, "invent-mgmt-db"); 

				

				$qry = mysqli_query($conn, "select * from reg_users where passwd='$password' AND username='$username' AND accstatus=0");
				$rws = mysqli_num_rows($qry);
					if ($rws == 1) {						
							$result='<div class="alert alert-warning">Your account is not actviated. Please contact your Administrator.</div>';
						} else {
							$query = mysqli_query($conn, "select * from reg_users where passwd='$password' AND username='$username' AND accstatus=1");
							$rows = mysqli_num_rows($query);				
								if ($rows == 1) {
								$_SESSION['login_user'] = $username; // Initializing Session
								header("location: usr_dashboard.php"); // Redirecting To Other Page
								} else {
									$result='<div class="alert alert-danger">Username or Password Incorrect</div>';
									}
						}
				mysqli_close($conn); 
				}
		}
?>
