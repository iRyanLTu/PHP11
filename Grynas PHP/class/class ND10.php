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
    public $licenzijos;

    function __construct($lic)
    {
        $this->licenzijos=$lic;
    }
    function add($pav){

        $prog[]= [
            'Pavadinimas'=> $pav,
            'Licenzija' => $this->licenzijos
        ];

    }

    function info($tink, $netink){


    }
}