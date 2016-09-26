<?php
    include "./config.inc.php";
    
    session_start();
    $existed = 0;

    if (isset($_POST['submit'])) {
        $inputName = $_POST['username'];
        $inputEmail = $_POST['email'];
        $inputPassword = $_POST['password'];
        $inputConfirmPassword = $_POST['confirmpassword'];
        $registerdate = date('Y-m-d H:i:s');

        if ($inputPassword != $inputConfirmPassword)
            $confirmpasswordErr = "Passwords are not consistent.";
        else {
            $query = mysql_query("SELECT email FROM user");
            $row = mysql_fetch_array($query);

            // Check whether the account is existed.
            if ($row['email'] == $inputEmail)
                $existed = 1;  
            else
                $existed = 0;

            if ($existed)
                echo "The account has existed.<br>";
            else {
                // To protect MySQL injection for Security purpose
                $inputName = stripslashes($inputName);
                $inputEmail = stripslashes($inputEmail);
                $inputPassword = stripslashes($inputPassword);

                $inputName = mysql_real_escape_string($inputName);
                $inputEmail = mysql_real_escape_string($inputEmail);
                $inputPassword = mysql_real_escape_string($inputPassword);

                mysql_query("INSERT INTO user(name, email, password, register) VALUES ('$inputName', '$inputEmail', '$inputPassword', '$registerdate')", $link);

                if ($query == true) {
                    //go to customized page
                    $_SESSION['register_user'] = $inputEmail;
                    echo $_SESSION['register_user'];
                    header("location: registersuccess.php");
                }
            }

            mysql_close($link); // Closing Connection
        }
    }
?>