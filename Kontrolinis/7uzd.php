<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas
 * iš 4 elementų - teksto eilučių.
 * Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis.
 */

$m = [ "AMNEAETJAET",
    "OJAOPEKTPA",
    "EAITOPTAEIT",
    "PAEJTOJAETTEA"
    ];


foreach ($m as $n) {

    echo strtolower($n);
}
