<?php

namespace bijles_opdracht;

class Character
{
public string $name;
public int $health;
public int $power;

public function __construct($name, $health, $power)
{
    $this->name = $name;
    $this->health = $health;
    $this->power = $power;

}
public function attack()
{
    echo "de character {$this->name} valt aan met kracht van {$this->power}";
}

}

$ahmet = new Character('ahmet', 500, 40);

$ahmet->attack();