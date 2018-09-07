<?php
include "pdo-connect.php";
try {
    $sql = "insert into salys (sal_pav, sal_gyv, sal_tip) values(:pav, :gyv, :tip)";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':pav' => $_POST['pav'],
        ':gyv' => $_POST['gyv'],
        ':tip' => $_POST['tip']
    ]);
    header("location: pdo-form-frontend.php");

}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}