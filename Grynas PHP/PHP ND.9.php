<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.20
 * Time: 17:51
 */

$pinigai = [
    [
        'kiekis' => 10000,
    'valiuta' => 'JPY'
    ],
[
    'kiekis' => 8000,
    'valiuta' => 'USD'
],
    [
        'kiekis' => 9000,
        'valiuta' => 'GBP'
    ]
];

function exchangeRate( $amount, $from, $to)
{
    switch ($from) {
        case "yen":
            $from_Currency = "JPY";
            break;
        case "dollar":
            $from_Currency = "USD";
            break;
        case "pounds":
            $from_Currency = "GBP";
            break;
    }

    switch ($to) {
        case "euro":
            $to_Currency = "EUR";
            break;
        case "euro":
            $to_Currency = "EUR";
            break;
        case "euro":
            $to_Currency = "EUR";
            break;
    }

    $amount = urlencode($amount);

    $from_Currency = urlencode($from_Currency);
    $to_Currency = urlencode($to_Currency);
    $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=" . $from_Currency . "&to=" . $to_Currency);

    $get = explode("<span class=bld>",$get);
    $get = explode("</span>",$get[1]);
    $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
    return round($converted_amount, 2);
}