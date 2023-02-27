<?php

// 1. Write a PHP script to convert lowercase string to uppercase
$text = "Alkesh Rohit";
print ("Original String <br />");
print ($text. "<br />");
echo "<br />";

$upper_text = strtoupper($text);
print ("Uppercase String <br />");
print ($upper_text. "<br />");
echo "<br />";

// 2. Write a PHP script to convert uppercase string to lowercase
$lower_text = strtolower($text);
print("Lowercase String <br />");
print($lower_text);

//EOF