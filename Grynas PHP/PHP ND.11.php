<?php
/**
Sukurti funkciją, kuri perduotą į funkciją masyve su tekstais pakeičia visus simbolius į
 mažąsias raides ir gražina masyvą kaip rezultatą.
 */
$mas = ('DOBRI DIEN siandien SEKMADIENIS');
function skc ($mas)
{
    foreach ($mas as $lower) {
        if (strtolower($lower)) {
        }
        return $lower;
    }

}
echo strtolower($mas);