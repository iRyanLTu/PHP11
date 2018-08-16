<?php


/** yra masyvas su vardais, isvesti visus vardus kuriu teksto ilgis >= 5; */

$m = array( 'Antanas', 'Petras', 'Jonas', 'Rita', 'Leja');

$s = 5;

foreach ($m as $x) {
    if (strlen($x) >= 5)
        echo $x;
}