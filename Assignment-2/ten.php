<?php
$num1 = array(1, 2, 3, 0, 8, 4, 5);
$num2 = array(7, 8, 4, 6, 9, 0);
$output = array();


$output = array_merge(array_intersect($num1, $num2), array_diff($num1, $num2), array_diff($num2, $num1));
print_r($output);
?>