<?
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "class1";
$port       = 6033;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if (mysqli_connect_error()) {
	print"failed to connect to mysql:".mysqli_connect_error();
} else {
	//print "connect successfully<hr>";

}

mysqli_query($conn, "SET NAMES utf8");
?>