<?php

    $host = "140.116.245.148";
    $user = "f74039025";
    $upwd = "8382830802";
    $db = "f74039025";

	$link = mysql_connect($host, $user, $upwd) or die ("Unable to connect!");
	mysql_select_db($db, $link) or die ("Unable to select database!");
	
?>