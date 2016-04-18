<?php
require_once "eat.php";
require_once "moveable.php";
require_once "speakable.php";
abstract class Human implements Eatable, Movable, Speakable
{
    public $age;
    protected $_prot;
    private $_priv;
    public function walk() {
        $this->_prot;
        echo 'i can walk';
    }
    public function speak() {
        echo 'i can sing song';
    }
    public function eat();
    public function move();
}
