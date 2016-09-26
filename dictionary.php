<?php 
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);
    include "./dic_map_func.php";
    session_start();

    $word = $_GET['word'];
    $word = strtolower($word);
    $command = $_GET['command'];

    if($command=="exist") {
        if(word_isExist($word))
            echo "true";
        else
            echo "false";
    }
    else if($command=="mean") {
        echo word_mean($word);
    }
    else {
        echo "No such command";
    }
 ?>