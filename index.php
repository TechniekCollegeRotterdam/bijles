<?php

require_once 'Character.php';
require_once 'Weapon.php';


$axe = new weapon('axe', 20, 2);

$axe->getWeaponInfo();

$ahmet = new Character('ahmet', 500, 40);

echo 'de naam van de character is: ' . $ahmet->getname() . '<br>';
echo 'de health van de character is: ' . $ahmet->gethealth() . '<br>';




$ahmet->name();

$ahmet->attack();