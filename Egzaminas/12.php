<?php



$srv = "localhost";
$sch = "rytis";
$usr = "rytis";
$psv = "qwertyQWERTY123!@#";

$conn = mysqli_connect($srv, $sch, $usr, $psv);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT kliento_registravimo_data FROM Imones ORDER BY kliento_registravimo_data DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
