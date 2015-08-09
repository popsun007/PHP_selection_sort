<?php

$numbers = array();
for($i=0; $i<100; $i++){
	$numbers[] = (rand(1, 10000));
}
echo "<b>Original Array: </b><br>";
var_dump($numbers);

function swap($index1, $index2, &$arr){
	$temp = $arr[$index1];
	$arr[$index1] = $arr[$index2];
	$arr[$index2] = $temp;
}

function selection_sort($arr){
	$last = count($arr) - 1;
	$time_start = microtime(true);
	for($i=0; $i<count($arr)-$i; $i++){
		$min_idx = $i;
		$max_idx = $last - $i;
		for($j=$i; $j<count($arr)-$i; $j++){
			if ($arr[$min_idx] > $arr[$j]){
				$min_idx = $j;
			}
			if ($arr[$max_idx] < $arr[$j]){
				$max_idx = $j;
			}
		}	
		swap($i, $min_idx, $arr); // swap the minimun to the head of the array;
		if ($i == $max_idx) {
			$max_idx = $min_idx;
		}
		swap($last-$i, $max_idx, $arr); // swap the maximum to the end of the array;
	}
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "<font color='red'>The sort took: " . $time . " second(s).</font><br>";
	echo "<b>Sorted Array: <br></b>";
	var_dump($arr);
}
selection_sort($numbers);

?>
