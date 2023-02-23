<?php

$tempArr = array(24, 40, 23, 50, 12, 35 , 67, 12, 23, 8, 4, 44, 51, 31, 25);
$avgTemp = 0;
$total = 0;
$len = sizeof($tempArr);
$lowTemp = array();
$highTemp = array();

// Total temp in cel
foreach($tempArr as $t){
    $total += $t;
}

// Average Temp is 
$avgTemp = $total / $len;
echo "Average Temp is : $aveTemp";

sort($tempArr);

//5 lowest temp  
for($i = 0 ; $i < 5 ; $i++ ){
    $value = $tempArr[$i];
    array_push($lowTemp, $value);
}

// 5 highest Temp
$count = 0;
for($i = $len; $i >= 0; $i--){
    array_push($highTemp, $tempArr[$i]);
    $count += 1;

    if(sizeof($highTemp) == 6){
        break;
    }
}

echo "<br />5 Lowest temp is : ";
foreach($lowTemp as $low){
    echo $low." ";
}

echo "<br />5 Highest temp is : ";
foreach($highTemp as $high){
    echo $high." ";
}
?>