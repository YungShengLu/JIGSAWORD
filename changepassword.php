<?php
    include_once "./config.inc.php";

    session_start();

    if (isset($_POST['submit'])) {
        header("location: change.php");
        mysql_close($link); // Closing Connection
    }
?>