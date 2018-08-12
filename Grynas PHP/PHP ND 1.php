<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.12
 * Time: 14:58
 */
$masinos = [
    [
        'gamintojas' => 'Peugeot',
        'modelis' => '4007',
        'metai' => 2010,
        'kaina' => 7000
    ] ,
    [
        'gamintojas' => 'VW',
        'modelis' => 'Golf VI',
        'metai' => 2009,
        'kaina' => 8000
    ] ,
    [
        'gamintojas' => 'Audi',
        'modelis' => 'R6',
        'metai' => 2007,
        'kaina' => 5000
    ]
];

$masinos = array ("Peugeot 4007" => 2010, "VW Golf VI" => 2009, "Audi R6" =>2007);
arsort($masinos);

foreach ($masinos as $x => $x_value) {
    echo "Masina=" . $x . ", Metai=" . $x_value;
    echo "<br>";
}
