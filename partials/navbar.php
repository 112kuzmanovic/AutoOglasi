<?php session_start(); ?>

<?php require_once "db.php" ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="btn btn-outline-danger" id="list" href="index.php" class="navbar-brand"><i class="fa fa-home" aria-hidden="true"></i> Cars market</a>
    <?php foreach($car as $c): ?>
                <a href="cars.php?name=<?php echo $c ?>" class="btn btn-warning ml-1"><?php echo $c ?></a>
            <?php endforeach ?>
    <?php 
        if(isset($_SESSION['id'])){
            require_once "partials/navbar-logged.php";
        }else{
            require_once "partials/navbar-login.php";

        }
    ?>
</nav>