<?php
/**
Sukurti klase ir toje klaseje metoda, kurio pagalba butu galima sudauginti du skaicius. Metodas turi grazinti rezultata, pademonstruot veikima.
 */

class daugyba
{

    function daug($du, $trys){
        $keturi = $du * $trys;
        return $keturi;
    }

}
$miau = new daugyba();
echo $miau->daug(4,5);