<?php
abstract class Human{

    public $name;
    public $sex;
    public $registration;

    public function name() {
    }

    public function sex() {
    }


    public function addRegistrationToHuman(House $objHouse){
        $this->housePull[$objHouse->getName()] = $objHouse;
    }

    public function getRegistration() {
        return $this->housePull;
    }

    public function printAllRegistration() {
        echo $this->name . "<br />";
        echo "<dev>";
        foreach ($this->getRegistration() as $house) {
            echo $house->getName();
            echo "<br />";
        }
    }
    
}