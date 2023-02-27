<?php

//14. Write a PHP script to remove comma(s) from the following numeric string
$value = '5,555.55';
echo "original Value : ".$value."<br />";
echo "<br />";

$out_value = str_replace(",","", $value);
echo "Output Value : ".$out_value."<br />";


//EOF