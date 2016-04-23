<?php
require_once 'floor.php';
require_once 'animals.php';
require_once 'man.php';
require_once 'woman.php';
class Hostel {

    const AGE_OWNER_RESTRICTION = 30;

    public $name;
    public $floorPull = array();
    public $roomPull = array();
    public $students = array();
    public $animals = array();
    public $janitor;
    protected $_ownerHostel;

    public function __construct($name) {
        $this->name = $name;
    }

    public function buildFloor(Floor $objFloor) {
        $objFloor->setHostel($this);
        $this->_addFloorToPull($objFloor);
    }

    protected function _addFloorToPull(Floor $objFloor) {
        $this->floorPull[$objFloor->getName()] = $objFloor;
    }

    public function getAllFloor() {
          return $this->floorPull;
    }
    
    public function buildRoom(Room $objRoom) {
        $objRoom->setHostel($this);
        $this->_addRoomToPull($objRoom);
    }

    protected function _addRoomToPull(Room $objRoom) {
        $this->roomPull[$objRoom->getName()] = $objRoom;
    }

    public function getAllRoom() {
        return $this->roomPull;
    }

    public function addStudents(Human $students) {
        $this->students[$students->getId()] = $students;
    }

    public function getStudentsCount() {
        return count($this->students);
    }

    public function getStudentsById($id) {
        return isset($this->students[$id])
            ? $this->students[$id]
            : false;
    }


    public function addJanitor(Human $janitor) {
        $this->janitor[$janitor->getId()] = $janitor;
    }

    public function getJanitorCount() {
        return count($this->janitor);
    }

    public function getJanitorsById($id) {
        return isset($this->janitor[$id])
            ? $this->janitor[$id]
            : false;
    }

    public function addAnimals(Animals $animals) {
        $this->animals[$animals->getId()] = $animals;
        return true;

    }

    public function getAnimalsCount() {
        return count($this->animals);
    }

    public function setOwnerHostel(Human $human){
        if ($human->getAge() < self::AGE_OWNER_RESTRICTION) {
            echo "Too young owner, take another candidate!";
        } else {
            $this->_ownerHostel = $human;
        }
    }

    public function getOwnerHostel() {
        return $this->_ownerHostel;
    }


}
