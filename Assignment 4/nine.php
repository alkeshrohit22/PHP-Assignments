<?php

//password generator
function password_generator(){
    $text = 'Write a PHP script to generate simple random password from a given string';
    $text = str_replace(' ', '', $text);
    return substr(str_shuffle($text), 0, 8);
}

echo "Password is : ";
echo password_generator();

//EOF