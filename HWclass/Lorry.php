<?php

class Lorry extends Car
{
    private $_carring;

    public function __construct($_class_of_car, $_engine, $_driver,$_marka, $_carring)
    {
        $this->setDriver($_driver);
        $this->setCarClass($_class_of_car);
        $this->setEngine($_engine);
        $this->setTheMark($_marka);
        $this->_carring = $_carring;
    }


    public function getCarring()
    {
        return $this->_carring;
    }



    public function setCarring($carring)
    {
        $this->_carring = $carring;
    }

    public function __toString()
    {
        return $this->getDriver()."<br>".
            $this->getTheMark()."<br>".
            $this->getEngine()."<br>".
            $this->getCarClass()."<br>".
            "Грузопъемность автомобиля: ".$this->getCarring()."<br>";
    }
}