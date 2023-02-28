<?php

//swaping function
function swap_arr(&$arr, &$j)
{
    $temp = $arr[$j];
    $arr[$j] = $arr[$j + 1];
    $arr[$j + 1] = $temp;
}

//Bubble sort function
function bubble_sort(&$arr)
{
    $len = sizeof($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                swap_arr($arr, $j);
            }
        }
    }
}

//Display Function
function display_array($value)
{
    foreach ($value as $v) {
        echo $v . " ";
    }
    echo "<br />";
}

$num = array(3, 6, 8, 2, 9, 0, 1);
echo "Original Array : ";
display_array($num);
echo "<br />";
bubble_sort($num);
echo "Sorted array using bubble sort : ";
display_array($num);

//EOF
