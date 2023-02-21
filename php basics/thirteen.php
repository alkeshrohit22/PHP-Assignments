<?php

function remove_duplicates_list($list1) {
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique ;
}

$nums = array(2,3,4,5,1,2,3,4);
print_r(remove_duplicates_list($nums));


?>