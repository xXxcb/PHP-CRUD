<?php

	$result = '';

	session_start();	
	$result='<div class="alert alert-success">You have been logged out successfully.</div>';

	header("Location: ../index.php");
	session_destroy();

?>