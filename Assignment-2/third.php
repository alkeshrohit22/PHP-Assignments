<?php
// Write a PHP script that inserts a new item in an array in any position
$arr1 = array('Alkesh', 'Rohit', 'Krunal', 'Jani', 'Manali', 'Himanshu', 'Soham');
$value = "NewName";

print_r("Before Insertion : <br />");
foreach($arr1 as $v){
    echo $v."<br>";
}

echo "<br />";
echo "After Insertion element at third postion : <br/>";
array_splice($arr1, 2, 0, $value);
foreach($arr1 as $v){
    echo $v."<br>";
}
?>