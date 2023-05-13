<?php require "partials/head.php" ?>


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