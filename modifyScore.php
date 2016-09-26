<?php
    include "./config.inc.php";
    session_start();
    $command = $_GET['command'];
    $email = $_SESSION['login_user'];

    if($command == "get") {
        $query = mysql_query("SELECT name FROM user WHERE email = '$email'", $link);
        $result = mysql_fetch_array($query);    // get user name

        $ret = new StdClass();
        $ret->username = $result['name'];

        $list;
        $query = mysql_query("SELECT * FROM rank ORDER BY `hscore` DESC", $link);
        while($result = mysql_fetch_array($query)) {
            $list[] = $result;
        }

        $ret->list = $list;
        echo json_encode($ret);    
    }
    else if($command=="gethscore") {
        $query = mysql_query("SELECT name FROM user WHERE email = '$email'", $link);
        $result = mysql_fetch_array($query);    // get user name
        $name = $result['name'];
        $ret->name = $name;

        $query = mysql_query("SELECT * FROM `rank` WHERE `name`='$name'", $link);
        $result = mysql_fetch_array($query);
        echo json_encode($result['hscore']);
    }
    else {
        echo "No such command";
    }

?>