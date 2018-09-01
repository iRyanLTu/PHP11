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
        $this->prekes[] = [
            'pavadinimas' => $pavadinimas,
            'kaina' => $kaina
        ];
    }

    function top3(){
        usort($this->prekes, function ($a, $b){
            if ($a['kaina']>$b['kaina']) return 1;
            elseif ($a['kaina']<$b['kaina']) return -1;
            else return 0;
    });
         for ($i=0; $i<count($this->prekes) && $i<3; $i++){
             $m[]=$this->prekes[$i];
         }
         return $m;
}
}



$o= new parduotuve();
$o->ideti('Suris', 3);
$o->ideti('Mesa', 5);
$o->ideti('Sultys', 4);
$o->ideti('Ledai', 3);
$r = $o->top3();
var_dump($r);


