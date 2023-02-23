<?php

$num = range(1, 50, 1);
shuffle($num);
foreach($num as $x){
    echo($x.", ");
}

?>