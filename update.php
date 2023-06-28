<?php require_once "functions.php";
require "partials/head.php" ;
$id = $_GET['id'];
$sql = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.motor,cars_table.price,cars_table.year,cars_table.mileage,cars_table.kw,cars_table.fuel,cars_table.abs,cars_table.carAir,cars_table.airbag,cars_table.description,users.name FROM cars_table INNER JOIN users ON cars_table.user_id=users.id WHERE cars_table.id = $id";
$query = mysqli_query(db(),$sql);
$result = mysqli_fetch_assoc($query);

?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="update.record.php" method="POST">
                <input type="hidden" name = "id" value="<?php echo $result['id'] ?>">

                <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Mark</label>
            </div>
                <input type="text" name="mark" value="<?php echo $result['mark'] ?>" class="form-control"><br>

                <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Model</label>
            </div>
                <input type="text" name="model" value="<?php echo $result['model'] ?>" class="form-control"><br>


                <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Year</label>
            </div>
                <input type="text" name="year" value="<?php echo $result['year'] ?>" class="form-control"><br>


                <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Price</label>
            </div>
                <input type="text" name="price" value="<?php echo $result['price'] ?>" class="form-control"><br>
    
                <button type="submit" class="btn btn-info form-control">Update</button>
            </form>
        </div>
    </div>
</div>