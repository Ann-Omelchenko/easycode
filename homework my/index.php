<?php
require_once "student hostel.php";


$hostel = new Hostel("Hostel 1");
$floor1 = new Floor('#1');
$floor2 = new Floor('#2');
$room1 = new Room("#12");
$room2 = new Room('#64');
$hostel->buildFloor($floor1);
$hostel->buildFloor($floor2);
$floor2->buildRoom($room1);
$floor2->buildRoom($room2);

$man = new Man(1, "Alexander Andreevich", 40);
$man1 = new Man (2, 'Boris', 19);
$man2 = new Man(3, 'Max', 22);
$woman1 = new Woman(4,'Olga', 20);
$woman2 = new Woman(5, "lena", 21);
$woman = new Woman(6, "Elena Sergeevna", 60);
$animals = new Animals(7, "cockroach");

$hostel->setOwnerHostel($man);
$hostel->addStudents($man1);
$hostel->addStudents($man2);
$hostel->addStudents($woman1);
$hostel->addStudents($woman2);
$hostel->addJanitor($woman);
$hostel->addAnimals($animals);

$floor1->addJanitor($woman);
$floor2->addStudents($man1);
$floor2->addStudents($man2);
$floor2->addStudents($woman1);
$floor2->addStudents($woman2);


$man1->live($room1);
$man2->live($room1);
$woman1->live($room2);
$woman2->live($room2);
$animals->live($room1);

echo '<pre>';
print_r($hostel);
echo '</pre>';






