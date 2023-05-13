<?php
require "db.php";
require "connection.php";
require "partials/query.php";

if($_GET['search']){
    $search =strtolower($_GET['search']) ;
    $cars = array_filter($result,function($el){
        global $search;
        return strtolower($el['mark'])==$search ||strtolower($el['model']) ==$search || $el['price'] == $search || strtolower($el['mark']." ".$el['model'])==$search;
    });
    if(count($cars)==0){
        header("Location: index.php?error=1");
    }
    
}
// var_dump($search);

?>
<?php require "./partials/head.php" ?>;


<div class="container">
    <div class="jumbotron text-center">
        
        
            <h2><?php echo $search ?></h2>
     
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="row">
            <?php foreach($cars as $car): ?>
                <div class="col-3">
                    <a href="carinfo.php?id=<?php echo $car['id'] ?>">
                        <?php require "partials/card.php" ?>
                    </a>
                    <br>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>