<?php

$srv = "localhost";
$sch = "rytis";
$usr = "rytis";
$psv = "qwertyQWERTY123!@#";

$cnn = new PDO ("mysql:host={$srv};dbname={$sch}", $usr, $psv);
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


