<?php

//3. Write a PHP function that checks whether a passed string is a palindrome or not?

//Function check palindrome string
function check_palindrome($text){
    if($text == strrev($text)){
        return 1;
    }
}

$string1 = 'Hey! My name is Alkesh Rohit.';
$value = check_palindrome($string1);

//Display Output
if($value == 1){
    echo "String is palindrome!!!";
}else{
    echo "String is not-palindrome!!!";
}


//EOF