
<?php
$dbusername="root";
$dbpassword="icradle";
$server="localhost";
$dbname = "project";

$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);

$query = 'SELECT * FROM `app1` ' ;
if($is_query=mysqli_query($conn,$query)){
	echo "executed";
	while($rows = mysqli_fetch_assoc($is_query))
	{

	   $value = $rows['fromapp'];
	   
	  
	}

	switch($value){
		case '1':
			curl_operation('1');
		break;
		case '2':
			curl_operation('2');
		break;
		case '3':
			curl_operation('3');
		break;
		default:
			echo "no input";
		break;
	}


	
	   
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
