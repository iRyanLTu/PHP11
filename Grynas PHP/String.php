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
    echo '<br>';
    echo md5( 'labas rytas stai ir as');

    echo '<br>';
    echo uniqid();
    echo '<br>';
    $s = "%s yra labai geras %s modelis, kurio kaina yra %s";
    echo sprintf($s, "Passat", "WW", 2000);
    echo "<br>";
    printf($s, "Passat", "WW", 2000);
    echo "<br>";
    $s = " labas rytas ";
    echo "*" . $s . "*";
    echo "<br>";
    echo "*" . trim($s) . "*";
    echo "<br>";
    echo strcmp("abc", "abd");      // palygina tekstus
    echo "<br>";
    echo strpos( "labas rytas", "ry");  // nurodo kada prasideda "ry" po kiek elementu
    echo "<br>";
    echo strtolower( "LABAS RYTAS AS JAU CIA");
    echo "<br>";
    echo strtoupper( "labas rytas as jau cia");   //pavercia didziosiom
    echo "<br>";
    echo ucfirst(strtolower( "labAs rytas"));  // pavercia pirma raide didziaja
    echo "<br>";
    echo ucwords( "lietuvos respublika");   // pavercia kiekvieno zodzio pirma raide didziaja
    echo "<br>";
    $s = "<b><u>labas vakaras</u></b>";
    echo "<br>";
    echo $s;
    echo "<br>";
    $x = htmlspecialchars($s);    // parodo html funkcijas tekste
    echo $x;
    echo "<br>";
    echo htmlspecialchars_decode($x);
    echo "<br>";
    $s = "labas rytas";
    echo substr($s, 6, 31);
    echo "<br>";
