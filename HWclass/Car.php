<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/HWclass/Engine.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/HWclass/Driver.php';
class Car
{
    private $_carClass;
    private $_engine;
    private $_driver;
    private $_the_mark;

    public function __construct($_class_of_car, $_engine, $_driver, $_marka)
    {
        $this->_carClass = $_class_of_car;
        $this->_engine = $_engine;
        $this->_driver = $_driver;
        $this->_marka = $_marka;
    }


    public function getCarClass()
    {
        return $this->_carClass;
    }


    public function setCarClass($carClass)
    {
        $this->_carClass = $carClass;
    }

    public function getDriver()
    {
        return $this->_driver;
    }


    public function setDriver($driver)
    {
        $this->_driver = $driver;
    }

    public function getTheMark()
    {
        return $this->_the_mark;
    }


    public function setTheMark($the_mark)
    {
        $this->_the_mark = $the_mark;
    }

    public function getEngine()
    {
        return $this->_engine;
    }


    public function setEngine($engine)
    {
        $this->_engine = $engine;
    }

    public function start()
    {
        echo "Поехали";
    }

    public function stop()
    {
        echo "Останавливаемся";
    }

    public function turnRight()
    {
        echo "Поворот направо";
    }

    public function turnLeft()
    {
        echo "Поворот налево";
    }

    public function __toString()
    {
        return $this->getDriver() . "<br>" . $this->getEngine() . "<br>" . "Класс автомобиля: " . $this->getCarClass() . "<br>" . "Марка автомобиля: " . $this->getTheMark();
    }
}