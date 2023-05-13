<?php 
require_once "partials/head.php";
?>

<?php 
if(isset($_SESSION['id'])){
    $result = getAllUserAds($_SESSION['id']);
   
}else{
    header('Location: index.php');
}
?>
<div class="jumbotron text-center">
    <h3><?php echo $_SESSION['name'] ?></h3>
</div>
<div class="row">
    <div class="col-12 ">
        <div class="row">
            <?php foreach($result as $car): ?>
                        
                <div class="col-3">
                    <a href="carinfo.php?id=<?php echo $car['id']; ?>">
                        <div class="card text-center" style = "width:300px">
                            <div class="card-header">
                                <img src="images/<?php echo $car['img'] ?>" alt="nema slike" style="width:98%;height:150px">
                            </div>
                           
                            <div class="card-body">
                                <button class="btn btn-primary">
                                    <?php echo $car['mark']."-".$car['model']." ".$car['motor'] ?>
                                </button>
                                <p><?php echo "Published:" . $car['date_of_publication'] ?></p>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success float-left"><?php echo $car['price']." "."KM" ?></button>
                                <a href="update.php?id=<?php echo $car['id'] ?>" class="btn btn-warning">Update</a>
                                <a href="delete.php?id=<?php echo $car['id'] ?>" class="btn btn-danger  float-right">Delete</a>
                            </div>
                        </div>
                    </a>
                    <br>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
