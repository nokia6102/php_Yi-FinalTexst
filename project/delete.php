<?php

require_once ("connMysql.php");

if (isset($_POST["action"]) && ($_POST["action"] == "delete")) {
	print"ok";
	$sql_query = "DELETE FROM `student` ";
	$sql_query .= " WHERE `cID`=".$_POST["cID"];
	print$sql_query;

	mysqli_query($conn, $sql_query);
	mysqli_close($conn);

	header("Location: data.php");

}

$sql_db = "SELECT * FROM `student` WHERE `cID`=".$_GET["id"];
//print $sql_db;
$result     = mysqli_query($conn, $sql_db);
$row_result = mysqli_fetch_array($result, MYSQLI_ASSOC);
//print_r($row_result);

mysqli_close($conn);

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
input {
    padding:7px;
    font-size: 13px;
    border-radius: 5px;
    border:1px;
    border-style: solid;
    border-color: #cccccc;
}
button {
    padding:7px;
    font-size: 13px;

}
</style>

<script>
function clicked(e)
{
    if(!confirm('你確定要刪除嗎?'))e.preventDefault();
}
</script>

</head>
<body>
<h1 align="center">學生管理系統 - 修改資料</h1>

<?php
//if ($result = mysqli_query($conn,$sql)){
// $total_records = mysqli_num_rows($result);
//print $total_records;
?>

<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post">
<table border="1" align="center" id="grad1" width="600px">
    <tr>
        <th>欄位</th>
        <th>資料</th>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?php print$row_result["cName"];?></td>
    </tr>
    <tr>
        <td>性別</td>
        <td>
<?php print$row_result["cSex"];?></td>

        </td>
    </tr>
    <tr>
        <td>生日</td>
        <td><?php print$row_result["cBirthday"];?></td>
    </tr>
    <tr>
        <td>電郵</td>
        <td><?php print$row_result["cEmail"];?></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><?php print$row_result["cPhone"];?></td>
    </tr>
    <tr>
        <td>住址</td>
        <td><?php print$row_result["cAddr"];?></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="delete">
        <input name="cID" type="hidden" value="<?php print$row_result["cID"];?>">
        <input type="submit" onclick="return confirm('你確定要刪除嗎?')" />
        <button type="submit">刪除</button>




        </td>

    </tr>


</table>
</form>



</body>
</html>