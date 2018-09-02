<?php
session_start();

if(count($_POST)>0) {
    $_SESSION['salys'][] = [
        'Salis' => $_POST['Salis'],
        'Sost' => $_POST['Sost'],
        'Gyv' => $_POST['Gyv']
    ];


    header('location: PHP-Form-ND2.php');

    usort($_SESSION['salys'], function ($a, $b) {
        if (strcmp($a['Gyv'], $b['Gyv']) > 0) return -1;
        elseif (strcmp($a['Gyv'], $b['Gyv']) < 0) return 1;
        else return 0;
    });
}

echo '<table>';
if(isset($_SESSION['salys'])) {
    for ($i = 0; $i < count($_SESSION['salys']); $i++) {
        echo '<tr>';
        echo '<td>' . ($i + 1) . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Salis'] . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Sost'] . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['Gyv'] . '</td>';
        echo '</tr>';
    }
}
echo '</table>';

