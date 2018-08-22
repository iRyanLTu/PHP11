<?php
/**
 * Sukurti klase, kurioje yra savybe masyvas su asmenimis, kur kiekvienas asmuo yra asociatyvinis masyvas ( vardas, lytis ).
 * Sukurti dvi funkcijas kurios paskaiciuotu kiek yra moteru ir kiek yra vyru, bei grazintu reiksmes, pademonstruoti veikima.
 */



class nd
{


    public $zmones1 = [
        ['vardas' => 'Antanas',
            'lytis' => 'vyras'
        ],
        ['vardas' => 'Petras',
            'lytis' => 'vyras'
        ],
        ['vardas' => 'Ona',
            'lytis' => 'moteris'
        ],
        ['vardas' => 'Janina',
            'lytis' => 'moteris'
        ],
        ['vardas' => 'Kazys',
            'lytis' => 'vyras'
        ]
    ];

    function Get($name)
    {
        $vyras = 0;
        for ($i = 0; $i < count($zmones1); $i++) {
            if ($zmones1[i]['lytis'] == 'vyras') {
                $vyras += 1;
            }
        }
        return $vyras;
    }
    function Get2()
    {
        $moteris = 0;
        for ($i = 0; $i < count($zmones1); $i++) {
            if ($zmones1[i]['lytis'] == 'vyras') {
                $moteris += 1;
            }
        }
        return $moteris;
    }
}
$obj = new nd();
echo $obj -> Get('vyras');
echo $obj -> Get2('moteris');
