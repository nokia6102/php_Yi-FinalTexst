<?php
    require_once("connMysql.php");

    if (isset($_POST["action"]) && ($_POST["action"]=="delete") ){
        //print "ok";
        $sql_query = "DELETE FROM `student` WHERE `cID`=" . $_POST["cID"];
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

<script>
    function myFunction(){
        if (confirm("\n您確定要刪除這筆資料嗎?\n刪除後無法恢復\n")) return true;
        return false;
    }

</script>
</head>
<body>
<h1 align="center">學生管理系統 - 刪除資料</h1>

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
        <td><?php print  $row_result["cName"];?></td>
    </tr>
    <tr>
        <td>性別</td>
        <td>
        <?php if($row_result["cSex"]=="M") print "男";else print "女";?>
        </td>
    </tr>
    <tr>
        <td>生日</td>
        <td><?php print  $row_result["cBirthday"];?></td>
    </tr>
    <tr>
        <td>電子郵件</td>
        <td><?php print  $row_result["cEmail"];?></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><?php print  $row_result["cPhone"];?></td>
    </tr>
    <tr>
        <td>住址</td>
        <td><?php print  $row_result["cAddr"];?></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="delete">
        <input name="cID" type="hidden" value="<?php print  $row_result["cID"];?>">
        <!--
        <button type="submit">刪除資料</button> 
        -->

        <button onclick="return myFunction();">刪除這筆資料</button>

        <button type="reset">重新填寫</button>
        </td>
        
    </tr>


</table>
</form>

<?php

?>

</body>
</html>