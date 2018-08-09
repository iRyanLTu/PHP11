<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-09
 * Time: 21:13
 */
$m = [
    "Antanas",
    "Petras",
    "Jonas",
    "Arvydas",
    "Kestas"
];
shuffle($m);
switch ($m[0]){
    case "Antanas":
        case "Jonas":
            case "Kestas": $rez = "draugas"; break;
            case "Arvydas"; $rez = "priesas"; break;
            case "Petras"; $rez = "neutralus"; break;
            case "Kazyas"; $rez = "draugas";
    default: $rez = "nezinoma";
}
echo $m[0] . ' yra ' . $rez;