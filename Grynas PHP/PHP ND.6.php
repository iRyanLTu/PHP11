<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.17
 * Time: 22:56
 */
$array = ['abc','potato','banana'];

function divisible($num) {
    $isDivisible = false;
    if($num % 2 == 0 || $num % 3 == 0){
        $isDivisible = true;
    }
    return $isDivisible;
}

for($i = 0;$i < count($array);$i++) {
    if (divisible(strlen($array[0]))) {
    }
    echo $array[0];
}