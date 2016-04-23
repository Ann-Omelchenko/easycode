<?php
 class Animals{

    protected $_name;
    protected $_id;

    public function __construct($id, $name) {
        $this->_id = $id;
        $this->_name = $name;
    }

    public function getId() {
        return $this->_id;
    }

    public function getName() {
        return $this->_name;
    }

    public function live(Room $room){
        $room ->addAnimals($this);
    }
}