<?php
include_once 'functions.php';
$conn = db_connect();
$sql="INSERT INTO icradle (moisture, mic) VALUES ('".$moisture."','".$mic."')";
execute_query($conn, $sql);




