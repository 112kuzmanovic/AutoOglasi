<?php
require "query.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $cars = array_filter($result,function($el){

        global $id;
        return $el['id'] == $id;
    });
// dd($result);
    
}
?>