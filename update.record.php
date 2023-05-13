<?php require "functions.php";
$mark = $_POST['mark'];
$model = $_POST['model'];
$id = $_POST['id'];
$year = $_POST['year'];
$price = $_POST['price'];



$sql = "UPDATE cars_table SET mark = '$mark',model='$model',year='$year',price='$price',date_of_publication=NOW() WHERE id = $id";
$query = mysqli_query(db(),$sql);
header ('Location: index.php');
?>