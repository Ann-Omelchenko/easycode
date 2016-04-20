<?php
require_once 'house.php';
class City {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __destruct() {
    }

    public function buildHouse(House $objHouse) {
        $this->addHouseToPull($objHouse);
    }

    public function addHouseToPull(House $objHouse) {
        $this->housePull[$objHouse->getName()] = $objHouse;
    }

    public function getAllHouses() {
        return $this->housePull;
    }

    public function printAllHouses() {
        echo $this->name .' has such houses: <br />';
        echo "<dev>";
        foreach ($this->getAllHouses() as $house) {
            echo $house->getName();
            echo "<br />";
        }
    }
}
