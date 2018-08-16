<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-16
 * Time: 19:33
 */

$m = [
  ['vardas' => 'Antanas',
        'saskaita' => 0,
    ],
    ['vardas' => 'Petras',
        'saskaita' => 0,
    ],
    ['vardas' => 'Juozas',
        'saskaita' => 0,
    ],
    ['vardas' => 'Andrius',
        'saskaita' => 0,
    ],
    ['vardas' => 'Tomas',
        'saskaita' => 0,
    ]
];

$i = 0;
while ($i < count($m)){
    switch ($m[$i]['vardas']){
        case 'Antanas':
        case 'Petras':
        case 'Juozas': $m[$i]['saskaita'] += 100; break;
        default:;
    }

    $i++;
}
var_dump($m);