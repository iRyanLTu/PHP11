<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-30
 * Time: 18:51
 */
class preke {
    public $pavadinimas, $kaina;
    function __construct($p, $k)
    {
          $this->pavadinimas = $p;
          $this->kaina = $k;
    }
}

class parduotuve {
    public $prekes = [];
    function tiekimas ($pav, $kai){
        $this->prekes[] = new preke($pav, $kai);
    }
    function atrinkti ($min, $max) {
        $mas = [];
        foreach($this->prekes as $preke){
            if ($preke->kaina>= $min && $preke->kaina<= $max) {
                $mas[] = $preke;
            }
        }
        return $mas;
    }
}

$o = new parduotuve ();
$o->tiekimas('Arbuzas', 4);
$o->tiekimas('Grietine', 3);
$o->tiekimas('Suris', 15);
$o->tiekimas('Ikrai', 25);
$o->tiekimas('Vynas', 100);

$m = $o->atrinkti(10, 300);
echo '<br>';
var_dump($m);