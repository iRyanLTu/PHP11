<?php include "pdo-connect.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="pdo-form-backend.php">
    <label>Salies pavadinimas:</label><input type="text" name="pav"><br>
    <label>Populiacija:</label><input type="text" name="gyv"><br>
    <label>Tipas:</label><br>
    <label>Vakaru</label><input type="radio" name="tip" value="vakaru"><br>
    <label>Rytu</label><input type="radio" name="tip" value="rytu"><br>
    <button>Vykdyti</button>
</form>


<?php
echo '<table>';
try {
    $res = $cnn->prepare("select * from salys order by sal_gyv desc");
    $res->execute([]);
    $i = 1;
    while ($salys = $res->fetch()){
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $salys['sal_pav'] . '</td>';
        echo '<td>' . $salys['sal_gyv'] . '</td>';
        echo '<td>' . $salys['sal_tip'] . '</td>';
        echo '</tr>';
        $i++;
    }
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}
echo '</table>';
?>

</body>
</html>