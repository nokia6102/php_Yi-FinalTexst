<?php
$cart = array(
"orderID" => 12345,
"shopperName" => "tony yeh"
"shopperNmal" => "tony@gmail.com"
"contents" => array(
	array(
		"productId" => 34
		"productName" => "super"
		"quqntity" =>1
	)
)


)



$result = json_encode($cart);

print $result;

?>