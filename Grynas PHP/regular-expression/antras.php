<?php


$s = 'labas rytas stai ir as'; echo $s. '<br>';

echo "pattern: /\s+/ : replace ',' : "; echo preg_replace("/\s+/", ",", $s). '<br>';