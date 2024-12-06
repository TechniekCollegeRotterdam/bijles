<?php

class Character
{
    public string $name;
    public int $health;
    public int $power;

    public function __construct(string $name, int $health, int $power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;

    }


    public function getname():string
    {
        return $this->name;
    }


    public function setname($newname):void
    {
        $this->name = $newname;
    }

    public function gethealth():int
    {
        return $this->health;
    }

    public function sethealth($newhealth):void
    {
        $this->health = $newhealth;
    }



    public function attack(): void
    {
        echo "de character $this->name valt aan met kracht van $this->power <br> ";
    }

    public function name(): void
    {
        echo "de character is $this->name <br> ";
    }

}

//$ahmet = new Character('ahmet', 500, 40);
//
//$ahmet->setname('ahmet1');
//$ahmet->sethealth(1000);
//
//echo 'de naam van de character is: ' . $ahmet->getname() . '<br>';
//echo 'de health van de character is: ' . $ahmet->gethealth() . '<br>';



//$ahmet->attack();