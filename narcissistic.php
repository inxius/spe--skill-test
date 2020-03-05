<?php
  $sum = 0;
	$number = 153; //angka yg di cek
	$temp = $number;
	$totalDigits = strlen($number);

	while($number != 0) {
		$r = $number%10;
		$sum = $sum+pow($r, $totalDigits);
		$number = floor($number/10);
	}

	if($sum == $temp) {
		echo "true";
	} else {
		echo "false";
	}
 ?>
