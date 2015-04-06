<?php
//calc.php

$from = isset($_POST['from']) ? $_POST['from']: "";
$to = isset($_POST['to']) ? $_POST['to']: "";
$volume = isset($_POST['volume']) ? doubleval($_POST['volume']): "";
$mass = isset($_POST['mass']) ? doubleval($_POST['mass']): "";

$rate = 10.0;
$k =  $mass/($volume*1000.0);
if($k > 0.2){
	$price = $mass * $rate;
}elseif( $k < 0.2){
	$price = $volume * $rate;
}else{
	$price = max(array($mass * $rate, $volume * $rate));
}

echo $price.' <span class="rur">P</span>';

?>