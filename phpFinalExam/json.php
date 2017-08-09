
<?php
require_once ("connMysql.php");
$sql = "SELECT * FROM `temperature_DB` ORDER BY `datatime` DESC LIMIT 10";

if ($result = mysqli_query($conn, $sql)) {
	//print "ok";
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$json_arr[] = $row;
	}
	//print_r($json_arr);

	$json_result = json_encode($json_arr, JSON_UNESCAPED_UNICODE);

	print$json_result;
} else {
	print"false";
}
mysqli_close($conn);
?>