<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “darbuotojas”, kuri turi savybes - vardas, pavardė, amžius.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus - vardas, pavardė, amžius
 * - perduotus parametrus padėtų į savo savybes.
 * Panaudodami prieš tai sukurtą klasę darbuotojas, sukurkite klases vadybininkas ir darbininkas,
 * kurios paveldi darbuotojas klasę. Darbuotojas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę
 * “Vardas, Pavardė (amžius)”. Vadybininkas klasėje perrašykite metodą info, pakeisdami
 * išvedamą eilutę į “Pavardė, Vardas, vadybininkas”. Vadybininkas - tiesiog paprastas žodis.
 */


class darbuotojas {
    public $vardas, $pavarde, $amzius;

    function __construct($vrd, $pvd, $amz)
    {
        $this->vardas=$vrd;
        $this->pavarde=$pvd;
        $this->amzius=$amz;
    }

    function info(){

        $s = "Vardas: %s, Pavarde(amzius): %s, %s.";
        echo sprintf($s, $this->vardas, $this->pavarde, $this->amzius);
    }
}
class vadybininkas extends darbuotojas{

    function info(){

        $s = "Pavarde: %s, Vardas: %s, vadybininkas.";
        echo sprintf($s, $this->pavarde, $this->vardas);
    }

}
class darbininkas extends darbuotojas {

    function info(){

        $s = "Vardas: %s, Pavarde: %s, darbininkas.";
        echo sprintf($s, $this->vardas, $this->pavarde);
    }

}

$o = new darbuotojas('Petras', 'Petraitis', 23);
$o->info();
echo '<br>';
$on = new vadybininkas('Jonas', 'Jonaitis', 55);
$on->info();
echo '<br>';
$onn = new darbininkas('Kazys', 'Kazaitis', 34);
$onn->info();