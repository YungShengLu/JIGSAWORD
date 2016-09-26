<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);
    include "./config.inc.php";

    session_start();
    $command = $_POST['command'];	// update_pwd and get
    // $email = $_SESSION['login_user'];
    $email = "test@gmail.com";

    if($command=="get") {
    	$ret = getUserInfo();
        echo json_encode($ret);
    }
    else if($command=="update_pwd") {
        $new_password = $_POST['new_password'];
        $password = $_POST['password'];
        $query = mysql_query("SELECT `password` FROM `user` WHERE `email` = '$email'");
        $result = mysql_fetch_array($query);
        if($password == $result['password']) {  // confirm password
            $query = mysql_query("UPDATE `user` SET `password` = '$new_password' WHERE `email`= '$email'");
            echo "true";
        }
        else {
            echo "false";   // password confirm failed
        }
    }
    else if($command=="update_score") { // echo true when new record
        $info = getUserInfo();
        $name = $info->name;
        $cur_score = $_POST['score'];
        if($info->hscore<$cur_score) {
            $query = mysql_query("UPDATE `rank` SET `hscore`='$cur_score', `lscore`='$cur_score' WHERE `name`= '$name'");
            echo "true";
        }
        else {
            $query = mysql_query("UPDATE `rank` SET `lscore`='$cur_score' WHERE `email`= '$name'");
            echo "false";
        }
    }
    else {
    	echo "No such commnad";
    }

    function getUserInfo() {
        global $email;
        $query = mysql_query("SELECT `name`, `register` FROM `user` WHERE `email` = '$email'");
        $result = mysql_fetch_array($query);
        $ret = new StdClass();
        $ret->name = $result['name'];
        $ret->register = $result['register'];
        $ret->email = $email;
        $query = mysql_query("SELECT `lscore`, `hscore` FROM `rank` WHERE `name`='$ret->name'");
        $result = mysql_fetch_array($query);
        $ret->lscore = $result['lscore'];
        $ret->hscore = $result['hscore'];
        return $ret;
    }
?>