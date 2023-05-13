<?php 
require_once "functions.php";
$id = $_GET['id'];
$sql = "DELETE FROM cars_table WHERE id=$id";
$query = mysqli_query(db(),$sql);
header('Location: index.php');
?>