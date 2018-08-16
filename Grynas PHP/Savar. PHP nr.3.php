<?php
/**
yra skaiciu masyvas reikia isvesti skaicius kurie yra daugiau uz 3 ir maziau uz 10, sulyginti su funckija
 */

$m = [1, 2, 5, 7, 8, 11];

function lyg($a) {
    return $a > 3 and $a < 10;
}

for ($i=0; $i <count ($m); $i++){
    if (lyg($m)[$i])
    {
        echo $m[$i] . '<br>';
}
}



