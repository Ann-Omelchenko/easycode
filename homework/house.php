<?php
require_once "woman.php";
require_once "man.php";

class House {

    public $name;
    public $housePull = array();

    public function __construct($name = null) {
        $this->name = $name;
    }

    public function __destruct() {
    }

    public function getName() {
        return $this->name;
    }

}