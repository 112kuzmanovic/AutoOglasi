<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php $cars = getAll(); 

?>
<div class="jumbotron text-center">
    <h1>All Carss</h1>
    <?php echo $br ?>
</div>
<div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <!-- <h3 class="display-4">Search cars</h3> -->
                <form action="search.php" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="<?php if(isset($_GET['error'])){
                            echo "No match found,try again!!!";
                        }else{
                            echo "Search";
                        } 
                        ?>">
                        <div class="input-group-append">
                            <button type="submit" name="subBtn" class="btn btn-info">Search</button>
                        </div>
                        <a href="add_new_car_view.php"class="input-group-append btn btn-success">Add new car</a>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="row">
                    <?php foreach($cars as $car): ?>
                        <div class="col-3">
                            <a href="carinfo.php?id=<?php echo $car['id']; ?>">
                            <div class="card text-center">
                                <div class="card-preheader">
                                    <button class="btn btn-secondary "><?php echo $car['name'].'-'. $car['address'] ?></button>
                                

                                </div>
                                <div class="card-header">
                                <img src="images/<?php echo $car['img'] ?>" alt="nema slike">
                                </div>
                           
                            <div class="card-body">
                            <button class="btn btn-primary"><?php echo $car['mark']."-".$car['model']." ".$car['motor'] ?></button>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-left"><?php echo $car['price']." "."KM" ?></button>
                                <button class="btn btn-success float-left"><?php echo $car['id']." "."KM" ?></button>

                                

                            </div>
                        </div>
                            </a>
                            <br>
                        </div>
                        
                        
                        <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
        <br><br>
        
        

<?php require_once "partials/footer.php" ?>
