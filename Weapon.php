<?php

class weapon
{

    private string $name;
    private int $damage;
    private int $range;


    public function __construct(string $name, int $damage, int $range)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;


    }

    public function getWeaponInfo() : string
{
   return "Het wapen {$this->name} doet {$this->damage} schade en heeft een {$this->range} bereik. <br>";
}

public function getdamage(): int
{
    return $this->damage;
}


}

//$axe = new weapon('axe', 20, 2);
//
//$axe->getWeaponInfo();

