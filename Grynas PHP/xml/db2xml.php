<?php



$srv = "localhost";
$sch = "rytis";
$usr = "rytis";
$psv = "qwertyQWERTY123!@#";

$cnn = new PDO ("mysql:host={$srv};dbname={$sch}", $usr, $psv);
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$s ='<?xml version="1.0" encoding="UTF-8" ?>';
$s.= '<data>';
try {
    $res = $cnn->prepare("select * from salys order by sal_gyv desc");
    $res->execute([]);

    while ($salys = $res->fetch()){
        $s.= '<salys>';
        $s.=  '<pavadinimas>' . $salys['sal_pav'] . '</pavadinimas>';
        $s.=  '<gyventojai>' . $salys['sal_gyv'] . '</gyventojai>';
        $s.=  '<tipas>' . $salys['sal_tip'] . '</tipas>';
        $s.= '</salys>';
    }
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}
$s.= '</data>';

file_put_contents('salys.xml', $s);
echo 'ok';