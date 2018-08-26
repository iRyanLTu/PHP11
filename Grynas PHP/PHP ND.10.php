<?php
/**
Sukurti 3 kintamuosius ir jiems priskirti reikšmes.
Kintamuojų reikšmes pakelti kvadratu, sudėti ir ištraukti kvadratinę šaknį.
Rezultatą įrašyti į naują kintamajį. Išvesti su echo.
 */



function skc($a, $b, $c) {

    $d = $a ** 2;
    $e = $b ** 2;
    $f = $c ** 2;
    return sqrt($d + $e + $f);
}


echo skc(5, 7, 9);