<?php

$s = 'labas rytas';
$o = fopen('write.txt', 'w');
fwrite($o, $s, strlen($s));
fclose($o);
echo 'ok';