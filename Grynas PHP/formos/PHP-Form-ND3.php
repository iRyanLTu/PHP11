<?php
/**
 * Sukurti frontend (method=post) automobilio duomenų įvedimui: gamintojas, modelis, metai, kaina.
 * Forma turėtu būti nusiųsta į backend failą metodu POST.
 * Duomenis patalpinkite į failą. Iš backend failo automatiškai nukreipti (header) į frontend failą
 * ir ten failo turinį atvaizduoti lentele (tik pirmus tris pigiausius automobilius).
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="PHP-Form-ND3-Backend.php">
    <label>Gamintojas<input type="text" name="gam"></label><br>
    <label>Modelis<input type="text" name="mod"></label><br>
    <label>Metai<input type="text" name="met"></label><br>
    <label>Kaina<input type="text" name="kain"></label><br>
    <input type="submit" value="Siusti">
</form>

<?php

if (file_exists('PHP-Form-ND3.txt')){
    $p = json_decode(file_get_contents('PHP-Form-ND3.txt'), true);
    echo '<table>';
    usort($p, function($a, $b){
        if ($a['kain'] < $b['kain']) return -1;
        elseif ($a['kain'] > $b['kain']) return 1;
        else return 0;
    });
    $i = 0;
    foreach($p as $car){
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $car['gam'] . '</td>';
            echo '<td>' . $car['mod'] . '</td>';
            echo '<td>' . $car['met'] . '</td>';
            echo '<td>' . $car['kain'] . '</td>';
            echo '</tr>';
        } else break;
        $i++;
    }
    echo '</table>';
    var_dump($p);
}



?>



</body>
</html>

