<?php
	include('connect.php');
	$result = '';
	$error ='';

		session_start(); 
		 
		if (isset($_POST['submit'])) {
			if (empty($_POST['username']) || empty($_POST['password'])) {
				$result='<div class="alert alert-warning">Please check Username or Password</div>';
			} else 	{
				$username=$_POST['username'];
				$password=$_POST['password'];

				$username = stripslashes($username);
				$password = stripslashes($password);
				$db = mysqli_select_db($conn, "invent-mgmt-db"); 
				$query = mysqli_query($conn, "select * from admin_users where passwd='$password' AND username='$username'");
				$rows = mysqli_num_rows($query);
					if ($rows == 1) {
					$_SESSION['login_user'] = $username; // Initializing Session
					header("location: dashboard.php"); // Redirecting To Other Page
					} else {
						$result='<div class="alert alert-danger">Username or Password Incorrect</div>';
					}
				mysqli_close($conn); 
				}
		}
?>
