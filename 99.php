
"月份"
<?php
$season = 9;
echo "$season 月 ";
if ($season >=10 && $season <=12)
{
    echo "冬";
}
else if  ($season >=7 && $season <=9)
{
    echo "秋";
}
else if ($season >=4 && $season <=6)
{
    echo "夏";
}
else if ($season >=1 && $season <=3)
{
    echo "春";
}
?>
<br>
"while"
<table width="1000" border="3">
  <tbody>
  <?php
$i=1;
while(++$i<=9)
{
    echo "<tr>";
     $j=1;
    while(++$j<=9)
    {
      $mutil =  $i*$j;  
      echo "<td width= 100 > $i x $j = $mutil  </td>";
    }
    echo "</tr>";
 }
   ?>
  </tbody>
</table>


"for"
<table width="1000" border="3">
  <tbody>
  <?php
for ($i=2;$i<=9;$i++)
{
    echo "<tr>";
    for ($j=2;$j<=9;$j++)
    {
      $mutil =  $i*$j;
      echo "<td width= 100 > $i x $j = $mutil  </td>";
    }
    echo "</tr>";
 }
   ?>
  </tbody>
</table>

 
 "do-while" 
 

<table width="1000" border="3">
  <tbody>
  <?php
$i=2;
do
{
    echo "<tr>";
     $j=2;
    do
    {
      $mutil =  $i*$j;
      echo "<td width= 100 > $i x $j = $mutil  </td>";
      $j++;
    }
    while ( $j<=9 );
    echo "</tr>";
   $i++;
 }
 while ( $i<= 9) ;
   ?>
  </tbody>
</table>
