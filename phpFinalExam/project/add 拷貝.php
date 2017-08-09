<?php
if (isset($_POST["action"]) && ($_POST["action"]=="add") ){
    require_once("connMysql.php");
    //print "ok";
    $sql_query = "INSERT INTO `student` (`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`) VALUES (";
    $sql_query .=  "'" . $_POST["cName"] . "',";
    $sql_query .=  "'" . $_POST["sex"] . "',";
    $sql_query .=  "'" . $_POST["cBirthday"] . "',";
    $sql_query .=  "'" . $_POST["cEmail"] . "',";
    $sql_query .=  "'" . $_POST["cPhone"] . "',";
    $sql_query .=  "'" . $_POST["cAddr"] . "')";
    //print $sql_query;
    mysqli_query($conn,$sql_query);
    mysqli_close($conn);

    header("Location: data.php");

}






//require_once("connMysql.php");
//$sql="SELECT * FROM `student`";


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>學生管理系統</title>
</head>
<body>
<h1 align="center">學生管理系統 - 新增資料</h1>

<?php
//if ($result = mysqli_query($conn,$sql)){
//    $total_records = mysqli_num_rows($result);
    //print $total_records;
?>

<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post">
<table border="1" align="center">
    <tr>
        <th>欄位</th>
        <th>資料</th>
    </tr>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" size="50"></td>
    </tr>
    <tr>
        <td>性別</td>
        <td><input  type="radio" name="sex" value="male" checked>男 <input type="radio" name="sex" value="female">女</td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" size="50"></td>
    </tr>
    <tr>
        <td>電子郵件</td>
        <td><input type="text" name="cEmail" size="50"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="cPhone" size="50"></td>
    </tr>
    <tr>
        <td>住址</td>
        <td><input type="text" name="cAddr" size="100"></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="add">
        <button type="submit">新增資料</button> 
        <button type="reset">重新填寫</button>
        </td>
        
    </tr>


</table>
</form>

<?php
//mysqli_close($conn);
//}
?>

</body>
</html>