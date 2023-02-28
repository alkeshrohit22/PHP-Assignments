<?php
//1. Write a PHP script to decode a JSON string.

//json data
$student_info = file_get_contents('student.json');

//Convert json to array
$student_info_arr = json_decode($student_info, true);
$len = sizeof($student_info_arr);

for ($i = 0; $i < $len; $i++) {
    echo "<li> Student First Name : " . $student_info_arr[$i]['first name'] . "</li>";
    echo "<li> Student Last Name : " . $student_info_arr[$i]['last name'] . "</li>";
    echo "<li> Student ID : " . $student_info_arr[$i]['id'] . "</li>";
    echo "<br />";
}
// print_r($student_info_arr);

//EOF
