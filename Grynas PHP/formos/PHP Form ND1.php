<?php
/**
Frontend'e sukurti post formą svečio informacijai įvesti: vardas (text), lytis (radio), patiekalas (select),
apibūdinimas (textarea). Backend'e sukurti svečio klasę su svečio savybėmis.
Konstruktotiaus pagalba įdėti svečio post duomenis į klasės egzemplioriaus savybes.
Pademonstruoti svečio klasės egzempliorių su var_dump.
 */

class svecias{
    public $vardas, $vyr, $mot, $visavalgis, $vegetaras, $veganas;

    function __construct($var, $vyras, $moteris, $visk, $veget, $vegan){

        $this->vardas=$var;
        $this->vyr=$vyras;
        $this->mot=$moteris;
        $this->visavalgis=$visk;
        $this->vegetaras=$veget;
        $this->veganas=$vegan;

    }
}

$z = new svecias($_POST['Vardas'], $_POST['Lytis'], $_POST['Patiekalas'], $_POST['Visavalgis'], $_POST['Vegetaras'], $_POST['Veganas']);
var_dump($_POST);