<?php

//17. Write a PHP script to select first 6 words from the following string
$text = 'Dhoni made his ODI debut on 23 December 2004, against Bangladesh in Chittagong,
and played his first Test a year later against Sri Lanka.';
echo "Original Text : ".$text."<br />";
echo "<br />";

$out_text = implode(' ', array_slice(explode(' ', $text), 0, 6)) . "<br/>";
print "Output Text : ".$out_text."<br />";

//EOF
