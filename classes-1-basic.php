<?php

  class Person{
    public $firstName;
    public $lastName;
    public $specialization;
    public $age;

    public function info(){
      echo $this->firstName . " is " . $this->age . " years old and is in the proffesion as " . $this->specialization . ". ";
    }
  }

  $person1 = new Person();

  $person1->firstName = "Thurman";
  $person1->lastName = "Merman";
  $person1->specialization = "Cook";
  $person1->age = 31;

  echo $person1->info();
  // Thurman is 31 years old and is in the proffesion as Cook.

  $person2 = new Person();

  $person2->firstName = "April";
  $person2->lastName = "May";
  $person2->specialization = "Gardener";
  $person2->age = 27;

  echo $person2->info();
  // April is 27 years old and is in the proffesion as Gardener.

  $person3 = new Person();

  $person3->firstName = "Will";
  $person3->lastName = "Power";
  $person3->specialization = "Junior Web Developer";
  $person3->age = 24;

  echo $person3->info();
  // Will is 24 years old and is in the proffesion as Junior Web Developer.

?>
