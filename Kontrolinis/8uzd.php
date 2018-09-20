<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “kursai”,
 * kuri turi savybes - pavadinimas, lygis, mokinių skaičius.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris pavadinimus -  pavadinimas, lygis, mokinių
 * skaičius skaičius - perduotus parametrus padėtų į savo savybes.
 */


class kursai {
    public $pavadinimas, $lygis, $mokskc;

    function __construct($pav, $lyg, $moskc)
    {
        $this->pavadinimas=$pav;
        $this->lygis=$lyg;
        $this->mokskc=$moskc;
    }
}
