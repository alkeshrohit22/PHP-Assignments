<?php

// 13. Write a PHP script to remove all leading zeroes from a string
$price = "099.00 Rs.";
echo "Original Text : ".$price."<br />";
echo "<br />";

$out_price = ltrim($price, '0');
echo "Output String : ".$out_price."<br />";

//EOF