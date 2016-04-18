<?php

abstract class Human
{
    public $age;
    

    public function walk() {
        
        echo 'i can walk';
    }

    public function speak() {
        echo 'i can sing song';
    }

    abstract public function eat();
}