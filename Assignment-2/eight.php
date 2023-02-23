<?php

function value_not_zero($value){
    return min(array_diff(array_map('intval', $value),array(0)));
}

$arr = array(12, 56, 23, -90, -99, 0, 67, 0);
$value = value_not_zero($arr);
echo "Min value which is not zero is : $value";
?>