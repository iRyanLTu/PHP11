<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.19
 * Time: 19:30
 */
$masinos = ["Honda,Civic,2012,1000", "VW,Golf,2001,1200", "BMW,M3,2010,2000", "Ferrari,430,2008,20000"];

$masin = [
    [
    'gamintojas' => 'Honda',
    'modelis' => 'Civic',
    'metai' => 2012,
    'kaina' => 1000
],
    [
        'gamintojas' => 'VW',
        'modelis' => 'Golf',
        'metai' => 2001,
        'kaina' => 1200
    ],
    [
        'gamintojas' => 'BMW',
        'modelis' => 'M3',
        'metai' => 2010,
        'kaina' => 2000
    ],

    [
    'gamintojas' => 'Ferrari',
    'modelis' => '430',
    'metai' => 2008,
    'kaina' => 20000
]
];

var_dump($masin);