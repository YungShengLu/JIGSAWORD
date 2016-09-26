<?php
	include "./config.inc.php";

	session_start();
	$error = '';

	if (isset($_POST['submit'])) {
		if (empty($_POST['email']) || empty($_POST['password'])) {
			$error = "Email or password is invalid";
		}
		else {
			$inputEmail = $_POST['email'];
			$inputPassword = $_POST['password'];

			// To protect MySQL injection for Security purpose
			$inputEmail = stripslashes($inputEmail);
			$inputPassword = stripslashes($inputPassword);

			$inputEmail = mysql_real_escape_string($inputEmail);
			$inputPassword = mysql_real_escape_string($inputPassword);

			$query = mysql_query("SELECT * FROM user WHERE email = '$inputEmail' AND password = '$inputPassword'", $link);
			$rows = mysql_num_rows($query);

			if ($rows == 1) {
				$update = mysql_query("UPDATE user SET status = '1' WHERE email = '$inputEmail'");
				$_SESSION['login_user'] = $inputEmail; // Initializing Session
				header("location: user_page.php"); // Redirecting To Other Page
			} 
			else {
				$_SESSION['login_user'] = "wrong";
				header("location: index.php"); // Redirecting To Other Page
			}

			mysql_close($link); // Closing Connection
		}
	}
?>