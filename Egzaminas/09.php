<?php

class person {
    public $name, $surname, $age;

    function __construct($nam, $sur, $a)
    {
        $this->name=$nam;
        $this->surname=$sur;
        $this->age=$a;
    }

    function asmensDuomenys (){
        $s ='Vardas: %s, Pavarde: %s (amzius: %s)';
        echo sprintf($s, $this->name, $this->surname, $this->age);
    }


}

class staff extends person {

    function asmensDuomenys (){
        $s ='Pavarde: %s, Vardas: %s, darbuotojas ';
        echo sprintf($s, $this->surname, $this->name);
    }

}

class client extends person {

}

$m = new person("Jonas", "Jonaitis", 25);
$m->asmensDuomenys();
echo '<br>';
$p = new staff("Petras", "Petraitis", 30);
$p->asmensDuomenys();