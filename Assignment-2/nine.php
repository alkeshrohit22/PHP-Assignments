<?php

$num = array(21, 4, 56, 8, 23, 545, 2, 0, -1, 45);
rsort($num);
// print_r($num);

echo "Array in reverse  : ";
foreach($num as $v){
    echo $v.", ";
}

?>