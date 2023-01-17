<?php

class Engine
{
    private $_power;
    private $_company;


    public function getCompany()
    {
        return $this->_company;
    }
    public function getPower()
    {
        return $this->_power;
    }

    public function __toString(){
        return "Производство: ".$this->getCompany()." имеет ".$this->getPower()." Мощность!";
    }
}