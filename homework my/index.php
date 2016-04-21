<?php
require_once "city.php";
require_once "man.php";
require_once 'woman.php';
require_once 'human.php';

$city = new City("Kramatorsk");

$house1 = new House("House1");
$man1 = new Man ("Boris");
$woman1 = new Woman("Olga");
$woman1->addRegistrationToHuman($house1);
$man1->addRegistrationToHuman($house1);
$city->buildHouse($house1);

$house2 = new House("House2");
$man2 = new Man("Max");
$woman2 = new Woman("Lena");
$woman2->addRegistrationToHuman($house2);
$man2->addRegistrationToHuman($house2);
$city->buildHouse($house2);

$city->printAllHouses();
echo '<hr />';
$man1->printAllRegistration();
$woman1->printAllRegistration();
echo '<hr />';
$man2->printAllRegistration();
$woman2->printAllRegistration();