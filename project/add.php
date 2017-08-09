<?php
if (isset($_POST["action"]) && ($_POST["action"]=="add")){
    require_once("connMysql.php");
    //print "ok";
    $sql_query = "INSERT INTO `student` (`cName`,`cSex`,`cBirthday`,`eEmail`,`cPhone`,`cAddr`) VALUES (";
    $sql_query .= "'" . $_POST["cName"] . "',";
    $sql_query .= "'" . $_POST["cSex"] . "',";
    $sql_query .= "'" . $_POST["cBirthday"] . "',";
    $sql_query .= "'" . $_POST["eEmail"] . "',";
    $sql_query .= "'" . $_POST["cPhone"] . "',";
    $sql_query .= "'" . $_POST["cAddr"] . "')";
    // print $sql_query;
    mysqli_query($conn,$sql_query);
    mysqli_close($conn);

    header("Location: data.php");
}


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

</head>
<body>
<h1 align="center">學生管理系統 - 新增資料</h1>

<?php
//if ($result = mysqli_query($conn,$sql)){
   // $total_records = mysqli_num_rows($result);
    //print $total_records;
?>

<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post">
<table border="1" align="center" id="grad1">
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
        <td><input  type="radio" name="cSex" value="M" checked>男 <input  type="radio" name="cSex" value="F">女</td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" size="50"></td>
    </tr>
    <tr>
        <td>電郵</td>
        <td><input type="text" name="eEmail" size="50"></td>
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
        <button type="reset">重新填寫</button></td>
        
    </tr>


</table>
</form>



</body>
</html>