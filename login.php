<?php  
require_once "connection.php";
require_once "functions.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email ='$email'AND password=sha1('$password')";
$query = mysqli_query($db,$sql);


$result = mysqli_fetch_assoc($query);

 

if($result){
    
    logUser($result);

}else{
    
    header('Location:login.view.err.php');
    
}
// var_dump($result['name']);
?>