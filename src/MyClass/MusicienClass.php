<?php
declare(strict_type=1);

namespace MyClass ;


use MyInterface\ConcertInterface;
use MyInterface\GroupInterface;
use MyInterface\InstrumentsInterface;

class MusicienClass extends HumanClass  implements InstrumentsInterface, ConcertInterface, GroupInterface
{
    private $groupe;

    private $instrument_played;

    private $concert;

    public function __construct(){
        parent::__construct();

    }


    public function setGroup($arg){

    };

    public function setGroup_members(){

    };

    public function setInstrumentName(){

    };

    public function setInstrumentFamilly(){

    };

    public function setConcertName(){

    };

    public function setConcertDate(){

    };

    public function setConcertLocation(){

    };

}