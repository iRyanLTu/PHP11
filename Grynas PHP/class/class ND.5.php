<?php
/**
 * Sukurkite klasę prekė, kuri turi savybes: pavadinimas, kaina.
 * Sukurkite klasę parduotuvė, su savybe prekės (masyvas).
 * Sukurkite klasėje parduotuvė metodą tiekimas, kuris padeda prekę į savybę prekės kaip klasės prekė objekto egzempliorių.
 * Sukurkite parduotuvės metodą atrinkti, kuris atrenka ir gražina prekes (klasės prekė objektų masyvą)
 * pagal kainos intervalą: nuo min iki max. Pademonstruoti veikimą.
 */

class preke {
    public $pavadinimas, $kaina;
}

class parduotuve {
    public $prekes = [];

    function tiekimas ($pav, $kai){
        $this->prekes = new preke ($pav, $kai);
    }

    function atrinkti (){
        $s = 0;
        foreach ($this->prekes as $x){
            $s += $x->kai;
        }
        return sort($x->kai);
    }
}

$o = new parduotuve();
$o->tiekimas('Sausainiai', '3');
$o->tiekimas('Pica', '6');
$o->tiekimas('Ledai', '2');
$op = $o->atrinkti();
echo $op;
var_dump($o);