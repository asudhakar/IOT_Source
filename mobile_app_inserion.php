<?php 
$dbusername="root";
$dbpassword="shibi123";
$server="localhost";
$dbname = "project";
$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
$input = $_GET['input'];
switch ($input) {
	case 'servo':
		if(insert(1, $conn)){
			inserted();
		} else{
			not_inserted();
		}
		break;
	case 'mp3':
		if(insert(2, $conn)){
			inserted();
		} else{
			not_inserted();
		}
		break;
	case 'blower':
		if(insert(3, $conn)){
			inserted();
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

