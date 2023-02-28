<?php

//1. Write a function to reverse a string.

//reverse string function
function get_rev_string($text){
    for($i=strlen($text)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $temp = $text[$i];
        $text[$i] = $text[$j];
        $text[$j] = $temp;
    }
    return $text;
}

$text = 'Alkesh Rohit';
echo "Original String : ".$text ."<br />";
echo "<br />";
echo "Reverse String : ";
echo get_rev_string($text);



//EOF