<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-10
 * Time: 19:02
 */
$x = [
  [1, 6, 13]  ,
    [11, 10, 7]  ,
    [18, 25, 15]
];
echo $x [1][1] ;
echo '<br>';

$masinos = [
    [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'kaina' => 1500
    ] ,
    [
        'gamintojas' => 'VW',
        'modelis' => 'Golf IV',
        'kaina' => 1200
    ] ,
    [
        'gamintojas' => 'Audi',
        'modelis' => '100',
        'kaina' => 500
    ]
];
var_dump ($masinos);
echo '<br>';

echo $masinos[1] ['kaina'];