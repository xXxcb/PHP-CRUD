<?php
include('usr_login.php');


if(isset($_SESSSION['login_user'])) {
	header("location: usr_dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invent Management System</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/wardrobe.css" type="text/css">
</head>
<body>
	<div id="body">
		<div id="form">
			<?php echo $result; ?>
			<!-- <img src="img/logo.png" id=log_logo alt="invent-mgmt-sys-logo"> -->
			<form action="" method="post">
				<div class="form-group">
					<label>Username: </label>
					<input id="name" name="username" placeholder="Username" class="form-control" type="text" autocomplete="off" >
				</div>
				<div class="form-group">
					<label>Password: </label>
					<input id="password" name="password" placeholder="**********" class="form-control" type="password" >	
				</div>	
				<input name="submit" type="submit" class="btn btn-success" value="Login Now!">
				<div class="form-group">
					<p>Are you a Administrator?<a href="../index.php" title="Click Here!"> Click Here!</a></p>
				</div>
				<span><?php echo $error; ?></span>
			</form>			
		</div>
	</div>	
</body>
</html>