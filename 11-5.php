<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<boyd>


<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "class1";
$port       = 6003;

//create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

//check connection
if (mysqli_connect_error()) {
	print"failed to connect to mysql:".mysqli_connect_error();
} else {
	print"connect successfully<br>";
}

$sql = "SELECT * FROM `student`";

if ($result = mysqli_query($conn, $sql)) {
	print"the number of records is:".mysqli_num_rows($result)."<br>";
	print"the number of fields is:".mysqli_num_fields($result)."<br>";
	mysqli_free_result($result);

}

mysqli_close($conn);

?>

</body>

</html>