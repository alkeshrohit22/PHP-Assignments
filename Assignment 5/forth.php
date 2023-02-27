<?php

/* 4. Write a PHP script to remove nonnumeric characters except comma and
    dot. Go to the editor
    a. Sample string : "$123,34.00A";
    b. Expected Output : 12,334.00
*/

//remove nonnumeric character 
function remove_nonunumeric_char($text){
    $regExp = "/[^0-9,.]/";
    $output = preg_replace($regExp, "", $text);
    return $output;
}

//main code
$value = "$123,34.00A";
echo "Original Value : ".$value."<br />";
echo "Expected Value : ";
echo remove_nonunumeric_char($value);

//EOF