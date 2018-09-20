<?php
/**
 * Panaudodami prieš tai sukurtą klasę kursai, sukurkite klases backend ir frontend,
 * kurios paveldi kursai klasę. Kursai klasę papildykite metodu “info”,
 * kuris išvestų suformatuotą eilutę “Pavadinimas, lygis (mokinių skaičius)”.
 * backend klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į
 * “Pavadinimas, lygis (mokinių skaičius) - backend”. backend - tiesiog paprastas žodis.
 */


class kursai {
    public $pavadinimas, $lygis, $mokskc;

    function __construct($pav, $lyg, $moskc)
    {
        $this->pavadinimas=$pav;
        $this->lygis=$lyg;
        $this->mokskc=$moskc;
    }

    function info (){
        $s ='Pavadinimas: %s, Lygis: %s (mok. skaicius: %s)';
        echo sprintf($s, $this->pavadinimas, $this->lygis, $this->mokskc);
    }
}

class backend extends kursai {
    function info (){
        $s ='Pavadinimas: %s, Lygis: %s (mok. skaicius: %s) - backend.';
        echo sprintf($s, $this->pavadinimas, $this->lygis, $this->mokskc);
    }
}

class frontend extends kursai {

}

$nzn= new kursai('Jonas', 3, 20);
$nzn->info();
