<?php


$s = 'labas rytas stai ir as';
echo "pattern: /a/i :"; if (preg_match("/as/i", $s)) echo 'true'; else echo 'false';   //patikrina ar yra (regular expression)
echo '<br>';
echo "pattern: /a|st/i :"; if (preg_match("/as|st/i", $s)) echo 'true'; else echo 'false'; // patikrina ar yra is dvieju variantu su |
echo '<br>';
echo "pattern: /^labas\s+rytas/i :";  if (preg_match("/^labas\s+rytas/i", $s)) echo 'true'; else echo 'false';
