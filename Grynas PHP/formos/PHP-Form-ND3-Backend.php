<?php
if(file_exists('PHP-Form-ND3.txt')){
    $p = json_decode(file_get_contents('PHP-Form-ND3.txt'), true);
}
else {
    $p = [];
}
$p[] = $_POST;
file_put_contents('PHP-Form-ND3.txt', json_encode($p));
header("location: PHP-Form-ND3.php");