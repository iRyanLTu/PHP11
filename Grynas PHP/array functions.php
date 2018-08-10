<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-10
 * Time: 19:15
 */
$m = [1, 7, 5];
if (in_array(8, $m)) echo '8 yra';  //patikrina ar yra elementas
else echo '8 nera';
echo '<br>';
if (in_array(5, $m)) echo '5 yra';
else echo '5 ner';
echo '<br>';
var_dump($m);
echo '<br>';
sort($m);
var_dump($m);
echo '<br>';
shuffle($m);
var_dump ($m);

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
echo '<br>';

usort($masinos, function($a, $b){     //isdesto pagal dydi
   if ($a['kaina'] > $b ['kaina']) return 1;
   elseif ($a['kaina'] < $b ['kaina']) return -1;
   return 0;
});

var_dump($masinos);

echo '<br>';

$m = [1, 3, 4, 1, 3];           //pasalina besikartojancius
$x = array_unique($m);
var_dump($x);

echo '<br>';
$m1 = [1, 2, 3];
$m2 = [4, 5, 6];
$m3 = [7, 8, 9];
$m = array_merge($m1, $m2, $m3);  //sujungia reiksmes y viena
sort ($m);
var_dump ($m);
echo '<br>';
$m1 = [1, 3, 5, 7];
$m2 = [0, 1, 3, 9];
$m = array_intersect($m1, $m2);  //parodo tas pacias reiksmes
var_dump ($m);
echo array_sum(($m));
echo '<br>';
$m = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$x = array_filter($m, function($e){
    if ($e % 2 == 0) return false;
    else return true;
});
var_dump($x);
echo '<br>';
$y = array_map(function($e){  //pakelia kvadratu
    return $e ** 2;
}, $x);
var_dump($y);