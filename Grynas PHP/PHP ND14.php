<?php
/**
 * Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 7 elementų - teksto eilučių.
 * Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis.
 * Suskaičiuokite kiek yra teksto eilučių, kuriose yra a simbolis.
 */
<<<<<<< HEAD
=======

>>>>>>> origin/PHP11
$country =[
    "Brazilija
    Ispanija
    Anglija
    Japonija
    Turkija
    Lietuva
    Nigeris"];

<<<<<<< HEAD
foreach($country as $c){
    print_r(strtolower($c));
}

$b="a";
$z=0;
for($i=0; $i<strlen($c); $i=$i+1) {
=======

 foreach($country as $c){
  print_r(strtolower($c));
   }


$b="a";
$z=0;

for($i=0; $i<strlen($c); $i=$i+1) {

>>>>>>> origin/PHP11
    if (substr($c, $i, 1) == $b) {
        $z = $z + 1;
    }
}
echo '<br>';
echo $z;