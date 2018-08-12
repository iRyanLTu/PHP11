<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.12
 * Time: 15:29
 */


$m = [5, 0, 1, 8, 10, 0, 25];

$s = 0;


for ($i=0; $i < count($m); $i++) {
    if ($m[$i] == 0) {
        $s += 1;
    }
}

echo $s;
