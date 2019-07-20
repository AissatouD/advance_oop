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

    private $instrument_family;

    private $concertName;

    private $concertLocation;

    private $concertDate;

    public function __construct(){
        parent::__construct();

        $this->groupe = $this->setGroup();
        $this->instrument_played = $this->setInstrumentName();
        $this->instrument_family = $this->setInstrumentFamilly($this->instrument_played);
        $this->concertName = $this->setConcertName();
        $this->concertDate = $this->setConcertDate($this->concertName);
        $this->concertLocation = $this->setConcertLocation($this->concertName);



    }


    public function setGroup(){
        $groupe = array(
            'Pink Ladies',
            'Banana Monkeys',
            'Moonlight folks'


        );

        return $groupe[rand(0, count($groupe) -1)];

    }


    public function setInstrumentName(){
        $instruments = array([
             'Violon',
             'Piano',
             'Tambour',
             'Batterie',
             'Flute',
             'Saxophone'
        ]);

        return $instruments[rand(0, count($instruments) -1)];

    }

    public function setInstrumentFamilly($instruments){
        if ($instruments === $instruments[0] || $instruments[1]){
            $instrument_familly = 'Famille des Cordes';

            return $instrument_familly;
        }

        else if($instruments === $instruments[2] || $instruments[3]){
            $instrument_familly = 'Famille des Percussion';

            return $instrument_familly;

        }

        return $instrument_familly = 'Famille des Vents';

    }

    public function setConcertName(){

        $concertName = array([
            'Festival des vieilles Charues',
            'Rock en Seine',
            'Cochella',
        ]);

        return $concertName[rand(0, count($concertName) -1)];

    }

    public function setConcertDate($concertName){

        if($concertName === $concertName[0]){
            $dateConcert = '21 Avril 2020 : 19H30';
            return $dateConcert;
        }

        elseif ($concertName === $concertName[1]){
            $dateConcert = '12 Mars 2019 : 20H30';
            return $dateConcert;
        }

        return $dateConcert = '09 Décembre 2020 : 2030';

    }

    public function setConcertLocation($concertName){

        $location = array(
            'Quimper, France',
            'Paris, France',
            'California, Etats-unis'

        );

        return $location[rand(0, count($location) -1)];

    }

}