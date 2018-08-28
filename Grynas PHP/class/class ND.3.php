<?php
/**
Sukurti klasę auto, kurioje yra savybės: gamintojas, modelis, metai.
 Konstruktoriaus pagalba automobilio gamintoją, modelį ir metus patalpinti į klasės savybes.
 Sukurti metodą info, kurio pagalba būtų galima išvesti pvz.: Gamintojas: Honda, modelis: Civic, metai: 2005.
 Išvedimui naudoti šabloną.
 */


class auto {

    public $gamintojas, $modelis, $metai;

    function __construct($gam, $mod, $metai){
            $this->gamintojas = $gam;
            $this->modelis = $mod;
            $this->metai = $metai;
    }

    function info () {
        $s = 'Gamintojas: %s, modelis: %s, metai: %s';
        echo sprintf($s, $this->gamintojas,
            $this->modelis, $this->metai);

    }


}

$lz = new auto('Mercedes-Benz', 'AMG', 2008);
$lz->info();
