<?php

$text = "hey!, I am alkesh rohit";
echo "Original text :  ".$text."<br />";
echo "<br />";

//3. Write a PHP script to convert first character uppercase
$first_upper = ucfirst($text);
echo "First Character uppercase text : ".$first_upper."<br />";
echo "<br />";

//4. Write a PHP script to convert first character of all the words uppercase
$all_first_upper = ucwords($text);
echo "All first word uppercase : ".$all_first_upper."<br />";
echo "<br />";

//EOF