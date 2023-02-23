<?php
function multiply_lists($value1, $value2)
  {
    $list1 = explode(' ',trim($value1));
    $list2 = explode(' ',trim($value2));
    foreach($list1 as $key=>$value){
        $output[$key] = $list1[$key]*$list2[$key];
    }
    return implode(' ',$output);
}
echo "Output is : ";
echo multiply_lists(("15 14 13"), ("15 14 13"))."<br>";
?>