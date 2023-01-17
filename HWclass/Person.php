<?php

class Person
{
    private $_fullName;

    public function __construct($_name)
    {
        $this->_fullName = $_name;
    }
    public function __toString()
    {
        return $this->_fullName;
    }

    public function getFullName(){
        return $this->_fullName;
    }
}