<?php
//include "Project-connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a team</title>


</head>
<body>
<form method="POST" action="Teams.html">
    <label>Logo: <input type="file"></label><br>
    <label>Pavadinimas: <input type="text"></label><br>
    <label>Šalis: </label>
    <select>
        <option value="Lietuva">Lietuva</option>
        <option value="Latvija">Latvija</option>
        <option value="Estija">Estija</option>
        <option value="Vokietija">Vokietija</option>
        <option value="Prancūzija">Prancūzija</option>
        <option value="Ispanija">Ispanija</option>
        <option value="Italija">Italija</option>
        <option value="Turkija">Turkija</option>
        <option value="Rusija">Rusija</option>
        <option value="Izraelis">Izraelis</option>
        <option value="Graikija">Graikija</option>
        <option value="Serbija">Serbija</option>
        <option value="Kroatija">Kroatija</option>
        <option value="Juodkalnija">Juodkalnija</option>
        <option value="Lenkija">Lenkija</option>
        <option value="Ukraina">Ukraina</option>
    </select> <br>
    <label>Treneris: <input type="text"></label> <br>
    <label>Prezidentas: <input type="text"></label><br>
    <label>Adresas:</label> <br>
    <textarea rows="4" cols="50">
    </textarea><br>
    <label>Arena: <input type="text"></label> <br>
    <label>Tel. Nr: <input type="tel"></label><br>
    <label>Oficiali svetainė: <input type="text"></label><br>
    <button>Vykdyti</button>
</form>
</body>
</html>
