<?
$servername = "localhost";
$username   = "root";
$password   = "1234";
$database   = "IOT";
$port       = 6033;

//create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

//check connection
if (mysqli_connect_error()) {
	print"failed to connect to mysql:".mysqli_connect_error();
} else {
	//print "connect successfully<br>";
}

mysqli_query($conn, "SET NAMES utf8");
?>