<?php
require_once 'human.php';
require_once 'city.php';
require_once 'house.php';
class Man extends Human
{
    public function __construct($name = null){
        $this->name =$name;
    }

    public function getName() {
        parent::name();
        return "{$this->name}";
    }

    public function setName($name) {
        return $this->name = $name;
    }

}