<?php
/**
 * Sukurti klase svecias su savybemis vardas, patiekalas. Sukurti konstruktoriu kuris patalpintu varda ir patiekala
 * i savybes. Sukurti metoda info kuris isvestu: Svecias: Jonas, Patiekalas: Mesiskas.
 * Sukurti klase VIP kuri paveldetu klase svecias, klaseje VIP, perrasyti metoda info taip, kad isvestu:
 * VIP svecias: Jonas, patiekalas: Mesiskas.
 */

class svecias {
    public $vardas, $patiekalas;
    function __construct($v, $p)
    {
        $this->vardas = $v;
        $this->patiekalas = $p;
    }

    function info (){
        $s = 'Svecias: %s, Patiekalas: %s';
        echo sprintf($s, $this->vardas, $this->patiekalas);
    }
}
$nsn = new svecias('Jonas', 'Mesiskas');
$nsn->info();
echo '<br>';

class VIP extends svecias {
    function info(){
        $s = 'VIP svecias: %s, Patiekalas: %s';
        echo sprintf($s, $this->vardas, $this->patiekalas);
    }
}
$nsn = new VIP('Jonas', 'Mesiskas');
$nsn->info();