<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'ecommerce';

mysqli_report(MYSQLI_REPORT_STRICT);
try {
	$conn = new mysqli($servername,$username,$password,$databasename);
	date_default_timezone_set('Asia/Kolkata');
	
} catch (Exception $ex) {
	echo "connection failed".$ex->getMessage();
}

?>