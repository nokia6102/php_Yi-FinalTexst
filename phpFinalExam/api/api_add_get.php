<?php


if (isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"])&& isset($_GET["cEmail"])&& isset($_GET["cPhone"])&& isset($_GET["cAddr"])){
require_once("connMysql.php");
    //print "ok";
$sql_query = "INSERT INTO `student` (`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`) VALUES (";
$sql_query .=  "'" . $_GET["cName"] . "',";
$sql_query .=  "'" . $_GET["sex"] . "',";
$sql_query .=  "'" . $_GET["cBirthday"] . "',";
$sql_query .=  "'" . $_GET["cEmail"] . "',";
$sql_query .=  "'" . $_GET["cPhone"] . "',";
$sql_query .=  "'" . $_GET["cAddr"] . "')";
//print $sql_query;
mysqli_query($conn,$sql_query);
mysqli_close($conn);
}
?>