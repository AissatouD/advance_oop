<?php

declare(strict_type=1);

namespace MyClass;


class HumanClass
{

    /**
     * @var array
     */
    protected $firstname;

    /**
     * @var array
     */
    protected $lastname;


    /**
     * @gender type="array"
     */
    protected $gender;

    public function __construct(){

    $this->firstname = $this->setFirstname();
    $this->lastname = $this->setLastname();
    $this->gender = $this->setGender($this->firstname);

    }



    /**
     * @return array
     */
    public function setFirstname()
    {
        $firstname = array(
            'Jessy',
            'Gabriella',
            'Alicia',
            'Fally',
            'John',
            'Mickael');
        return $firstname[rand(0, count($firstname) -1)];
    }

    /**
     * @return array
     */
    public function setLastname()
    {
        $lastname = array(
            'Glynne',
            'Drille',
            'Smith',
            'Mccartney',
            'Williams',
            'Allen'
        );

        return $lastname[rand(0, count($lastname) -1)];
    }

    /**
     * @param $firstname
     * @return array
     */
    public function setGender($firstname)
    {
        $gender= array(
            'Homme',
            'Femme'
        );

        if($firstname === $firstname[0] || $firstname[1] || $firstname[2] ){
            return  $this->gender = $gender[1];
        }

        return $this->gender[0];
    }

    /**
     * @return array
     */
    public function getLastname()
    {
        return $this->lastname;
    }



    /**
     * @return array
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * @return array
     */
    public function getGender(){

        return $this->gender;
    }
}