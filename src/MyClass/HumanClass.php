<?php

declare(strict_type=1);

namespace MyClass;


class HumanClass
{
    /**
     * @firstname type="string
     */
    protected $firstname;

    /**
     * @lastname type="string"
     */
    protected $lastname;

    /**
     * @gender type="array"
     */
    protected $gender;

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return array
     */
    public function setGender()
    {
        return $this->gender = array([
            'Man'=>1,
            'Woman'=>2
        ]);
    }


}