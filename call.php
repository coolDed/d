<?php 
require_once "Math_Complex.php";
$obj = new MathComplex;
$obj->re = 16.7;
$obj->im = 101;
$obj->add(18.09, 303);
echo "({$obj->re}, {$obj->im})";
?>