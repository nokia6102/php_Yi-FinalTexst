<?php
date_default_timezone_set("Asia/Taipei");

if (isset($_POST["action"]) && ($_POST["action"] == "add")) {

	print(">".$_POST["cID"]);
	print(">".$_POST["cTemp"]);
	require_once ("connMysql.php");
	//print "ok";
	$sql_query = "INSERT INTO `temperature_DB` (`userid`,`temperature`,`datatime`) VALUES (";
	$sql_query .= "'".$_POST["cID"]."',";
	$sql_query .= "'".$_POST["cTemp"]."',";
	$sql_query .= "'".date("Y/m/d H:i:s")."')";

	//print $sql_query;
	mysqli_query($conn, $sql_query);
	mysqli_close($conn);

	// header("Location: data.php");

}

//require_once("connMysql.php");
//$sql="SELECT * FROM `student`";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>溫度新增頁面</title>
</head>


<?php
//if ($result = mysqli_query($conn,$sql)){
//    $total_records = mysqli_num_rows($result);
//print $total_records;
?>
<form action="" method="post">
<h1>溫度新增頁面</h1>
<table width="425" border="1">
  <tbody>
    <tr>
      <td width="201">欄位</td>
      <td width="208">資料</td>
    </tr>
    <tr>
        <td>id</td>
        <td><input type="text" name="cID" size="50"></td>
    </tr>
    <tr>
       <td>temperatoure</td>
        <td><input type="text" name="cTemp" size="50"></td>
    </tr>
    </tr>
    <tr>
    <tr>
      <td colspan="2"><input name="button" type="submit" id="button"  value="新增資料">
      <input name="button" type="reset" id="button"  value="重新填寫">    </td>
     <input name="action" type="hidden" value="add">
    </tr>
  </tbody>
</table>
</form>

<?php
//mysqli_close($conn);
//}
?>

</body>
</html>