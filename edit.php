<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => '334', 'description' => 'Blue');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);