<?php
/**
 * Sukurti klase auto su savybemis: gamintojas, modelis, metai, kaina. Sukurti konstruktoriu kurio pagalba butu galima uzpildyti savybes
 * sukurti kita klase turgus su savybe masinos, sukurti antrai klasei metoda kurio pagalba butu galima perduoti automobilio duomenis
 * sukurti pagal siuos duomenis pirmos klases egzemploriu ir patalpinti i savybe masinos. Sukurti antrai klasei metoda -
 * vidurkis, kuris paskaiciuotu turguje esanciu masinu vidutine verte ir grazintu. $this->auto[$i]->kaina
 */

class auto
{
    public $gamintojas, $modelis, $metai, $kaina;

    function __construct($gam, $mod, $met, $kai)
    {
        $this->gamintojas=$gam;
        $this->modelis=$mod;
        $this->metai=$met;
        $this->kaina=$kai;
    }

}
class turgus {
    public $masinos=[];

    function metodas($gami, $mode, $meta, $kain){
          $this->masinos = new auto ($gami, $mode, $meta, $kain);
    }

    function vidurkis (){
        $s = 0;
        foreach ($this->masinos as $masina) {
            $s += $masina->kaina;
        }
        return $s / count($this->masinos);
    }
}
$o = new turgus ();
$o->metodas('Honda', 'Civic', 2005, 2000);
$o->metodas('BMW', 'M3', 2003, 2100);
$o->metodas('VW', 'Golf', 2001, 1800);
$vidurkis = $o->vidurkis();
echo $vidurkis;
var_dump($o);