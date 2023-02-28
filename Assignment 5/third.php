<?php

//3. Write a PHP function that checks whether a passed string is a palindrome or not?

//function to reverse string
function reverseString($text)
{
    for ($i = strlen($text) - 1, $j = 0; $j < $i; $i--, $j++) {
        $temp = $text[$i];
        $text[$i] = $text[$j];
        $text[$j] = $temp;
    }
    return $text;
}

//Function check palindrome string
function check_palindrome($orn, $rev)
{
    if ($orn == $rev) {
        echo "String is palindrome!!!";
    } else {
        echo "String is not palindrome!!!";
    }
}

$original_str = 'Hey! My name is Alkesh';
$rev_str = reverseString($original_str);

//caling palindrome checking
check_palindrome($original_str, $rev_str);

//EOF
