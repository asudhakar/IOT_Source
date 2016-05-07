<?php 
$dbusername="root";
$dbpassword="icradle";
$server="localhost";
$dbname = "project";
$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
$input = $_GET['input'];
switch ($input) {
	case 'servo':
		if(insert(1, $conn)){
			inserted();
			call_url();
		} else{
			not_inserted();
		}
		break;
	case 'mp3':
		if(insert(2, $conn)){
			inserted();
			call_url();
		} else{
			not_inserted();
		}
		break;
	case 'blower':
		if(insert(3, $conn)){
			inserted();
			call_url();
		} else{
			not_inserted();
		}
		break;
	default:
		echo "Sorry";
		break;
}
function insert($value, $conn){
	$sql = "INSERT INTO app1 (fromapp) VALUES('".$value."')";
	mysqli_query($conn, $sql);
	return true;
}

function inserted(){
	$arr = array ('inserted');
	echo json_encode($arr);
}

function not_inserted(){
	$arr = array ('not inserted');
	echo json_encode($arr);
}

function call_url(){
	$url = "http://192.168.0.106:8080/icradle/dba1.php";//system
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
}
