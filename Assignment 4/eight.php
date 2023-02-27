<?php

//8. Write a PHP script to replace the first ‘the’ of the following string with ‘best’
$text = 'remove the from the string and place best.';
echo "Original String : ".$text."<br />";
echo "<br />";

echo "Output String : ";
echo preg_replace('/the/', 'best', $text, 1)."<br />"; 

//EOF