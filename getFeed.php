<?php
// $url = "http://localhost:8080/Favor/work/open";
// $feed = curl_init($url);

// $json = curl_exec($feed);
// curl_close($feed);


$json = file_get_contents('http://localhost:8081/Favor/work/open'); // this WILL do an http request for you
$feedArray = json_decode($json);
//echo $feedArray[1]->workId;


foreach ($feedArray as $feedItem) {
	echo $feedItem->workId."\n";
	# code...
}
// //echo $json;

// $feedArray = json_decode($json);

// echo $feedArray[0]->cost;
?>