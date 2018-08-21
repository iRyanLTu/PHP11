<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.20
 * Time: 17:51
 */

$pin = 10;
$eur = 0;
function p ($pin, $val) {

    switch($val) {
        case "USD" : $eur=$pin /1.15;
            break;
        case "GBP" : $eur= $pin /0.89;
        break;
            default : $eur= false;
    }
    return $eur;
}
echo p (100, "GBP");

$a = [
    ['kiekis' => 100,
        'valiuta' => "USD"
    ],
    ['kiekis' => 100,
        'valiuta' => "GBP"
    ]
];
$b = [];
foreach ($a as $kon) {
    $b[]= p( $kon['kiekis'],
    $kon['valiuta']);
}
var_dump ($b);