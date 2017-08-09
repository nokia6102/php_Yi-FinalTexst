<?php
require_once ("connMysql.php");
$sql = "SELECT * FROM `temperature_DB`";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>溫度記錄</title>



</head>
<body>
<!-- <h1 align="center">學生管理系統</h1> -->

<?php
if ($result = mysqli_query($conn, $sql)) {
	$total_records = mysqli_num_rows($result);
	//print $total_records;
	?>

			<!--												<p align="center">目前資料筆數：<?php print$total_records?>，<a href="add.php">新增學生資料</a>。</p>-->
			<table border="3" align="center" id="grad1">
															    <tr>
															        <th>DataTime</th>
															        <th>Teamperature</th>
															        <th>user ID</th>


															    </tr>
	<?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		print"<tr>";
		print"<td>".$row["datatime"]."</td>";
		print"<td>".$row["temperature"]."</td>";
		print"<td>".$row["userid"]."</td>";

		print"</tr>";
	}

	?>
	</table>


	<?php
	mysqli_close($conn);
}
?>

</body>
</html>