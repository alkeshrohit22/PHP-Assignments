<?php

function valueCompare($value){
    $number = $value > 30
    ? "greater than 30 <br>"
    : ($value > 20
        ? "greater than 20 <br>"
        : ($value >10
            ? "greater than 10 <br>"
            : "Input a number atleast greater than 10! <br>")); 
                
            echo $value." : ".$number."\n";
}

valueCompare(54);
valueCompare(24);
valueCompare(01);
?>