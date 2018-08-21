<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.19
 * Time: 19:30
 */
$masinos = ["Ferrari,430,2008,20000"];

$m=[];

foreach($masinos as $masin) {
    $x = explode(',', $masin);
$m[]= [
    [ 'gamintojas' => $x[0],
        'modelis' => $x[1],
        'metai' => $x[2],
        'kaina' => $x[3]

    ]
];
}
var_dump($x);
