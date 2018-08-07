<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-07
 * Time: 21:08
 */

$s = 'labas';
$o = "ry\"tas";

    echo $s . ' ' .$o;
echo '<br>';

    $h = <<<BOT
My name is Unknown, I am printing some functions. 
BOT;


    echo $h . '<br>';
    echo strlen($h) . '<br>';


    $s = "labas rytas stai ir as";
    $m = explode(' ', $s);
    var_dump($m);
    echo '<br>';
    shuffle($m);
    $s = implode (' ', $m);
    echo $s;