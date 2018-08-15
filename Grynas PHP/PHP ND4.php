<?php
/**
 * Created by PhpStorm.
 * User: Rytis
 * Date: 2018.08.15
 * Time: 15:55
 */
$input = array(
    "Ryan=vyras","Susan=moteris","David=vyras","Anthony=vyras","Karen=moteris"
);

$stats = array(
    'vyras' => 0,
    'moteris' => 0,
);
foreach($input as $value) {
    $types = explode('=', $value);
    $stats[$types[1]]++;
}

print_r($stats);


