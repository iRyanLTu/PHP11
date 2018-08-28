<?php
/**
Sukurti klasę su su savybe - masyvu.
 Masyve asmenys, kurie aprasyti taip: vardas, sąskaita.
 Sukurti funkciją, kuri visiems Jonams suteiktų 100 EUR priedą Joninių proga.
 */

class skc1
{


    public $mas =
        [
            [
                'vardas' => 'Jonas',
                'saskaita' => '350'
            ],
            [
                'vardas' => 'Antanas',
                'saskaita' => '200'
            ],
            [
                'vardas' => 'Petras',
                'saskaita' => '250'
            ],
            [
                'vardas' => 'Jonas',
                'saskaita' => '150'
            ]
        ];

    function ptc()
    {
        for ($i = 0; $i < count($this->mas); $i++){

            if ($this->mas[$i]['vardas'] == 'Jonas'){
                $this->mas[$i]['saskaita'] += 100;
            }
        }


        }

    }

$att = new skc1();
$att->ptc();
var_dump($att);


