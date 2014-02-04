<?php
$months = $_GET['month']
$days=0;

if(in_array($months, array('jan','mar','may','july',
							'aug','oct','dec'))){
	$days = 31;
}
elseif (in_array($months, array('apr','june','sep','nov'))){
	$days = 30;
}
elseif($months == 'feb'){
	$days = 28;
}
else{
	$days = false;
}

if($years !== false){
	echo json_encode(
		array(
			'months' => $months,
			'result' => 'success',
			'days' => $days)
		);
} else {
	echo json_encode(
		array(
			'months' => $months,
			'result' => 'failed')
		);
}


?>