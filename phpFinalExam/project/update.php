<?php
    require_once("connMysql.php");

    if (isset($_POST["action"]) && ($_POST["action"]=="update") ){
        //print "ok";
        $sql_query = "UPDATE `student` SET";
        $sql_query .= "`cName`='" . $_POST["cName"] . "',";
        $sql_query .= "`cSex`='" . $_POST["sex"] . "',";
        $sql_query .= "`cBirthday`='" . $_POST["cBirthday"] . "',";
        $sql_query .= "`cEmail`='" . $_POST["cEmail"] . "',";
        $sql_query .= "`cPhone`='" . $_POST["cPhone"] . "',";
        $sql_query .= "`cAddr`='" . $_POST["cAddr"] . "'";
        $sql_query .= "WHERE `cID`=" . $_POST["cID"];
        //print $sql_query;
        mysqli_query($conn,$sql_query);
        mysqli_close($conn);

        header("Location: data.php");


    }


    $sql_db = "SELECT * FROM `student` WHERE `cID`=" . $_GET["id"];
    //print $sql_db;
    $result = mysqli_query($conn,$sql_db);
    $row_result = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //print_r($row_result);



    mysqli_close($conn);
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
        <td><input type="text" name="cName" size="50" value="<?php print  $row_result["cName"];?>"></td>
    </tr>
    <tr>
        <td>性別</td>
        <td>
        <input  type="radio" name="sex" value="M" <?php if($row_result["cSex"]=="M") print "checked";?>>男 
        <input  type="radio" name="sex" value="F" <?php if($row_result["cSex"]=="F") print "checked";?>>女
        </td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" size="50" value="<?php print  $row_result["cBirthday"];?>"></td>
    </tr>
    <tr>
        <td>電子郵件</td>
        <td><input type="text" name="cEmail" size="50" value="<?php print  $row_result["cEmail"];?>"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="cPhone" size="50" value="<?php print  $row_result["cPhone"];?>"></td>
    </tr>
    <tr>
        <td>住址</td>
        <td><input type="text" name="cAddr" size="100" value="<?php print  $row_result["cAddr"];?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="update">
        <input name="cID" type="hidden" value="<?php print  $row_result["cID"];?>">
        <button type="submit">更新資料</button> 
        <button type="reset">重新填寫</button>
        </td>
        
    </tr>


</table>
</form>

<?php

?>

</body>
</html>