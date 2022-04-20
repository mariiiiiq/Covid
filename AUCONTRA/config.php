
<?php
define('DB_SEVER', 'remotemysql.com');
define('DB_USERNAME', 'vjZ4qTbGHC');
define('DB_PASSWORD', 'GxcjONT2ka');
define('DB_NAME', 'vjZ4qTbGHC');

$link = mysqli_connect(DB_SEVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
	die("ERROR: Could not connect." .mysqli_connect_error());
}
?>
