<?php
/**
 * Tarkime turime duomenų bazėje lentelę maistoprekes su laukais id, gamintojas, pavadinimas, kaina, galiojimo data.
 * Parašykite SQL užklausą  kuri pateiktų visus duomenis apie 3 šviežiausius produktus.
*/



$srv = "localhost";
$sch = "rytis";
$usr = "rytis";
$psv = "qwertyQWERTY123!@#";

$conn = mysqli_connect($srv, $sch, $usr, $psv);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT galdata FROM MAISTOPREKES ORDER BY galdata DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
