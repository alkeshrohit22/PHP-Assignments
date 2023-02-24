<?php

echo "All the numbers between 50 and 150 that are divisible by 4 <br />";
$arr = range(50, 150);

foreach($arr as $v){
    if($v%4 == 0){
        echo $v.", ";
    }
}

?>