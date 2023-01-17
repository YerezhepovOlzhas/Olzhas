<?php

class SportCar extends Car
{
    private $_speed;

    public function __construct($_class_of_car, $_engine, $_driver,$_marka, $_speed)
    {
        $this->setDriver($_driver);
        $this->setCarClass($_class_of_car);
        $this->setEngine($_engine);
        $this->setTheMark($_marka);
        $this->$_speed = $_speed;
    }
    public function getSpeed()
    {
        return $this->_carring;
    }
    public function setSpeed($_speed)
    {
        $this->$_speed = $_speed;
    }

    public function __toString()
    {
        return $this->getDriver()."<br>".
            $this->getTheMark()."<br>".
            $this->getEngine()."<br>".
            $this->getCarClass()."<br>".
            "Максимальная скорость: ".$this->getSpeed()."<br>";
    }
}