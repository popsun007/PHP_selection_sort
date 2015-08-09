<?php

$numbers = array();
for($i=0; $i<100; $i++){
	$numbers[] = (rand(1, 10000));
}
var_dump($numbers);
function selection_sort($arr){
	for($i=0; $i<count($arr); $i++){
		$min = $arr[$i];
		for($j=$i+1; $j<count($arr); $j++){
			if ($min > $arr[$j]){
				$min = $arr[$j];
				$min_idx = $j;
			}
		}	
		if ($arr[$i] > $min){
			$temp = $arr[$i];
			$arr[$i] = $arr[$min_idx];
			$arr[$min_idx] = $temp;
		}
	}
	var_dump($arr);
}
selection_sort($numbers);
?>