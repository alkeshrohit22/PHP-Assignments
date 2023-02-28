<?php

//2. Write a PHP script to decode large integers.

//json data
$json_data = '{"number" : 1234567890987654321234}';

//convert into array
$arr_data = json_decode($json_data);

//type of data
var_dump($arr_data);


//EOF
