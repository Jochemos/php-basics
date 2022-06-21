<?php

  class Film{
    private $name;
    private $release;
    protected function __construct($name, $release){
      $this->name = $name;
      $this->release = $release;
    }
    protected function filmInfo(){
      echo "In " . $this->release . " released the film called " . $this->name . ". ";
    }
  }

  final class Actors extends Film{
    private $name;
    private $actor;
    private $release;

    public function __construct($name, $actor, $release){
      $this->name = $name;
      $this->release = $release;
      $this->actor = $actor;
      parent::__construct($name, $release);
      parent::filmInfo();
    }

    public function actorInfo(){
      echo "In " . $this->name . " main actor was " . $this->actor . ". ";
    }
  }

  $poc = new Actors("Pirates of the Caribbean", "Johnny Depp", 2001);
  $poc->actorInfo();
  // Result:
  // In 2001 released the film called Pirates of the Caribbean.
  // In Pirates of the Caribbean main actor was Johnny Depp.

  $gd = new Actors("Groundhog Day", "Bill Murray", 1993);
  $gd->actorInfo();
  // Result:
  // In 1993 released the film called Groundhog Day.
  // In Groundhog Day main actor was Bill Murray.

?>
