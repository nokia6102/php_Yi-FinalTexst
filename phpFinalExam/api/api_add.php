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