<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.19
 * Time: 18:50
 */

$sveciai =  [
    [
        'vardas' => 'Jonas',
        'lytis' => 'vyras',
        'mityba' => 'viskas'
    ] ,
    [
        'vardas' => 'Petras',
        'lytis' => 'vyras',
        'mityba' => 'viskas'
    ] ,
    [
        'vardas' => 'Antanas',
        'lytis' => 'vyras',
        'mityba' => 'vegetaras'
    ],
[
    'vardas' => 'Ona',
    'lytis' => 'moteris',
    'mityba' => 'vegane'
    ]
];


 $vyr = 0;
 $mot = 0;
 $viskas = 0;
 $vegetaras = 0;
 $vegane = 0;

 foreach ($sveciai as $zmones) {
     if ($zmones['lytis'] == 'vyras') {
         $vyr++;
     }
 else {
         $mot++;
 }
 }
if ($zmones['mityba'] == 'viskas') {
     $viskas++;
}
elseif ($zmones['mityba'] == 'vegetaras') {
     $vegetaras++;
}
else {
     $vegane++;
}

