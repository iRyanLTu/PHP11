<?php
/**
Sukurti funkciją, kuri perduotą į funkciją masyve su tekstais pakeičia visus simbolius į
 mažąsias raides ir gražina masyvą kaip rezultatą.
 */
$m = ['DOBRI', 'DIEN', 'siandien', 'SEKMADIENIS'];
function skc ($mas)
{
    for ($i=0; $i<count($mas);$i++){
   $mas[$i]= strtolower($mas[$i]);
    }
    return $mas;

}
var_dump (skc($m));