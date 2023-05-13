<?php 
require_once "functions.php";

if(!isset($_SESSION['id'])){
  
    header ('Location: index.php');
}
?>