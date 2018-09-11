<?php


//$xml=simplexml_load_file("grupe.xml");
$s = file_get_contents("grupe.xml");
$xml = simplexml_load_string($s);
var_dump($xml);

echo 'Grupe: '. $xml->pavadinimas . '<br>';
echo 'Destytojas: '. $xml->destytojas . '<br>';
$x = $xml->xpath('mokiniai/mokinys');
//var_dump($x);
echo '<ol>';
foreach ($x as $mokinys){
    echo '<li>' . $mokinys->vardas . ', ' . $mokinys['id'] . '</li>';
}
echo '</ol>';

echo $xml->mokiniai->mokinys[0]->vardas;

echo '<br>';
$x = $xml->xpath("mokiniai/mokinys[apranga='Sviesi']");        // pagal objekta
var_dump($x);

echo '<br>';

$x = $xml->xpath("mokiniai/mokinys[@id='arv']");       //pagal id surasti
var_dump($x);
