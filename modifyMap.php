<?php
    include "./config.inc.php";

    session_start();
    $command = $_POST['command'];	// add and get

    if($command=="get") {
    	$maps;
    	$query = mysql_query("SELECT id, matrix FROM map");
        while($result = mysql_fetch_array($query)) {
	        $maps[] = $result['matrix'];
            $ids[] = $result['id'];
        }
        
        /* random return a map */
        $rand =rand(0, mysql_num_rows($query)-1);
        $ret = new StdClass();
        $ret->map = json_decode($maps[$rand]);

        /* get map answer */
        $id = $ids[$rand];
        $query = mysql_query("SELECT answer FROM map WHERE id='$id'");
        $result = mysql_fetch_array($query);
        $ret->answer = json_decode($result['answer']);

        $ret->id = $id;
        echo json_encode($ret);
    }
    else if($command=="getIdAns") {
        $id = $_POST['id'];
        /* get map answer */
        $query = mysql_query("SELECT answer FROM map WHERE id='$id'");
        $result = mysql_fetch_array($query);
        echo json_encode($result['answer']);
    }
    else if($command=="add") {
	    $map = $_POST['map'];
        $answer = $_POST['answer'];
	    $en_map = json_encode($map);
        $en_answer = json_encode($answer);
	    mysql_query("INSERT INTO map(matrix, answer) VALUES ('$en_map', '$en_answer')", $link);
	    echo mysql_errno($link) . ": " . mysql_error($link). "\n";
    }
    else if($command=="update_ans") {
        $id = $_POST['id'];
        $query = mysql_query("SELECT answer FROM map WHERE id='$id'");
        $result = mysql_fetch_array($query);
        $ans = json_decode($result['answer']);  // get old answer
        $answer = $_POST['answer']; // only one element
        $ans[] = $answer;   // concat
        $ans = json_encode($ans);
        mysql_query("UPDATE `map` SET `answer`='$ans' WHERE id='$id'");
    }
    else {
    	echo "No such commnad";
    }
?>