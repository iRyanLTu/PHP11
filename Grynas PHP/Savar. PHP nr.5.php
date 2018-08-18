<?php
/**
 Yra darbuotoju sarasas, kur kiekvieno darbuotojo duomenys yra: vardas, pavarde, lytis. Isvesti darbuotoju sarasa
 * (vardas, pavarde(rusiuotu sarasu, ol)), pridedant priekyje mr. prie vyru ir ms. prie moteru.
 */

$darb1 = [
    [
    'vardas' => 'Antanas',
    'pavarde' => 'Jovaisa',
    'lytis' => 'vyras'
    ],
    [
        'vardas' => 'Petras',
        'pavarde' => 'Grazulis',
        'lytis' => 'vyras'
    ],
    [
        'vardas' => 'Ona',
        'pavarde' => 'Petrauskiene',
        'lytis' => 'moteris'
    ],
    [
        'vardas' => 'Leja',
        'pavarde' => 'Andauskiene',
        'lytis' => 'moteris'
    ],
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Kazlauskas',
        'lytis' => 'vyras'
    ]
    ];

function darb1($a)
{
    if ($a['lytis'] == 'vyras') {
        return 'Mr.' . ' ' . $a['vardas'] . ' ' . $a['pavarde'];
    } else {
        return 'Ms.' . ' ' . $a['vardas'] . ' ' . $a['pavarde'];

    }
}
        echo '<ol>';
        foreach ($darb1 as $key) {
            echo '<li>' . darb1($key) . '</li>';
        }
        echo '</ol>';

