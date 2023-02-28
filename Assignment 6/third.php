<?php

$student_info_arr = array(
    array(
        "name" => "Alkesh",
        "age" => 21,
    ),
    array(
        "name" => "Akshay",
        "age" => 49,
    ),
    array(
        "name" => "Virat",
        "age" => 35,
    ),
    array(
        "name" => "Cristiano",
        "age" => 39,
    ),
    array(
        "name" => "Iron Man",
        "age" => 100,
    ),
);

$student_info_json = json_encode($student_info_arr);
echo $student_info_json;

//EOF
