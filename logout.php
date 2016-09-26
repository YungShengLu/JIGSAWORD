<?php
    include "./config.inc.php";

	session_start();

	$userEmail = $_SESSION['login_user'];

	// To protect MySQL injection for Security purpose
	$inputEmail = stripslashes($inputEmail);
	$inputPassword = stripslashes($inputPassword);

	$inputEmail = mysql_real_escape_string($inputEmail);
	$inputPassword = mysql_real_escape_string($inputPassword);

	$update = mysql_query("UPDATE account SET status = '0' WHERE email = '$userEmail'");

	$_SESSION['login_user'] = "none"; // Initializing Session
	header("location: index.php"); // Redirecting To Other Page

	mysql_close($link); // Closing Connection
?>