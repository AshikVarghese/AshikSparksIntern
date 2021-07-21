<?php
$db_host = "localhost";
$db_user = "id17285722_root";
$db_pass = "|3^eaWlN)iZoSS<v";
$db_name = "id17285722_internship";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Failed to connect to the Database '.mysqli_connect_error();
}
?>
