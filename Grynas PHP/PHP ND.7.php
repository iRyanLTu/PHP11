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
        'mityba' => 'viska'
    ] ,
    [
        'vardas' => 'Petras',
        'lytis' => 'vyras',
        'mityba' => 'viska'
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



$count = 0;
foreach ($sveciai as $key=>$value) {
    if ($value ['lytis'] == 'vyras') {
        $count++;
    }
}
echo $count;
echo '<br>';

$count = 0;
foreach ($sveciai as $key=>$value) {
    if ($value ['lytis'] == 'moteris') {
        $count++;
    }
}
echo $count;
echo '<br>';

$count = 0;
foreach ($sveciai as $key=>$value) {
    if ($value ['mityba'] == 'viska') {
        $count++;
    }
}
echo $count;
echo '<br>';

$count = 0;
foreach ($sveciai as $key=>$value) {
    if ($value ['mityba'] == 'vegetaras') {
        $count++;
    }
}
echo $count;
echo '<br>';

$count = 0;
foreach ($sveciai as $key=>$value) {
    if ($value ['mityba'] == 'vegane') {
        $count++;
    }
}
echo $count;
echo '<br>';
