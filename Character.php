<?php

class Character
{
    public string $name;
    public int $health;
    public int $power;
    public array $weapons = [];

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



    public function attack(): string
    {
        return "Knight heeft de volgende wapens:  <br>";
    }

    public function archerattack(): string
    {
        return "archer heeft de volgende wapens:  <br>";
    }


    public function name(): void
    {
        echo "de character is $this->name <br> ";
    }

    public function addWeapon(Weapon $weapon): void
    {
        $this->weapons[] = $weapon;
    }

    public function getWeapons(): array
    {
        return $this->weapons;
    }

    public function listweapons(): void
    {
        foreach ($this->weapons as $weapon)
        {
            echo $weapon->getWeaponInfo();
        }
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