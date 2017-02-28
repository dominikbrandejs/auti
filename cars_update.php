<?php require('connect.php'); ?>

<?php

$sql = "UPDATE cars SET model='" . $_POST['model'] . "', color='" . $_POST['color'] . "', mileage='" . $_POST['mileage'] . "' WHERE id=" . $_POST['id'] . " ;";
$mysqli->query($sql);
header('Location: cars.php');
?>