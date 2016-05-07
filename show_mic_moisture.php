<?php 
header('Access-Control-Allow-Origin: *');
$dbusername="root";
$dbpassword="icradle";
$server="localhost";
$dbname = "project";
$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
$query = 'SELECT * FROM `icradle` ' ;
if($is_query=mysqli_query($conn,$query)){
	while($rows = mysqli_fetch_assoc($is_query))
	{
		$value['moisture'] = $rows['moisture'];
	    $value['mic'] = $rows['mic'];
	}

	echo json_encode($value);

}

