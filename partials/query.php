<?php require "connection.php" ?>
<?php 
$sql2 = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.date_of_publication,cars_table.motor,cars_table.price,cars_table.year,cars_table.mileage,cars_table.kw,cars_table.fuel,cars_table.abs,cars_table.carAir,cars_table.airbag,cars_table.description,cars_table.user_id,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id=users.id ORDER BY cars_table.date_of_publication DESC";
$query = mysqli_query($db,$sql2);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($result);
// echo "</pre>";
?> 