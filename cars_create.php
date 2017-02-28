<?php require('connect.php'); ?>

<?php

$sql = "INSERT INTO cars (model, color, mileage) VALUES ('" . $_POST['model'] . "', '" . $_POST['color'] . "', '" . $_POST['mileage'] . "');";
$mysqli->query($sql);
header('Location: cars.php');
?>