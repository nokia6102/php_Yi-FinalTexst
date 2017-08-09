<!-- for -->
<table width="1000" border="3">
  <tbody>
<?php
for ($i = 2; $i <= 9; $i++) {
	echo "<tr>";
	for ($j = 2; $j <= 9; $j++) {
		$mutil = $i*$j;
		echo "<td width= 100 > $i x $j = $mutil  </td>";
	}
	echo "</tr>";
}
?>
</tbody>


