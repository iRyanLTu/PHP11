<?php
session_start();

    $_SESSION['salys'][] = [
        'Salis' => $_POST['Salis'],
        'Sost' => $_POST['Sost'],
        'Gyv' => $_POST['Gyv'],
        'tipas' => $_POST['tipas']
    ];

    header('location: PHP-Form-ND02.php'); /* eina pries visus echo */


/* galima ir taip $_SESSION['salys'][] = $_POST;
