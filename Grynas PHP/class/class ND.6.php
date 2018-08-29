<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “šalis”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, žemynas.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, žemynas
 *  perduotus parametrus padėtų į savo savybes. Sukurkite klases "didelė" ir "maza", kurios paveldi "šalis" klasę.
 * "šalis" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, žemynas”.
 * "didelė" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, žemynas (didelis šalis)”.
 * didelė šalis ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
 */
class salis{
    public $pavadinimas, $gyventojai, $zemynas;

    function __construct($pav, $gyv, $zem)
    {
        $this->pavadinimas = $pav;
        $this->gyventojai = $gyv;
        $this->zemynas = $zem;
    }
    function info (){
        $s = 'Pavadinimas: %s, Gyventojai: %s, Zemynas: %s';
        echo sprintf($s, $this->pavadinimas, $this->gyventojai, $this->zemynas);
    }

}


class didele extends salis {
    function info (){
        $s = 'Pavadinimas: %s, Gyventojai: %s, Zemynas: %s (didele salis)';
        echo sprintf($s, $this->pavadinimas, $this->gyventojai, $this->zemynas);
    }
}

class maza extends salis {

    function info (){
        $s = 'Pavadinimas: %s, Gyventojai: %s, Zemynas: %s (maza salis)';
        echo sprintf($s, $this->pavadinimas, $this->gyventojai, $this->zemynas);
    }

}

$mk = new salis('Lietuva', '3 mil.', 'Europa');
$mk->info();
echo '<br>';
$mk = new didele('JAV', '300 mil.', 'Amerika');
$mk->info();
echo '<br>';
$mk = new maza('Andora', '300 tukst.', 'Europa');
$mk->info();