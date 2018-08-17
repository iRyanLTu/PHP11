<?php

/** yra skaiciu masyvas reikia isvesti skaicius kurie yra daugiau uz 3 ir maziau uz 10 */

$m = [1, 2, 5, 7, 8, 11];



for ($i=0; $i <count ($m); $i++){
    if ($m[$i]>3 and $m[$i]<10){
        echo $m[$i];
    }
}