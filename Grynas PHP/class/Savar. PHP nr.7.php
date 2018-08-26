<?php
/**
 * Yra klase su savybe - masyvu, konstruktoriaus pagalba sugeneruoti n atsitiktiniu skaiciu intervale nuo a iki b,
 * metodo pagalba suskaiciuoti nelyginiu skaiciu suma ir grazinti ja.
 */

class uzd2
{

    public $mas = [];

    function __construct($n, $a, $b)
    {
        for ($i = 0; $i < $n; $i++) {
            $this->mas[$i] = rand($a, $b);
        }
    }

    function metodas(){
        $s = 0;
        foreach ($this->mas as $e) {
            if ($s += $e % 2 != 0);
        }
        return $s;
    }


}
$obj = new uzd2 (10, 23, 50);
echo $obj->metodas();