<?php
    include "./config.inc.php";

    session_start();
    $user = $_SESSION['login_user'];

    $inputName[] = $inputPassword[] = '';

    if (isset($_POST['update'])) {
        if (isset($_POST['username'][0])) {
            $inputName = $_POST['username'][0];

            $query = mysql_query("UPDATE user SET name = '$inputName' WHERE email = '$user'");

            if ($query == true) {
                //go to customized page
                echo $inputName;
            } 
        }

        if (isset($_POST['password'][0])) {
            $inputPassword = $_POST['password'][0];

            $query = mysql_query("UPDATE user SET password = '$inputPassword' WHERE email = '$user'");

            if ($query == true) {
                //go to customized page
                echo $inputPassword;
            } 
        }

        header("location: modifysuccess.php");
        mysql_close($link); // Closing Connection
    }
?>