<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “kursas”, kuri turi savybes ‐ data, skaicius, auditorija.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija
 * perduotus parametrus padėtų į savo savybes. Sukurkite klases pirmas ir antras, kurios paveldi kursas klasę.
 * kursas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”.
 * pirmas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (pirmas kursas)”.
 * pirmas kursas ‐ tiesiog paprastas žodis. antras klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į
 * “data, skaicius, auditorija (antras kursas)”. antras kursas ‐ tiesiog paprastas žodis.
 * Patkrinkite visų trijų klasių metodo “info” veikimą.
 */

class kursas {
    public $data, $skaicius, $auditorija;

    function __construct($dat, $skai, $aud)
    {
     $this->data = $dat;
     $this->skaicius = $skai;
     $this->auditorija = $aud;
    }

    function info (){
        $s = 'Data: %s, Skaicius: %s, Auditorija: %s';
        echo sprintf ($s, $this->data, $this->skaicius, $this->auditorija);
    }
}

class pirmas extends kursas {

    function info (){
        $s = 'Data: %s, Skaicius: %s, Auditorija: %s (pirmas kursas)';
        echo sprintf ($s, $this->data, $this->skaicius, $this->auditorija);
    }

}


class antras extends kursas {

    function info (){
        $s = 'Data: %s, Skaicius: %s, Auditorija: %s (antras kursas)';
        echo sprintf ($s, $this->data, $this->skaicius, $this->auditorija);
    }

}

$mpn = new kursas('2018.08.29', '23', '320' );
$mpn->info();
echo '<br>';
$mpn = new pirmas('2018.08.29', '35', '277');
$mpn->info();
echo '<br>';
$mpn = new antras('2018.08.29', '22', '134');
$mpn->info();