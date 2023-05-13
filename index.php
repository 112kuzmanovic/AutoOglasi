<?php require_once "partials/head.php" ?>

<?php 
if(isset($_SESSION['id'])):?>
   <?php include "partials/body.php";  ?> 
        <?php else: ?> 
        <?php require "partials/isnotlogin.php" ?>
<?php endif ?>

<?php require_once "partials/navbar.php" ?>

<?php require_once "partials/footer.php" ?>




    
