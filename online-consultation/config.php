<?php

$hostname = "localhost";
/*$db_name = "online_consultation"; //local
$username = "root";
$password = "";*/
$db_name = "ichelik4_bkgarg"; //live
$username = "ichelik4_bkgrg_u";
$password = "4UGtdSPLuU";
$whatappnumber = '919818152059';

$response = array();
$conn = new mysqli($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
	$response = array('status' => 1);
	echo json_encode($response);
	die;
}else{  
	$conn = mysqli_connect($hostname, $username, $password, $db_name);
}
?>