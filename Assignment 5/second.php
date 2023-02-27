<?php

//2. Write a function to sort an array.

//function to sort an array
function sort_array($arr){
    sort($arr);
    echo "Sorted Array : ";
    display_arr($arr);
}

//Display function
function display_arr($number){
    foreach($number as $n){
        echo $n." ";
    }
}


$number = array(1, 5, 9, 3, 7, 4);
echo "Original Array : ";
display_arr($number);
echo "<br />";

//calling function
sort_array($number);

//EOF