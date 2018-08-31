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
}

usort($this->prekes, function ($a, $b) {
});

$lowest = array_slice($this->prekes, 0, 3);


$obj= new parduotuve();
$obj->ideti('Suris', 3);
$obj->ideti('Mesa', 5);
$obj->ideti('Sultys', 4);
$obj->ideti('Ledai', 3);
var_dump($obj);