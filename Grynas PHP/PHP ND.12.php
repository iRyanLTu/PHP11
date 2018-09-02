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