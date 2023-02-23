<?php
// First Way
// 1. Write a PHP script which will display the Cars in the following way using array
// a. BMW
// b. Dastun
// c. Honda
$cars = array("a"=>"BMW", "b"=>"Dastun", "c"=>"Honda");

foreach($cars as $key => $value){
    echo $key.". ".$value;
    echo "<br/>";
}

// 2.Write a PHP script to get the Second element of the above array
echo "<br />Second Element is : ";
echo $cars['b'];


?>