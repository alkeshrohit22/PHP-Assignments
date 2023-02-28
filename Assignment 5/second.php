<?php

//2. Write a function to sort an array.

//function to sort an array 
function mergesort(&$arr, $left, $right)
{
    if ($left < $right) {
        $mid = $left + (int) (($right - $left) / 2);
        mergesort($arr, $left, $mid);
        mergesort($arr, $mid + 1, $right);
        merge($arr, $left, $mid, $right);
    }
}

// for merging array function
function merge(&$arr, $left, $mid, $right)
{
    //create to temporary array temp1 and temp2
    $temp1 = $mid - $left + 1;
    $temp2 = $right - $mid;
    $leftArr = array_fill(0, $temp1, 0);
    $rightArr = array_fill(0, $temp2, 0);
    for ($i = 0; $i < $temp1; $i++) {
        $leftArr[$i] = $arr[$left + $i];
    }
    for ($i = 0; $i < $temp2; $i++) {
        $rightArr[$i] = $arr[$mid + $i + 1];
    }

    $x = 0;
    $y = 0;
    $z = $left;
    while ($x < $temp1 && $y < $temp2) {
        if ($leftArr[$x] < $rightArr[$y]) {
            $arr[$z] = $leftArr[$x];
            $x++;
        } else {
            $arr[$z] = $rightArr[$y];
            $y++;
        }
        $z++;
    }

    while ($x < $temp1) {
        $arr[$z] = $leftArr[$x];
        $x++;
        $z++;
    }

    while ($y < $temp2) {
        $arr[$z] = $rightArr[$y];
        $y++;
        $z++;
    }
}

//display function
function display_arr($number){
    foreach($number as $n){
        echo $n." ";
    }
}


$number = array(1, 5, 9, 3, 7, 4, -4, -3, -5);
echo "Original Array : ";
display_arr($number);
echo "<br />";

//calling function
mergesort($number, 0, sizeof($number) - 1);
echo "Sorted Array : ";
display_arr($number);


//EOF
