<?php
include_once 'functions.php';
$conn = db_connect();
$query = 'SELECT * FROM `app1` ' ;
$result=execute_query($conn,$query);
while($rows = mysqli_fetch_assoc($result))
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


	
	   


