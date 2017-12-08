<?php
require_once ('../dbconfig.php');

	
	if(isset($_POST))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$status = $_POST['status'];
			if($status != 1) {
				$status = 0;
			}
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO reg_users (username,passwd,Firstname,Lastname,accstatus) VALUES(:ename, :epass, :efname, :elname, :estat)");
			$stmt->bindParam(":ename", $username);
			$stmt->bindParam(":epass", $password);
			$stmt->bindParam(":efname", $fname);
			$stmt->bindParam(":elname", $lname);
			$stmt->bindParam(":estat", $status);
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>