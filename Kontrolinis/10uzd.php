<?php
/**
 * Sukurkite PHP skriptą, kuriame aprašykime klasę mokiniai,
 * kurioje būtų viena savybė - $sarasas, kuri bus masyvas,
 * taip pat būtų metodas insert($mokinys), kuris prideda naujo mokinio vardą į masyvą sąvybę $sarasas.
 * Taip pat sukurkite metodą vid(), kuris grąžintų masyve sąvybėje esančių elementų (mokinių vardų) ilgio vidurkį.
 */


class mokiniai
{
    public $sarasas = [];

    function insert($mokinys)
    {
        $this->sarasas[] = $mokinys;
    }

    function vid()
    {
        $n = 0;
       for($i=0;$i<count($this->sarasas);$i++){
        $n += strlen($this->sarasas[$i]);
       }
       return $n /count($this->sarasas);
    }
}
$o = new mokiniai();
$o->insert('Jonas');
$o->insert('Ona');
echo $o->vid();