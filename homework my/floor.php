<?php
require_once 'room.php';

class Floor
{
    public $name;
    public $roomPull = array();
    public $animals = array();
    protected $_hostel;
    public $students;
    public $janitor;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function buildRoom(Room $objRoom)
    {
        $objRoom->setFloor($this);
        $this->_addRoomToPull($objRoom);
    }

    protected function _addRoomToPull(Room $objRoom)
    {
        $this->roomPull[$objRoom->getName()] = $objRoom;
    }

    public function getAllRoom()
    {
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

    public function getJanitorById($id) {
        return isset($this->janitor[$id])
            ? $this->janitor[$id]
            : false;
    }

   

     public function setHostel(Hostel $hostel) {
         $this->_hostel = $hostel;
     }

     public function getHostel() {
         return $this->_hostel;
     }

    public function getName() {
        return $this->name;
    }
}