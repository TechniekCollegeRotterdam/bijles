<?php

class weapon
{

    public string $name;
    public int $damage;
    public int $range;

    public function __construct($name, $damage, $range)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;

    }

    public function getWeaponInfo()
{
   echo "Het wapen {$this->name} doet {$this->damage} schade en heeft een {$this->range} bereik.";
}

}

$axe = new weapon('axe', 20, 2);

$axe->getWeaponInfo();

