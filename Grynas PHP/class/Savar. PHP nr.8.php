<?php
/**
 * Surasyti skaicius i masyva sukurti klase ir savybe - masyva. Konstruktoriaus pagalba perduoti skaiciu masyva i
 * klases savybe. Sukurti funkcija kuri sumuoja kas antra masyvo skaiciu ir suma grazina.
 */

$sv = [1,2,4,7,10, 11];

class skc
{

    public $mas = [];

    function __construct($sav)
    {
        $this->mas=$sav;
    }



    function metodas()
    {
        $s = 0;
    for ($i=0; $i<count($this->mas); $i++){

        if ($i % 2 == 0);
        $s += $this->mas[$i];

    }
return $s;
    }
}
$obj = new skc($sv);
echo $obj->metodas();
