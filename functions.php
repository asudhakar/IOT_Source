<?php 


function db_connect(){
	$dbusername="root";
	$dbpassword="shibi123";
	$server="localhost";
	$dbname = "project";
	$moisture = $_GET['moisture'];
	$mic = $_GET['mic'];
	$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
	return $conn;
}

function curl_operation($unit){
	$url = "http://192.168.0.112/?".$unit;
	echo $url;
	// create a new cURL resource
	$ch = curl_init();

	// set URL and other appropriate options
	
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
}

function execute_query($conn, $query){
	return mysqli_query($conn,$query);
}