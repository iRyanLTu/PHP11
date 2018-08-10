<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-10
 * Time: 18:44
 */
$m = [1, 4, 5, 10, 7];
echo $m[0] + $m[2];
echo '<br>';
echo count($m);
echo '<br>';
$m[3] = 100;
$m[5] = 'labas';
$m[] = 'rytas';
var_dump($m);
array_splice($m, 2, 1);
echo '<br>';
var_dump($m);