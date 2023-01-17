<?php

class Driver extends Person
{
    private $_experience;

    public function __construct($_name, $_experience)
    {
        parent::__construct($_name);
        $this->$_experience = $_experience;
    }

    public function __toString()
    {
        return $this->getFullName() . " имеет ". $this->getExperience() . " лет водительского стажа!";
    }

    public function getExperience(){
        return $this->_experience;
    }

}