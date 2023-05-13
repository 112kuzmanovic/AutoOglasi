<?php
require "db.php";
require_once "functions.php";
require_once "partials/carInfoHead.php"
?>
<?php require "./partials/head.php" ?>



<div class="jumbotron text-center" style="border-bottom:1px solid blue">
    <?php foreach($cars as $car): ?>
        
        <button class="btn btn-outline-primary"><h1><?php echo $car['mark'].'-'.$car['model'] ?></h1></button>
    <?php endforeach ?>    
</div>

<div class="row">
    <div class="col-12  ">
        <div class="row ml-5">
        <?php foreach($cars as $car): ?>
            <div class="col-5 offset-3">
                <div class="card text-center" style="">
                    <div class="card-preheade">
                        <a href="address.php?address=<?php echo $car['address'] ?>" class="btn btn-danger"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $car['address'] ?></a>
                        <a href="carFromUser.php?name=<?php echo $car['name'] ?>" class="btn btn-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $car['name'] ?></a>
                        <p><?php echo "Published:".$car['date_of_publication'] ?></p>
                    </div>
        <div class="card-header"style="height:250px">
            <img src="images/<?php echo $car['img'] ?>"style="height:100%" alt="nema slike" style="width:98%;height:150px">
        </div>
                           
        <div class="card-body">    
            <button class="btn btn-primary float-left"><h5> <?php echo $car['mark']."-".$car['model']." ".$car['motor'].' '.$car['year'] ?></h5></button>
            <button class="btn btn-success float-right"><h5><?php echo $car['price'].' '.'KM' ?></h5></button>
        <br><br><br>

         <?php 
        $info =
        [
            "Mileage"=>$car['mileage'],
            "Fuel"=>$car['fuel'],
            "Kw"=>$car['kw'],
        ];
         $info1 =
         [
            "ABS"=>$car['abs'],
            "Airbag"=>$car['airbag'],
            "CarAir"=>$car['carAir']
         ];
        ?>
        <div class="info" style="display:flex">
            <div class="left" style="width:50%">
            <?php foreach ($info as $i=>$a): ?>
                <button class="btn btn-secondary float-left"><?php echo $i ?></button>
                <button class="btn btn-outline-secondary float-left">
            <?php if($a==""): ?>
                <?php echo "----" ?>
            <?php else: ?>
                <?php echo $a ?>
            <?php endif ?>
                </button>
            <br><br>
            <?php endforeach ?>
        </div>
        <div class="right" style="width:50%">
        <?php foreach ($info1 as $i=>$a):?>
            <button class="btn btn-secondary float-right">
                <?php echo $i ?>
            </button>
            <button class="btn btn-outline-secondary float-right">
                <?php if($a==""): ?>
                    <?php echo "----" ?>
                <?php else: ?>
                    <?php echo $a ?>
                <?php endif ?>
            </button>
            <br><br>
        <?php endforeach ?>
        </div>
    </div>
    <?php foreach ($info as $i=>$a): ?>
                                   
    <?php endforeach ?>

</div>
<div class="card-footer">
<p><b>
    <?php if($car['description']==""): ?>
        <?php echo "The user has not entered anything!!!" ?>
    <?php else: ?>
        <?php echo $car['description'] ?>
    <?php endif ?>
</b></p>
</div>

<div class="postFooter">
    
<?php require_once "partials/question_answer.php" ?>
</div>


</div>
<br>
</div>
<?php endforeach ?>
        </div>
    </div>
</div>
</div>

<?php require "./partials/footer.php" ?>

