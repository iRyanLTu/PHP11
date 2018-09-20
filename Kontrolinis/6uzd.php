<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 3 parametrus
 * - skaičius, funkcija turi grąžinti rezultatą - visų paduotų parametrų sumos kvadratą.
 */

function amk($a, $b, $c) {
$d = $a;
$e = $b;
$f = $c;
$g = $d + $e + $f;
return ($d + $e + $f) * $g;
}

echo amk(5, 7,  8);
