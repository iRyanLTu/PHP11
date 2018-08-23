<?php
/**
 * Sukurti klase ir joje turi buti savybe masyvas automobiliu masyvas: gamintojas, modelis, metai, kaina. Masyve turi buti surasyti duomenys,
 * sukurti funkcija kuri paskaiciuotu kainos vidurky ir grazinti atgal.
 */

class masina
{


    public $masinos = [
        ['gamintojas' => 'VW',
            'modelis' => 'Golf IV',
            'metai' => 2001,
            'kaina' => 2000
        ],
        ['gamintojas' => 'Mercedes-Benz',
            'modelis' => 'SLK',
            'metai' => 2010,
            'kaina' => 10000
        ],
        ['gamintojas' => 'Mitsubishi',
            'modelis' => 'Lancer',
            'metai' => 2004,
            'kaina' => 20000
        ]
        ];

    function vidurkis (){
        $s = 0;
        foreach($this->masinos as $e){
            $s += $e['kaina'];
        }
        return round ($s / count($this->masinos), 2);
    }
}

$obj = new masina();
echo $obj ->vidurkis();

