<?php
$foo = array('a','b','c','d','e');
var_dump($foo);
function swap($index1, $index2, &$arr){
	$temp = $arr[$index1];
	$arr[$index1] = $arr[$index2];
	$arr[$index2] = $temp;
}
swap(0,1, $foo);
var_dump($foo);
?>