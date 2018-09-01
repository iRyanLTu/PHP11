<?php
/**
Frontend'e sukurti post formą svečio informacijai įvesti: vardas (text), lytis (radio), patiekalas (select),
apibūdinimas (textarea). Backend'e sukurti svečio klasę su svečio savybėmis.
Konstruktotiaus pagalba įdėti svečio post duomenis į klasės egzemplioriaus savybes.
Pademonstruoti svečio klasės egzempliorių su var_dump.
 */

class svecias{
    public $vardas, $vyr, $mot, $patiek;

    function __construct($var, $vyras, $moteris, $patiekalas){

        $this->vardas=$var;
        $this->vyr=$vyras;
        $this->mot=$moteris;
        $this->patiek=$patiekalas;

    }
}

$z = new svecias($_POST['Vardas'], $_POST['Vyr'], $_POST['Mot'], $_POST['Patiek']);
var_dump($_POST);