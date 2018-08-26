<?php
/**
Sukurti klasę auto, kurioje yra savybės: gamintojas, modelis, metai.
 Konstruktoriaus pagalba automobilio gamintoją, modelį ir metus patalpinti į klasės savybes.
 Sukurti metodą info, kurio pagalba būtų galima išvesti pvz.: Gamintojas: Honda, modelis: Civic, metai: 2005.
 Išvedimui naudoti šabloną.
 */


class auto {

    public $list = [
        ['Gamintojas'=> '',
       'Modelis'=>'',
        'Metai'=> ''
            ],
        ['Gamintojas'=> '',
            'Modelis'=>'',
            'Metai'=> ''
        ],
        ['Gamintojas'=> '',
            'Modelis'=>'',
            'Metai'=> ''
        ],
        ['Gamintojas'=> '',
            'Modelis'=>'',
            'Metai'=> ''
        ],
        ['Gamintojas'=> '',
            'Modelis'=>'',
            'Metai'=> ''
        ],
        ];

    function __construct($gam, $mod, $metai){
        $this->list = [
            'Gamintojas' => $gam,
            'Modelis' =>  $mod,
            'Metai' => $metai
    ];
    }

    function info () {

        $s = "Gamintojas: %s, modelis: %s, metai: %s";
        echo sprintf($s, $this->list['Gamintojas'],
            $this->list['Modelis'], $this->list['Metai']);

    }


}

$lz = new auto('Honda', 'Civic', 2005);
$lz->info();
