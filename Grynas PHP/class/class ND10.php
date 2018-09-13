<?php
/**
 * Sukurti klasę softas, su savybe masyvu licencijos (tinkamos licencijos).
 * Sukurti konstruktorių, kurio pagalba būtų galima perduoti licencijų sąrašą į savybę licencijos.
 * Sukurti metodą add, kurio pagalba būtų galima įvesti programinę įrangą,
 * kaip asociatyvinį masyvą su raktais: pavadinimas, licencija ir patalpinti į savybę programos.
 * Sukurti metodą info, kuris pagal parametrą (tinkama/netinkama) išvestų programinės įrangos
 * sąrašą lentele atitinkamai kurios turi tinkamą (yra sąraše licencijos) arba netinkamą
 * (nėra sąraše) licenciją. https://en.wikipedia.org/wiki/Comparison_of_free_and_open-source_software_licenses
 */

class softas{
    public $licenzijos=[];
    public $programos=[];


    function __construct($licenzija)
    {

        $this->licenzijos = $licenzija;
    }

    function add($pav, $liz){

        $this->programos[] = [
            'Pavadinimas' => $pav,
            'Licenzija' => $liz
        ];
    }

    function info($tipas){
        echo '<table>';
        foreach ($this->programos as $programa){
            $yra = in_array($programa['Licenzija'], $this->licenzijos);
            echo '<tr>';
            if($tipas == 'tinkama'&& $yra){
                echo '<td>' . $programa['Pavadinimas'] . '</td>';
                echo '<td>' . $programa['Licenzija'] . '</td>';
            }
            elseif($tipas == 'netinkama'&& !$yra){
                echo '<td>' . $programa['Pavadinimas'] . '</td>';
                echo '<td>' . $programa['Licenzija'] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new softas([
'MIT',
    'BSD',
    'GPL'
    ]);

$o->add('Registras', 'MIT');
$o->add('Ligoniai', 'BSD');
$o->add('Sodra', 'Komerciniai');

echo '<b>programos su tinkamomis licenzijomis</b>:<br>';
$o->info('tinkama');
echo '<b>programos su netinkamomis licenzijomis</b>:<br>';
$o->info('netinkama');