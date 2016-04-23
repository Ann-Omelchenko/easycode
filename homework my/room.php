<?php

class Room {
    const AGE_STUDENTS_RESTRICTION = 17;
    const AGE_STUDENTS_RESTRICTION1 = 24;
    
    public $name;
    public $students = array();
    public $animals = array();
    protected $_hostel;
    protected $_floor;
    protected $_studentsRestiction = 2;
    public $janitor;

    public function __construct($name) {
        $this->name = $name;
    }

    public function addStudents(Human $students) {

        if ($students->getAge() < self::AGE_STUDENTS_RESTRICTION ||
            $students->getAge() > self::AGE_STUDENTS_RESTRICTION1) {
            return false;
        }

        if (!$this->getFloor()->getStudentsById($students->getId())) {
            return false;
        }


        if ($this->getStudentsCount() >= $this->_studentsRestiction) {
            return false;

        }

            $this->students[$students->getId()] = $students;
               return true;

    }



    public function getStudentsCount() {
        return count($this->students);
    }


    public function addJanitor(Human $janitor) {

        if ($janitor->getAge() < self::AGE_STUDENTS_RESTRICTION1) {
            return false;
        }

        if (!$this->getFloor()->getJanitorById($janitor->getId())) {
            return false;
        }

        $this->janitor[$janitor->getId()] = $janitor;
        return true;

    }

    public function getJanitorCount() {
        return count($this->janitor);
    }

    public function addAnimals(Animals $animals) {
        $this->animals[$animals->getId()] = $animals;
        return true;

    }

    public function getAnimalsCount() {
        return count($this->animals);
    }



    public function getName() {
        return $this->name;
    }

    public function setHostel(Hostel $hostel) {
        $this->_hostel = $hostel;
    }

    public function getHostel() {
        return $this->_hostel;
    }

    public function setFloor(Floor $floor) {
        $this->_floor = $floor;
    }

    public function getFloor() {
        return $this->_floor;
    }


}