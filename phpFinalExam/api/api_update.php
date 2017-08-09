<?php

if (isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"])&& isset($_GET["cEmail"])&& 
isset($_GET["cPhone"])&& isset($_GET["cAddr"]) && isset($_GET["cID"])){
        require_once("connMysql.php");
        $sql_query = "UPDATE `student` SET";
        $sql_query .= "`cName`='" . $_GET["cName"] . "',";
        $sql_query .= "`cSex`='" . $_GET["sex"] . "',";
        $sql_query .= "`cBirthday`='" . $_GET["cBirthday"] . "',";
        $sql_query .= "`cEmail`='" . $_GET["cEmail"] . "',";
        $sql_query .= "`cPhone`='" . $_GET["cPhone"] . "',";
        $sql_query .= "`cAddr`='" . $_GET["cAddr"] . "'";
        $sql_query .= "WHERE `cID`=" . $_GET["cID"];
        //print $sql_query;
        mysqli_query($conn,$sql_query);
        mysqli_close($conn);
}


if (isset($_POST["cName"]) && isset($_POST["cSex"]) && isset($_POST["cBirthday"])&& isset($_POST["cEmail"])&& isset($_POST["cPhone"])&& isset($_POST["cAddr"]) && isset($_POST["cID"])){
        require_once("connMysql.php");
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

}


?>