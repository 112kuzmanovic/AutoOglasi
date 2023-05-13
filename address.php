<?php require_once 'partials/head.php' ?>

<?php require_once 'partials/navbar.php' ?>

<?php 
$result = allFromAddress($_GET['address']);
// dd($result);

 ?>

<div class="jumbotron text-center">
 
 <h4><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $result[0]['address'] ?></h4>

</div>
<div class="row">
     <div class="col-12 ">
         <div class="row">
             <?php foreach($result as $car): ?>
                 <div class="col-3">
                     <a href="carinfo.php?id=<?php echo $car['id']; ?>">
                     <?php require "partials/card.php" ?>
                     </a>
                     <br>
                 </div>
                 
                 
                 <?php endforeach ?>
         </div>
     </div>
 </div>
</div>
<?php require_once "partials/footer.php" ?>