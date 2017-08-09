<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<body>


<?php

$row0 =  array (64,65);
$row1 =  array (77,81);
$row2 =  array (89,93);


$grades = array($row0,$row1,$row2);

$grades[1][0] = 30;

$total = 0;
for($i = 0; $i< count($grades) ; $i++)
{
	$sum = 0;
	for ($j=0 ; $j<count($grades); $j++)
	{
		$sum = 0;
		for ($j = 0 ; $j<count ($grades[$i]) ; $j++)
		{
			print $grades[$i][$j]	. " ";
		}
	}
}
?>


</body>
</html>