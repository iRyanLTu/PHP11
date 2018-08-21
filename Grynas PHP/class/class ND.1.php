<?php
/**
 * Sukurti klase, kurioje yra savybe masyvas su asmenimis, kur kiekvienas asmuo yra asociatyvinis masyvas ( vardas, lytis ).
 * Sukurti dvi funkcijas kurios paskaiciuotu kiek yra moteru ir kiek yra vyru, bei grazintu reiksmes, pademonstruoti veikima.
 */



class nd
{


    public $zmones1 = [
        [ 'vardas'=> 'Antanas',
            'lytis' => 'vyras'
        ],
        [ 'vardas'=> 'Petras',
            'lytis' => 'vyras'
        ],
        [ 'vardas'=> 'Ona',
            'lytis' => 'moteris'
        ],
        [ 'vardas'=> 'Janina',
            'lytis' => 'moteris'
        ],
        [ 'vardas'=> 'Kazys',
            'lytis' => 'vyras'
        ]
    ];

    function paskaiciuoti($kiek) {
        $this->zmones1[] = $kiek;
    }
    function suskaiciuoti (){
        $s = 0;
        foreach ($this->zmones1 as $x){
            $s += $x;
        }
        return $s / count($this->zmones1);
    }
}
