<?php
require_once ("connMysql.php");
$sql = "SELECT * FROM `student`";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>學生管理系統</title>

<style>
table {
    border-collapse: collapse;
    border-radius: 25px;
    background: #cccccc;
}

table, td, th {
    border: 1px solid black;
    padding:20px;
    border-color:#ffffff;

}
tr:hover {

    background: db9cf4; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, #db9cf4, #98e9f2); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #db9cf4, #98e9f2); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #db9cf4, #98e9f2); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #db9cf4, #98e9f2); /* Standard syntax (must be last) */
        }

#grad1 {

    background: 7ad8ef; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, #7ad8ef, yellow); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #7ad8ef, yellow); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #7ad8ef, yellow); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #7ad8ef, yellow); /* Standard syntax (must be last) */
}

h1 {
    color: white;
    text-shadow: 0px 0px 10px #000000;
    font-size: 50px;
}


</style>

</head>
<body>
<h1 align="center">學生管理系統</h1>

<?php
if ($result = mysqli_query($conn, $sql)) {
	$total_records = mysqli_num_rows($result);
	//print $total_records;
	?>

			<p align="center">目前資料筆數：<?php print$total_records?>，<a href="add.php">新增學生資料</a>。</p>
			<table border="1" align="center" id="grad1">
			    <tr>
			        <th>座號</th>
			        <th>姓名</th>
			        <th>性別</th>
			        <th>生日</th>
			        <th>電子郵件</th>
			        <th>電話</th>
			        <th>地址</th>
			        <th>功能</th>

			    </tr>
	<?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		print"<tr>";
		print"<td>".$row["cID"]."</td>";
		print"<td>".$row["cName"]."</td>";
		print"<td>".$row["cSex"]."</td>";
		print"<td>".$row["cBirthday"]."</td>";
		print"<td>".$row["cEmail"]."</td>";
		print"<td>".$row["cPhone"]."</td>";
		print"<td>".$row["cAddr"]."</td>";
		print"<td><a href='update.php?id=".$row["cID"]."'>修改</a> |
        <a href='delete.php?id=".$row["cID"]."'>刪除</a></td>";

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