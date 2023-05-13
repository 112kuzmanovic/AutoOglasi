<?php require "connection.php";
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST ['password'];




$sql = "INSERT INTO users VALUES (NULL,'$name','$surname','$address','$email',SHA1('$password'))";


$query = mysqli_query($db,$sql);
if($query){
    header("Location:login.view.php");
}else {
    echo "Error try again!";
}

?>