<?php

// 12. Write a PHP script to insert a string at the specified position in a given string
$text = "I am happy today!!!";
$add_value = "not ";
$postion = '5';

echo "Original String : ".$text."<br />";
echo "<br />";
$out_text = substr_replace($text ,$add_value, $postion, 0);
echo "Output text : ".$out_text."<br />";



//EOF