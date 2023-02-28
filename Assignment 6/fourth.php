<?php

//4. Write a PHP function to display JSON decode errors.


//Display function
function display_error($json_value)
{
    //converting into array
    $json_arr[] = $json_value;


    foreach ($json_arr as $value) {
        
        json_decode($value, true);
        echo "Identified error is :- ";
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                echo ' No errors' . "<br />";
                break;
            case JSON_ERROR_DEPTH:
                echo ' Maximum stack depth exceeded' . "<br />";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' Underflow or the modes mismatch' . "<br />";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' Unexpected control character found' . "<br />";
                break;
            case JSON_ERROR_SYNTAX:
                echo ' Syntax error, malformed JSON' . "<br />";
                break;
            case JSON_ERROR_UTF8:
                echo ' Malformed UTF-8 characters, possibly incorrectly encoded' . "<br />";
                break;
            default:
                echo ' Unknown error' . "<br />";
                break;
        }
    }
}

//Fetch value from json file
$json_value = file_get_contents('student.json');

//calling function
display_error($json_value);

//EOF
