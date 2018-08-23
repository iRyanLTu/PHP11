<?php
/**
 Sukurti klase ir joje metoda, kuris paskaiciuotu dvieju skaiciu suma kitu dvieju skaiciu suma ir grazintu skirtuma tarp
  pirmos sumos ir antros.
 */

class skac {

    function pask ($a, $b, $c, $d) {

        $e= $a + $b;
        $f= $c + $d;

        return $f - $e;
    }
}
$amk = new skac;
echo $amk->pask(5, 6, 7, 8);