<?php
/**
 * Sukurti klase su konstruktorium kuris turi parametra atsitiktiniu skaiciu kiekis. Konstruktorius turi sugeneruoti atsitiktinius skaicius
 * savybeje - masyve, sukurti funkcija kuri paskaiciuotu skaiciu vidurky ir ji grazintu.
 */


class uzd
{
    public $skaiciai = [];

    function __construct($b)
    {
        for ($i = 0; $i < $b; $i++) {
            $this->skaiciai[$i] = rand(1, 50);

        }
    }

    function vidurkis()
    {
        $s = 0;
        foreach ($this->skaiciai as $e) {
            $s += $e;
        }
        return round($s / count($this->skaiciai), 2);
    }
}



$obj = new uzd (3);
echo $obj->vidurkis();