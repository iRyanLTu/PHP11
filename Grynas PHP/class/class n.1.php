<?php
/**
 Sukurti klase ir metoda, valiutos konvr. i eur. (Kaip ir php nd9)
 */
class pinigai {
    function konv($kiek, $val){
        $eur = 0;
        switch ($val){
            case 'USD': $eur = $kiek / 1.15; break;
            case 'GBP': $eur = $kiek / 0.89; break;
            default; $eur = false;
        }
        return $eur;
    }
}
$m = [
    ['val' => 'usd', 'kiek' => 85],
    ['val' => 'gbp', 'kiek' => 55],
    ['val' => 'lir', 'kiek' => 20]
];

$o = new pinigai();
$mm = [];

foreach ($m as $pinigas){
    $mm[] = $o->konv($pinigas['kiek'], $pinigas['val']);
}
var_dump($mm);
