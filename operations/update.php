<?php
require_once ('../dbconfig.php');

	
	if($_POST)
	{
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$status = $_POST['status'];
			if($status != 1) {
				$status = 0;
			} else { $status = 1; }
		
		$stmt = $db_con->prepare("UPDATE reg_users SET username=:usr, password=:pw, fname=:fn, lname=:ln, status=:stat WHERE id=:id");
		$stmt->bindParam(":usr", $username);
		$stmt->bindParam(":pw", $password);
		$stmt->bindParam(":fn", $fname);
		$stmt->bindParam(":ln", $lname);
		$stmt->bindParam(":stat", $status);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>