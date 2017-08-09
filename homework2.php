<?php

echo $_GET['username'];


echo $_GET['usersex'] == "male" ? "先生" : "小姐" ;
echo "!<br>";
echo "您好";

echo "學歷：" . $_GET['userschool'];
echo "<br>";
echo  "你喜歡的活動如下：";
echo "<br>";
// $userinterst = $_GET['userinterst'];
// print_r($userinterst);


 foreach ($_GET['userinterst'] as $interst)
    {echo "<li>";

            print "$interst<br/>";
echo  "</li>";

    }




?>