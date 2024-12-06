<?php

require_once 'Character.php';
require_once 'Weapon.php';


$axe = new weapon('axe', 25, 2);
$bow = new weapon('bow', 15, 35);

//$axe->getWeaponInfo();

$knight = new Character('knight', 100, 50);
$archer = new Character('archer', 100, 20);

//echo 'de naam van de character is: ' . $ahmet->getname() . '<br>';
//echo 'de health van de character is: ' . $ahmet->gethealth() . '<br>';


$knight->addWeapon($axe);
$knight->addWeapon($bow);

$archer->addWeapon($bow);

echo $knight->attack();

$knight->listweapons();

echo $archer->archerattack();

$archer->listweapons();



//$knight->name();
//
//echo $knight->attack();