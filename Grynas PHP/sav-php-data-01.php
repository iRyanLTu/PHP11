<?php
/**
 *  Sukurti funkciją, kuri išveda visas išeigines dienas (datas) per nurodytą mėnesį (parametrai metai, menuo).
 * Išeiginės dienos: šeštadienis ir sekmadienis.
 */

/**$str = '2018-09-';

for ($i9=1; $i9<32; $i9++) {
    $rugsejis = $str.$i9;
    $date = date('Y m D d', $time = strtotime($rugsejis));


    if (strpos($date, 'Sat') || strpos($date, 'Sun')) {
        echo '<br>' .$date;
    }
}
*/


function iseig ($year, $month)
{
    $data = new DateTime();
    $data->setDate($year, $month, 1);

  do{
      $w = $data->format("w");
      $m = $data->format("m");
      if ($w == 0 || $w = 6 ){
          echo $data->format("Y-m-d") . '<br>';
      }
      $data->add(new DateInterval{'P1D'});
  }
  while ($m == $month);
}
iseig (2018, 9);
