<?php


if (isset($_POST["cName"]) && isset($_POST["cSex"]) && isset($_POST["cBirthday"])&& isset($_POST["cEmail"])&& isset($_POST["cPhone"])&& isset($_POST["cAddr"])){
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
}
?>