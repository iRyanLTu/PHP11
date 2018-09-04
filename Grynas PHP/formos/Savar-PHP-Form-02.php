<?php

if(file_exists('Savar-PHP-Form-02.txt')){
    $m = json_decode(file_get_contents('Savar-PHP-Form-02.txt'));
}
else {
    $m = [];
}

$m[] = $_POST;

file_put_contents('Savar-PHP-Form-02.txt', json_encode($m));

header('location: Savar-PHP-Form-2.php');