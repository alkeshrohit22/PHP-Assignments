<?php

// 11. Write a PHP script to remove a part of a string from the beginning
$text = "This is part of string remove from the string";
echo "Original String : ".$text."<br />";
echo "<br />";

$out_text = str_replace("part of string", "", $text);
echo "Output string : ".$out_text."<br />";