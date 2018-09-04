

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="Savar-PHP-Form-02.php">

    <label>Salies pavadinimas</label>
    <input type="text" name="Salis"><br>
    <label>Gyventoju skaicius</label>
    <input type="text" name="Gyv"><br>
    <input type="submit" value="Siusti">


</form>

<?php

if(file_exists('Savar-PHP-Form-02.txt')) {
    $m = json_decode(file_get_contents('Savar-PHP-Form-02.txt'));

    echo '<table>';

    usort($m, function ($a, $b) {
        if ($a['Gyv'] > $b['Gyv']) return -1;
        elseif ($a['Gyv'] < $b['Gyv']) return 1;
        else return 0;
    });
    $i = 0;

    foreach ($m as $salys) {
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $salys['Salis'] . '</td>';
            echo '<td>' . $salys['Gyv'] . '</td>';
            echo '</tr>';

        } else break;
        $i++;
        echo '</table>';
        var_dump($m);
    }
}

/**
 * Sukurkite frontend failą su įvedimo forma.
 * Forma turėtu turėti laukus : Šalies pavadinimas, gyventojų skaičius.
 * Forma turėtu būti nusiųsta į backend failą metodu POST.
 * Duomenis patalpinkite į failą. Iš backend failo automatiškai nukreipti (header) į frontend failą
 * ir ten failo turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
 */
?>


</body>
</html>