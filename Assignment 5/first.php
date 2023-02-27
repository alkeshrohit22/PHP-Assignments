<?php

//1. Write a function to reverse a string.

//reverse string function
function get_rev_string($text){
    return strrev($text);
}

$text = 'Alkesh Rohit';
echo "Original String : ".$text ."<br />";
echo "<br />";
echo "Reverse String : ";
echo get_rev_string($text);

//EOF