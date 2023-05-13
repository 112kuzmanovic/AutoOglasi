<?php 
require_once "connection.php";
require_once "functions.php";
    $id = $_GET['id'];
    $sql = "SELECT newmessage.newMsg FROM newmessage WHERE newmessage.id = $id";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($query);

    $res = $result['newMsg']-$result['newMsg'];

    $sql1 = "UPDATE newmessage SET newMsg = $res WHERE id = $id";
    $query = mysqli_query($db,$sql1);

    header ('Location: inbox.php');



?>
