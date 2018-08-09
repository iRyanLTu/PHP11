<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-09
 * Time: 20:07
 */
$a = 10;
$b = 2;
$c = $a + $b;
$c = $c + 5;
echo $c;
echo "<br>";
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
echo $a % 3;
echo "<br>";
echo $a**$b;
echo "<br>";
$q = 6 + 7 - 2 > 100;
echo $q;
var_dump($q); // duoda atsakyma kai false

echo "<br>";
$a = true;
$b = true;
$c = false;
var_dump($a and $b and $c); // duoda logine reiksme, jei vienas false tai visi false
echo "<br>";
var_dump($a and $b);
echo "<br>";
var_dump($a or $b or $c); // or duoda reiksme true jei vienas yra true is visu
echo "<br>";
var_dump ($a and $b and !$c); // ! duoda reiksme nepaimt to elemento
echo "<br>";
var_dump ($a xor $b); // xor parodo false jei visi true