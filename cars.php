<?php 
require "db.php";
require "partials/query.php";

if(isset($_GET['name'])){
    $name = $_GET['name'];
    $carsGroup = array_filter($result,function($el){

        global $name;
        return $el['mark'] ==$name;
    });
    // var_dump($carsGroup);
}

?>
<?php require "./partials/head.php" ?>;
<?php if(isset($_SESSION['id'])): ?>
<div class="jumbotron text-center">
    <h4><?php echo  $name ?> <i class="fa fa-car" aria-hidden="true"></i></h4>
</div>

<div class="row"  >
    <div class="col-12" >
        <div class="row">
        <?php if (count($carsGroup)==0) :?>
            <h2 class="" style="margin-top:50px;margin-left:450px;color:red">
            Currently, there is not a single <?php echo $name ?>
            </h2>
            <?php endif ?>

            <?php foreach($carsGroup as $car): ?>
                
                <div class="col-3 offset-2">
                    <a href="carinfo.php?id=<?php echo $car['id']; ?>">
                        <?php require "partials/card.php" ?>
                    </a>
                    <br>
                </div>
            <?php endforeach ?>
            
        </div>
       
    </div>
</div>

<?php else: ?>
<?php require "partials/isnotlogin.php" ?>
<?php endif ?>

<?php require "./partials/footer.php" ?>
