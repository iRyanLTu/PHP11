<?php
/**
 Sukurti klase ir toje klaseje metoda kuris paskaiciuotu triju skaiciu (argumentu) kvadratu sumos sakny.
 */

class ziauru {

    function kvad ($a, $b, $c) {

        $pirmas = $a**2;
        $antras = $b**2;
        $trecias = $c**2;
        return sqrt($pirmas + $antras + $trecias);

    }
}

$amk = new ziauru();
echo $amk->kvad(3, 4, 5 );