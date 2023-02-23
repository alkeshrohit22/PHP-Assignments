<?php
$names = array('Alkesh', 'Rohit', 'Krunal', 'Jani', 'Manali', 'Himanshu', 'Soham');
$len_of_names = array_map('strlen', $names); 

echo "The shortest name length is " . min($len_of_names) ."<br/ > The longest name length is " . max($len_of_names).'.';
?>