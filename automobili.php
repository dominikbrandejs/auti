<!DOCTYPE html>
<?php require('connect.php'); ?>
<html>
<head>

</head>
<body>
 <h1>Popis</h1>
 <?php
 $sql = "SELECT brands.name, cars.model, cars.color FROM brands, cars WHERE brands.id = cars.brand_id ORDER BY brands.name, cars.model";
 $result = $mysqli->query($sql);
 ?>
 <ul>
 <?php
  while ($cars = $result->fetch_assoc()) {
  echo('<li>' . $cars['name'] . ' / ' . $cars['model'] . ' / ' . $cars['color'] . '<br>'. '</li>');
  }
   ?>
</ul>
</body>