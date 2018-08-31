<?php
/**
 * Sukurti klasę parduotuvė, ir savybę - prekės (masyvas).
 * Sukurti metodą, kurio pagalba būtų galima įdėti prekę: pavadinimas, kaina į parduotuvę.
 * Sukurti metodą top3, kuris gražintu tris pigiausias parduotuvėje esančias prekes.
 */
class parduotuve
{
    public $prekes = [];

    function ideti($pavadinimas, $kaina)
    {
        $this->prekes = new parduotuve($pavadinimas, $kaina);
    }

    function top3($top)
    {
       foreach($this->prekes as $preke){

       }

        }

}

$zz = new parduotuve ();
$zz->ideti('Suris', 3);
$zz->ideti('Mesa', 5);
$zz->ideti('Sultys', 4);
$zz->ideti('Ledai', 3);

$p = $zz->top3(3);
echo '<br>';
var_dump($p);