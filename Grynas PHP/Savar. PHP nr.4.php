<?php
/**
 Yra duotas tekstu masyvas, reikia isvesti visus tekstus kurie prasideda simboliais a arba b
 */


$r = ['apelsinas', 'batai', 'masina', 'obuolys'];

function abc($r)
{
    return substr($r, 0, 1)
        == 'a'
    or
        substr($r, 0,1)
    == 'b';
}

for ($i = 0;$i < count ($r); $i++) {
    if (abc($r[$i]))
        echo $r[$i] . '<br>';

}