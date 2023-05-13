<?php require_once "partials/head.php";
require_once "partials/carinfoHead.php";
require "connection.php";


if(isset($_POST['privateMsg'])){
    $user_session = $_POST['session_user'];
    $car_id = $_POST['car_id'];
    $car_mark = $_POST['car_mark'];
    $car_user_id = $_POST['car_user_id'];
    $private_msg = $_POST['private_msg'];
    $sender_user_name = $_POST['session_user_name'];
}else {
    header('Location: index.php');
}

$sql = "INSERT INTO newmessage VALUES(NULL,'$user_session','$car_user_id','$car_id','$private_msg',NOW(),'$car_user_id','$sender_user_name','$car_mark')";
$query = mysqli_query($db,$sql);

if($query){
    header("Location:carInfo.php?id=$car_id");

}else{
    echo "Error try again!";
}
?>

