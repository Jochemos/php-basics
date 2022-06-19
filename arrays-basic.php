<?php

  // casual array
  $arrText = array('Tomb Raider', 'Grand Theft Auto', 'Uncharted');

  echo $arrText[0];

  // associative array
  $arrPrice = array('Tomb Raider' => '20$', 'Grand Theft Auto' => '40$', 'Uncharted' => '15$');

  echo $arrPrice['Tomb Raider'];

  // multi-vortex array
  $arrThree = array(
    $arrText[0], 'TR' => 'available',
    $arrText[1], 'GTA' => 'to order',
    $arrText[1], 'UD', 'UN' => 'not available'
  );

  echo $arrThree['TR'];

  // should emerge construction of array with details
  var_dump($arrText);

  // should emerge construction of array in shortcut
  print_r($arrText);

?>
