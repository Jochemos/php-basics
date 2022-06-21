<?php

  class Film{
    public $name;
    public $release;

    public function __construct($name, $release = "soon"){
      $this->name = $name;
      $this->release = $release;
    }

    public function info(){
      echo "The film called '" . $this->name . "' was released in " . $this->release . ". ";
    }

  }

  $film1 = new Film("Avatar", 2009);
  $film1->info();
  // The film called 'Avatar' was released in 2009.

  $film2 = new Film("Avatar 2", 2022);
  $film2->info();
  // The film called 'Avatar 2' was released in 2022.

  $film3 = new Film("Avatar 3");
  $film3->info();
  // The film called 'Avatar 3' was released in soon.

?>
