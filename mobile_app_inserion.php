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
			echo "1 inserted";
		}
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
	echo $value;
	$sql = "INSERT INTO app1 (fromapp) VALUES('".$value."')";
	echo "$sql";
	mysqli_query($conn, $sql);
	return true;
}