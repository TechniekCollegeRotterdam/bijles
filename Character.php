    <?php

    Class Character
    {
        private string $name;
        private int $health;
        private int $power;
        private int $damage;
        private array $weapons = [];

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

        public function vikingattack(): string
        {
            return "viking heeft de volgende wapens:  <br>";
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

        public function getdamage(): int
        {
            return $damage;
        }

        public function setdamage(int $damage): void
        {
            $this->damage = $newdamage;
        }

        private function calculateTotalDamage(): int
        {
            $totalDamage = 0;
            foreach ($this->weapons as $weapon)
            {
                $totalDamage += $weapon->getdamage();
            }
            return $totalDamage;
        }



        public function listweapons(): void
        {
            foreach ($this->weapons as $weapon )
            {
                echo $weapon->getWeaponInfo();
            }

           echo "De totale schade van de character is: " . $this->calculateTotalDamage() . "<br>";
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