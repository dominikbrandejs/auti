<!DOCTYPE html>
<?php require('connect.php'); ?>
<html>
<head>

</head>
<body>
 <h1>Proizvođač</h1>


<?php
$sql = "SELECT id, name, year_est FROM brands WHERE id=" . $_GET['id'];
$result = $mysqli->query($sql);
$brands = $result->fetch_assoc();
echo($brands['name'] . '<br>');
echo($brands['year_est']);

?>  

</body>