<!--
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : Šalies pavadinimas, gyventojų skaičius. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į failą. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten failo turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="Savar-PHP-Form-02.php">
    <label>Šalies pavadinimas:<input type="text" name="sapav"></label><br>
    <label>Gyventoju skaicius:<input type="text" name="gyv"></label><br>
    <button>Vykdyti</button>
</form>

<?php
if (file_exists('Sav-PHP-Form-02.txt')){
    $m = json_decode(file_get_contents('Sav-PHP-Form-02.txt'), true);
    echo '<table>';
    usort($m, function($a, $b){
        if ($a['gyv'] > $b['gyv']) return -1;
        elseif ($a['gyv'] < $b['gyv']) return 1;
        else return 0;
    });
    $i = 0;
    foreach($m as $salis){
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $salis['sapav'] . '</td>';
            echo '<td>' . $salis['gyv'] . '</td>';
            echo '</tr>';
        } else break;
        $i++;
    }
    echo '</table>';
    var_dump($m);
}
?>

</body>
</html>