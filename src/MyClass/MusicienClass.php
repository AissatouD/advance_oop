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

    }


}