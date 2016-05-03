<?php 
include_once 'functions.php';
$conn = db_connect();
$input = $_GET['input'];
switch ($input) {
	case 'servo':
		insert(1, $conn);
		echo "1 inserted";
		break;
	case 'mp3':
		insert(2, $conn);
		echo "2 inserted";
		break;
	case 'blower':
		insert(3, $conn);
		echo "3 inserted";
		break;
	default:
		echo "Sorry";
		break;
}
function insert($value, $conn){
	$sql = "INSERT INTO app1 (fromapp) VALUES('".$value."')";
	execute_query($conn, $query);
}