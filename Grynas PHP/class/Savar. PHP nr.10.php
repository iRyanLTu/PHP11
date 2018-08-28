<?php
/**
 * Sukurti klase su savybe masyvu, sukurti metoda kurio pagalba butu galima patalpinti skaiciu i klases savybe masyva.
 * Sukurti metoda kuris grazintu visu masyvo skaiciu suma. Sukurti kita klase kuri paveldetu pirma klase ir joje perrasyti
 * metoda kuris grazintu nelyginiu skaiciu suma. Sukurti trecia klase kuri paveldetu pirma klase ir perrasyti metoda kuris
 * grazintu visu lyginiu skaiciu suma.
 */

class pirmas
{
    public $mas = [];

    function ptp($pat)
    {
        $this->mas[] = $pat;
    }

    function suma()
    {
         for ($i=0;$i<count($this->mas);$i++){

             return array_sum($this->mas);
         }
         }
    }


$obj = new pirmas();
$obj->ptp(5 );
$obj->ptp(9 );
$obj->ptp(33 );
$obj->ptp(20 );
$obj->ptp(35);
echo $obj->suma();
echo '<br>';
class antras extends pirmas
{

    function ptp($pat)
    {
        $this->mas[] = $pat;
    }


    function nelyginiai()
    {
        $s = 0;
        foreach ($this->mas as $e) {
            if ($e % 2 == 1) {
                $s += $e;
            }
        }

        return $s;
    }
}
$obj = new antras();
$obj->ptp(5 );
$obj->ptp(9 );
$obj->ptp(33 );
$obj->ptp(20 );
$obj->ptp(35);
echo $obj->nelyginiai();
echo '<br>';
class trecias extends pirmas {

    function lyginiai()
    {
        $s = 0;
        foreach ($this->mas as $b) {
            if ($b % 2 == 0) {
                $s += $b;
            }
        }
        return $s;
    }

}
$obj = new trecias();
$obj->ptp(5);
$obj->ptp(10);
echo $obj->lyginiai();