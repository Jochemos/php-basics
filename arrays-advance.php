<?php

  $arrKind = array('pop', 'hip-hop', 'rock', 'dubstep', 'next-genre');
  $arrAuthors = array(
    'Beyonce' => $arrKind[0],
    'A$AP Ferg' => $arrKind[1],
    'Bon Jovi' => $arrKind[2],
    'Skrillex' => $arrKind[3],
    'Cyberpunk OST' => $arrKind[4]
  );

  $arrLength = count($arrKind);

  // FOR loop
  for($i = 0; $i < $arrLength; $i++){
    echo $arrKind[$i];
    echo ', ';
  };

  // FOREACH loop
  foreach($arrAuthors as $key => $item){
    echo $key . " is known by " . $item;
    echo ', ';
  }

?>
