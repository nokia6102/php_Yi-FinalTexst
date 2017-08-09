<?php
if (isset($_GET["cID"])){
    require_once("connMysql.php");
    $sql = "DELETE FROM `students` WHERE `cID`=" . $_GET["cID"];
    mysqli_query($conn,$sql);


    mysqli_close($conn);
}






?>