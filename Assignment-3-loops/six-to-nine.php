<?php

$num = range(1, 10, 1);
$EvenSum = 0;
$OldSum = 0;

foreach($num as $n){
    echo $n." ";
}
echo "<br />";

//6. Write a PHP script to print all even numbers between 1 to 10
// even numbers
echo "Even Numbers are in between (1 to 10) :  ";
foreach($num as $v ){
    if($v%2 == 0){
        $EvenSum += $v;
        echo "$v ";
    }
}
echo "<br />";

//7. Write a PHP script to print all odd numbers between 1 to 10
//odd number
echo "Odd Numbers are in between (1 to 10) :   ";
foreach($num as $v ){
    if($v%2 != 0){
        $OddSum += $v;
        echo "$v ";
    }
}
echo "<br />";

//8. Write a PHP Script to sum of even numbers from 1 to 10
//Sum of even number
echo "Sum of Even Number in between (1 to 10) : $EvenSum <br/>";
 
//9. Write a PHP Script to sum of odd numbers from 1 to 10
// Sum of odd number
echo "Sum of Odd Number is between (1 to 10) : $OddSum <br/>";

?>