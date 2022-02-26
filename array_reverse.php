<?php 
$A = [
	"a" => "Zero",
	"b" => "Weapon",
	"c" => "Alpha",
	"d" => "Processor"
];
asort($A);
$A = array_reverse($A);
print_r($A);
?>