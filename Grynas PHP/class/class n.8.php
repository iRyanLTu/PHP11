<?php
/**
 * Sukurti klase ir metoda joje, kuris sugeneruotu numatyta kieky (parametras) atsitiktiniu skaiciu ir rezultata
 * grazintu kaip masyva.
 */

class masyvas
{
    public $r = [];

    function gen($a)
    {
        for ($i = 0; $i < $a; $i++) {
                $this->r[$i] = rand(1, 100);
            }
        }

}
$pls = new masyvas();
$pls->gen(3);
var_dump($pls);
