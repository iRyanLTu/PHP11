<?php
/**
 * Sukurti klasę studentas, su savybe egzaminai. Sukurti kontruktorių,
 * kurio pagalba būtų galima įdėti sudento duomenis į savybes: vardas, pavarde, fakultetas, kursas.
 * Sukurti metodą, kurio pagalba galima būtų įdėti studento egzamino rezultatus: dalykas, įvertinimas (dešimtbalėje sistemoje).
 * Sukurti metodą su parametru, kuris išveda: vardas, pavardė, fakultetas, kursas, išlaikytų egzaminų: skaičius,
 * neišlaikytų egzaminų: skaičius. Skaičius - suskaičiuotas išlaikytų/neišlaikytų egzaminų skaičiai.
 * Išlaikytu egzaminas skaitomas tada, kai įvertinimas yra >= 5.
 */

class studentas
{
    public $vardas, $pavarde, $fakultetas, $kursas;
    public $egzaminai = [];

    function __construct($var, $pav, $fak, $kur)
    {
        $this->vardas = $var;
        $this->pavarde = $pav;
        $this->fakultetas = $fak;
        $this->kursas = $kur;

    }

    function ideti($dal, $ivert)
    {
        $this->egzaminai[] = [
            'Dalykas' => $dal,
            'Ivertinimas' => $ivert
        ];

    }

    function info()
    {
        $a = 0;
        $b = 0;
        foreach ($this->egzaminai as $egz) {
            if ($egz['Ivertinimas'] >= 5) $a++;
            else $b++;
        }
        $s = 'Vardas: %s, Pavarde; %s, Fakultetas: %s, Kursas: %s, Islaikyti egzaminai: %s, Neislaikyti egzaminai: %s';
        echo sprintf($s, $this->vardas, $this->pavarde, $this->fakultetas, $this->kursas, $a, $b);

    }
}
$abc = new studentas('Jonas', 'Jonaitis', 'Edukologijos', '2');
$abc->ideti('Anglu', 10);
$abc->ideti('Rusu', 4);
$abc->ideti('Verslas', 8);
$abc->info();
