<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);
    include "./config.inc.php";
    include "./dic_map_func.php";

    session_start();
    $command = $_POST['command'];	// add and get

    $email = $_SESSION['login_user'];
    $query = mysql_query("SELECT name FROM user WHERE email = '$email'", $link);
    $username = mysql_fetch_array($query);    // get user name
    $username = $username['name'];

    if($command=="get") {
    	$query = mysql_query("SELECT `wordlist`, `mean`, `date` FROM wordbank WHERE username='$username'");
        $ret = new StdClass();
        $result = mysql_fetch_array($query);
        $ret->wordlist = $result['wordlist'];
        $ret->mean = $result['mean'];
        $ret->date = $result['date'];
        echo json_encode($ret);
    }
    else if($command=="add") {
    	$words = $_POST['words']; // new words need to be added
        // $means = $_POST['means']; // queryed before
        $mean = word_mean($words[0]);
        $means[] = $mean;   // Sorry, hard code for deadline ...

        $add_date = date('Y-m-d H:i:s');
        mysql_query("SET NAMES UTF8");
        $query = mysql_query("SELECT `wordlist`, `mean` FROM wordbank WHERE username='$username'");
        if(mysql_num_rows($query)==0) { // insert directly if user no bank
            $en_words = json_encode($words);
            $en_means = json_encode($means);
            mysql_query("INSERT INTO wordbank(`username`, `wordlist`, `mean`, `date`) VALUES ('$username', '$en_words', '$en_means', '$add_date')", $link);
        }
        else {  // concat and unique if user had bank
            $result = mysql_fetch_array($query);
            $en_old_words = $result['wordlist'];
            $en_old_means = $result['mean'];
            $old_words = json_decode($en_old_words);
            $old_means = json_decode($en_old_means);
            $merge_words = array_merge($old_words, $words);
            $merge_means = array_merge($old_means, $means);
            $uni_words = array_unique($merge_words);
            $uni_means = array_unique($merge_means);
            $en_uni_words = json_encode($uni_words);
            $en_uni_means = json_encode($uni_means);
    		mysql_query("UPDATE `wordbank` SET `wordlist`= '$en_uni_words', `mean`='$en_uni_means', `date`='$add_date' WHERE username='$username'", $link);
    	}

    }
    else if($command=="delete") {
        $word = $_POST['word'];
        $query = mysql_query("SELECT wordlist, mean FROM wordbank WHERE username='$username'");
        $result = mysql_fetch_array($query);
        $words = $result['wordlist'];
        $means = $result['mean'];
        $words = json_decode($words);
        $means = json_decode($means);
        $key = array_search($word, $words);
        array_splice($words, $key, 1);
        array_splice($means, $key, 1);
        $words = json_encode($words);
        $means = json_encode($means);
        mysql_query("UPDATE `wordbank` SET `wordlist`= '$words', `mean`='$means' WHERE username='$username'", $link);
    }
    else {
    	echo "No such commnad";
    }
?>