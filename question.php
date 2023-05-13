<?php 
session_start();
require_once "functions.php";
require_once "connection.php";

if(isset($_POST['send'])){
    
    $id = $_SESSION['id'];
    $question = $_POST['question'];
    if($question==""){
        $question = "----";
    }
    $car_id = $_POST['car_id'];
    $car_user_id = $_POST['cars_user_id'];
    $newQuestion = $_POST['newQuestion'];


    $sql = "INSERT INTO question VALUES (NULL,'$id','$car_id','$question','$car_user_id','$newQuestion')";
    $query = mysqli_query($db,$sql);
    if($query){
        header("Location: carinfo.php?id=$car_id");
    }else {
        header("Location: error.php");
    }
    
}

?>