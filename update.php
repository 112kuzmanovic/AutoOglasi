<?php require_once "functions.php";
$id = $_GET['id'];
$sql = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.motor,cars_table.price,cars_table.year,cars_table.mileage,cars_table.kw,cars_table.fuel,cars_table.abs,cars_table.carAir,cars_table.airbag,cars_table.description,users.name FROM cars_table INNER JOIN users ON cars_table.user_id=users.id WHERE cars_table.id = $id";
$query = mysqli_query(db(),$sql);
$result = mysqli_fetch_assoc($query);
require "update.view.php";
?>