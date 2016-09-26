<?php 
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);
	include "./config.inc.php";
    session_start();

    $xpath;
    
    function word_mean($str) {
    	init_pageContent($str);
    	global $xpath;
        $raws = $xpath->query("//html/body/div/div/div/ul/li");
        $raw = $raws->item(2)->nodeValue;
        return str_ireplace($str,"", $raw);
    }
        
    function word_isExist($str) {   // If not exist...404 => didn't handle yet, but still work
	    init_pageContent($str);
	    global $xpath;
        $words = $xpath->query("//html/body/div/div/div/ul/li/a");
        for($i=2; $i<$words->length; $i++) {
            if($words->item($i)->nodeValue == $str)
                return true;
        }
        return false;
    }

    function init_pageContent($word) {
    	global $xpath;
    	$query_prefix = 'http://tw.websaru.com/display.php?action=search&word=';
	    $url = $query_prefix . $word;
	    $body = file_get_contents($url);

	    // Fetch data
	    $doc = new DOMDocument();
	    @$doc->loadHTML($body);
	    $xpath = new DOMXpath($doc);
    }
 ?>