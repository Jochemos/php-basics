<?php

  abstract class Platform {

    const PLATFORM_TEXT = " for platform ";
    const GAME_TEXT = "This is game called ";

    abstract protected function platformInfo();
    abstract protected function gameInfo();

  }

  class Game extends Platform {

    private $game;
    private $platform;

    public function __construct($game, $platform){
      $this->game = $game;
      $this->platform = $platform;
    }

    protected function platformInfo(){
      return Platform::PLATFORM_TEXT . $this->platform;
    }

    protected function gameInfo(){
      return Platform::GAME_TEXT . $this->game;
    }

    public function read() {

      $game = $this->gameInfo();
      $platform = $this->platformInfo();

      return $game . $platform . '. ' ;
    }

  }

  $ktk = new Game("Kao the Kangaroo", "PlayStation 4");
  $rdr = new Game("Red Dead Redemption 2", "PlayStation 5");
  $wtr = new Game("The Witcher 3", "PC");

  echo $ktk->read();
  // This is game called Kao the Kangaroo for platform PlayStation 4.

  echo $rdr->read();
  // This is game called Red Dead Redemption 2 for platform PlayStation 5.

  echo $wtr->read();
  // This is game called The Witcher 3 for platform PC.

?>
