<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<body>


<?php

$servername = "localhost";
$username   = "root";
$passward   = "";
$database   = "class1";
$port       = 6033;

$conn = mysqli_connect($servername, $username, "", $database, $port);
if (mysqli_connect_error()) {
	print"failed to connect to mysql:".mysqli_connect_error();
} else {
	print"connect successfully";
}

mysqli_close($conn);

?>