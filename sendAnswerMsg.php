<?php 
require_once "partials/head.php";
require_once "partials/carinfoHead.php";
require "connection.php";


if(isset($_POST['answerMsg'])){
    $ansMsg = $_POST['ansMsg'];
    $sender_user_id = $_POST['sender_user_id'];
    $answer_user_id = $_SESSION['id'];
    $car_id = $_POST['car_id'];
    $answer_user_name = $_SESSION['name'];
    $car = $_POST['car_name'];
    
}else{
    header("Location: index.php");
}

$sql = "INSERT INTO newmessage VALUES(NULL,'$answer_user_id','$sender_user_id','$car_id','$ansMsg',NOW(),'$sender_user_id','$answer_user_name','$car')";
$query = mysqli_query($db,$sql);
if($query){
    header ("Location: inbox.php");
}else{
    echo "Error!!! Try again...";
}
?>