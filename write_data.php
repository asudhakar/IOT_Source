<?php
include_once 'functions.php';
$conn = db_connect();
$moisture = $_GET['moisture'];
$mic = $_GET['mic'];
$sql="INSERT INTO icradle (moisture, mic) VALUES ('".$moisture."','".$mic."')";
if(mysqli_query($conn,$query)){
	echo "Inserted";
}




