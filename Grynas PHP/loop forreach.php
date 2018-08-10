<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-10
 * Time: 20:08
 */
$m = [1,3,5,11,23,15];

$s = 0;
foreach($m as $e){           //loop skripta runina ne viena karta
    $s += $e;
}
echo round ($s / count ($m), 2); //suapvalina gauta skaiciu iki 2 skaiciu po kablelio
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
$s = 0;

       foreach($masinos as $e){
    $s += $e['kaina'];
}
echo round ($s / count($masinos), 2);
echo '<br>';
       $a = [
           'Jonas' => 1000,
       'Petras' => 2000,
       'Antanas' => 1500
       ];

       echo '<table>';

       foreach($a as $key => $val){
           $s += $e['kaina'];
           echo '<tr>';
           echo '<td>' . $key . '</td>' . '<td>' . $val . '</td>';
           echo '</tr>';
       }

echo '</table>';
