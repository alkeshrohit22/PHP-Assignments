<?php
function armstrong_number($number) {
  $numberLen = strlen($number);
  $sum = 0;
  $number = (string)$number;
  for ($i = 0; $i < $numberLen; $i++) {
    $sum = $sum + pow((string)$number{$i},$numberLen);
  }
  if ((string)$sum == (string)$number) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? :  ".armstrong_number(15723)."<br>";
echo "Is 21 Armstrong number? :  ".armstrong_number(980)."<br>";
echo "Is 4587 Armstrong number? : ".armstrong_number(1634)."<br>";
?>