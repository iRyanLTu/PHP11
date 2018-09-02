<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina padėtų į savo savybes.
 * Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę.
 * "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”.
 * "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”.
 * vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į
 * “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis.
 * "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama
 * prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
 */

class preke{
    public $kodas, $pavadinimas, $kaina;

    function __construct($kod, $pav, $kai){
        $this->kodas=$kod;
        $this->pavadinimas=$pav;
        $this->kaina=$kai;
    }
    function info (){
        $s= 'Kodas: %s, Pavadinimas: %s, Kaina: %s';
        echo sprintf($s, $this->kodas,$this->pavadinimas,$this->kaina);
    }
}
$msn = new preke(3232, 'Pienas', 10);
$msn->info();
echo '<br>';

class vaikams extends preke{

    function info (){
        $s= 'Kodas: %s, Pavadinimas: %s, Kaina: %s (vaikams)';
        echo sprintf($s, $this->kodas,$this->pavadinimas,$this->kaina);
    }

}
$msn = new vaikams(3232, 'Pienas', 10);
$msn->info();
echo '<br>';

class studentams extends preke{

    function info ($nuol){

        $s= 'Kodas: %s, Pavadinimas: %s, Kaina: %s (studentams)';
        echo sprintf($s, $this->kodas,$this->pavadinimas,$this->kaina);
    }

}

$msn = new studentams(3232, 'Pienas', 10);
$msn->info();