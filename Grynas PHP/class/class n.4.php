<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-23
 * Time: 18:57
 */



class nds
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

    function moteru()
    {
        $s = 0;
        foreach ($this->zmones1 as $x) {
            if ($x['lytis'] == 'moteris') $s++;
        }
        return $s;
    }

    function vyru()
    {
        $s = 0;
        foreach ($this->zmones1 as $x) {
            if ($x['lytis'] == 'vyras') $s++;
        }
        return $s;
    }
}

$o = new nds();
echo sprintf("Vyru; %s, moteru: %s", $o->vyru(), $o->moteru());
