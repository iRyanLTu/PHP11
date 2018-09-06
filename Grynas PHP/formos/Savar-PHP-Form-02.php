<?php
if (file_exists('Sav-PHP-Form-02.txt')) {
    $m = json_decode(file_get_contents('Sav-PHP-Form-02.txt'), true);
}
else {
    $m = [];
}
$m[] = $_POST;
file_put_contents('Sav-PHP-Form-02.txt', json_encode($m));
header("location: Savar-PHP-Form-2.php");