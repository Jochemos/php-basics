<?php

  // random string from where should pull out only no repeat numbers like 1, 2, 3
  $values = "12rfh33344abcd890";

  define('ITEMS', str_split($values));

  $sum = array();

  foreach(ITEMS as $item){
    if(is_numeric($item) and !in_array($item, $sum)){
      array_push($sum, $item);
    }
  }

  define('RESULT', $sum);

  echo "numbers on string is " . implode(",", RESULT);

?>
