<?php
$dbusername="root";
$dbpassword="shibi123";
$server="localhost";
$dbname = "project";
$moisture = $_GET['moisture'];
$mic = $_GET['mic'];

$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);

$sql="INSERT INTO icradle (moisture, mic) VALUES ('".$moisture."','".$mic."')";
mysqli_query($conn, $sql);

echo "success";
?>



