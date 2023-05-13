<?php 
session_start();
require_once "functions.php";
require_once "connection.php";

if(isset($_POST['answered'])){
    $question_id = $_POST['question_id'];
    $answer = $_POST['answer'];
    if($answer ==""){
        $answer = "----";
    }
    $user_id =$_SESSION['id'];
    $car_id = $_POST['car_id'];
    $car_user_id = $_POST['car_user_id'];
    
    $sql = "INSERT INTO answer VALUES (NULL,'$answer','$question_id','$user_id','$car_user_id','$car_user_id','$car_id')";
    $query = mysqli_query($db,$sql);
    if($query){
        header("Location: carinfo.php?id=$car_id");
    }else {
        header("Location: error.php");
    }
}

