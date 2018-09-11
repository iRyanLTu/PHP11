<?php

/**
 * Yra duotas masyvas tekstu, kur reikiamas tekstas yra apremintas zenklais ^ ir $. Viename tekste yra
 * viena tokia teksto dalis (nesikartoja). Tekste daugiau tokiu zenklu nera. Surasti visas tas teksto dalis, iskirpti
 * ir sudeti y nauja masyva.
 */


$mas = ['abcdefg^oaetoat$oaeirieao'];



foreach ($mas as $m){
    if (strpos($m, '^') == true){
            trim($m, '^$');
    } else {
        return false;
    }
}

