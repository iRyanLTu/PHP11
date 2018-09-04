<?php
/**
 * Sukurti skriptą, kuris surastu visus pirminius skaičius
 * ("A prime number (or a prime) is a natural number greater than 1 that cannot be formed by
 * multiplying two smaller natural numbers" - https://en.wikipedia.org/wiki/Prime_number)
 * nurodytame skaičių intervale nuo iki.
 */


$num =77;

for( $j = 2; $j <= $num; $j++ )
{
    for( $k = 2; $k < $j; $k++ )
    {
        if( $j % $k == 0 )
        {
            break;
        }

    }
    if( $k == $j )
        echo $j, "<br>";
}

/** galima ir taip */

class abc {
    static function tikrinti($skaicius){
        $pirminis=true;
        for ($i=2; $i<$skaicius - 1; $i++){
            if($skaicius % $i == 0){
                $pirminis=false;
                break;
            }
        }
        return $pirminis;
    }
    static function pirminiai($from, $to){
        $m = [];
        for ($i = $from; $i <= $to; $i++){
            if (self::tikrinti($i))  $m[]=$i;
        }
        return $m;
    }
}

var_dump(abc::pirminiai(10, 30));