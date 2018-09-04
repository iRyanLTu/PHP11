<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="PHP-Form-ND2.php">
    <label>Salies pavadinimas</label>
    <input type="text" name="Salis"><br>
    <label>Sostines pavadinimas</label>
    <input type="text" name="Sost"><br>
    <label>Gyventoju skaicius</label>
    <input type="text" name="Gyv"><br>
    <label>Tipas</label><br>
    <label>Vakaru</label> <input type="radio" name="tipas" value="vakaru"><br>
    <label>Rytu</label> <input type="radio" name="tipas" value="rytu"><br>
    <input type="submit" value="Siusti">


</form>

<?php

echo '<table>';

usort($_SESSION['salys'], function ($a, $b) {
    if (strcmp($a['Gyv'], $b['Gyv']) > 0) return -1;
    elseif (strcmp($a['Gyv'], $b['Gyv']) < 0) return 1;
    else return 0;
});

if(isset($_SESSION['salys'])) {
    for ($i = 0; $i < count($_SESSION['salys']) && $i<=3; $i++) {
        echo '<tr>';
        echo '<td>' . ($i + 1) . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Salis'] . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Sost'] . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Gyv'] . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['tipas'] . '</td>';
        echo '</tr>';
    }
}
echo '</table>';

/**  GALIMA SU FOREACH

if(isset($_SESSION['salys'])){
echo '<table>';

usort($_SESSION['salys'], function ($a, $b) {
    if (strcmp($a['Gyv'], $b['Gyv']) > 0) return -1;
    elseif (strcmp($a['Gyv'], $b['Gyv']) < 0) return 1;
    else return 0;
});
$i=0;
foreach($_SESSION['salys'] as $salis{
if ($i < 3) {
         echo '<tr>';
        echo '<td>' . $salis['Salis'] . '</td>';
        echo '<td>' .  $salis['Sost] . '</td>';
        echo '<td>' . $salis['Gyv'] . '</td>';
        echo '<td>' . $salis['tipas'] . '</td>';
        echo '</tr>';
$i++;
}
echo '</table>'
}
*/

?>
</body>
</html>
