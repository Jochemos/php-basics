<?php

  $var = 'no constant variable';

  define('CONSTANT', 'constant variable');

  echo "$var is define by $, but " . CONSTANT . " by define('name', 'value')";

?>
