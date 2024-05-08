<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "yogaproject";

$link = mysqli_connect($host,$user,$password,$db);

if (!$link) {
	echo "Connection failed!";
}

?>