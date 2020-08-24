<?php

include_once 'Dancer.php';

class Couple
{
    private $male;
    private $female;

    public function __construct()
    {
        $this->male = array();
        $this->female = array();
        $this->couple = array();
    }

    public function getMale()
    {
        return $this->male;
    }

    public function setMale($male)
    {
        $this->male = $male;
    }

    public function getFemale()
    {
        return $this->female;
    }

    public function setFemale($female)
    {
        $this->female = $female;
    }

    public function addDancer($dancer)
    {
        if ($dancer->getGender() == 'male') {
            array_push($this->male, $dancer);
        } else {
            array_push($this->female, $dancer);
        }
    }

    public function setCouple()
    {
        $arr = array();
        $dancerMale = array_shift($this->male);
        $dancerFemale = array_shift($this->female);
        array_push($arr, $dancerMale, $dancerFemale);
        array_push($this->couple, $arr);
    }

    public function displayCouple()
    {
        return $this->couple;
    }

}