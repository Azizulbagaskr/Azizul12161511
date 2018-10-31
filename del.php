<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => '334');
$result = $myStripe->delproduct($data);
echo "<pre>"; print_r($result);
?>