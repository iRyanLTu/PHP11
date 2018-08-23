<?php
/**
 * Sukurti klase ir metoda, klase turi tureti savybe, masyva. Metodo parametrai tekstas, skaicius, funkcija turi
 * atsitiktiniu budu ismaisyti teksto simbolius ir ideti i masyva tiek kartu kiek nurodyta antrame parametre su var dump
 * isvesti klases egzemplioriaus turiny.
 */

class isv {

    public $mas = [];

    function gen($tekstas, $skaicius)
    {
        for ($i = 0; $i < $skaicius; $i++) {
            $this->mas[$i] = str_shuffle ($tekstas);
        }
    }
}

$ooo = new isv();
$ooo ->gen('labas rytas',3);
var_dump($ooo);
