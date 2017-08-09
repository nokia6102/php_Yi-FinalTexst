<?php
require_once("connMysql.php");
$sql="SELECT * FROM `student`";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>學生管理系統</title>
</head>
<boyd>
<h1 align="center">學生管理系統</h1>

<?php
if ($result = mysqli_query($conn,$sql)){
    $total_records = mysqli_num_rows($result);
    //print $total_records;
?>

<p align="center">目前資料筆數：<?php print $total_records?>,<a href="add.php">新增學生資料</a>.</p>


<table border='1' align="center">
<tr>
    <th>座號</th>
    <th>姓名</th>
    <th>性別</th>
    <th>生日</th>
    <th>電子郵件</th>
    <th>電話</th>
    <th>住址</th>
    <th>功能</th>
</tr>

<?php
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        print "<tr>";
        print "<td>" . $row["cID"] . "</td>";
        print "<td>" . $row["cName"] . "</td>";
        print "<td>" . $row["cSex"] . "</td>";
        print "<td>" . $row["cBirthday"] . "</td>";
        print "<td>" . $row["cEmail"] . "</td>";
        print "<td>" . $row["cPhone"] . "</td>";
        print "<td>" . $row["cAddr"] . "</td>";
        print "<td><a href='update.php?id=" . $row["cID"] . "'>修改</a> ";
        print "<a href='delete.php?id=" . $row["cID"] . "'>刪除</a></td>";


        print "</tr>";


    }

?>
</table>


<?php
mysqli_close($conn);
}
?>

</body>

</html>