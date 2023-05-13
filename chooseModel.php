<?php 
require "connection.php"; 
require "db.php";
require "./partials/head.php";
if(isset($_POST['subBtn'])){
    
    $mark = $_POST['mark'];
    $models = array_filter($carMarks,function($e){
        global $mark;
        return $e['mark']==$mark;
    });
    // var_dump ($models);

}


// var_dump($models[1]['model']);

?>
<div class="jumbotron text-center"><h5>Describe your car</h5></div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="saveCars.php" method="POST" enctype = "multipart/form-data">
            <?php foreach($models as $e):?>
                <?php $a = $e['mark'] ?>
                <input type="" name = "mark" value="<?php echo $a ?>" style="display:none">
                <label class="input-group-text" for="inputGroupSelect01"><?php echo $a ?></label>

            <?php endforeach ?>
            
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Choose a car model</label>
            </div>
            <select class="custom-select" name="model" id="">
                    
                    <?php 
                    foreach($models as $e){
                        $br = $e['id']-1;
                       
                        foreach($models[$br]['model'] as $m){
                            echo "<option>$m</option>";
                        } 
                        
                         
                    }
                   ?>
                    
            </select>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Motor</label>
            </div>
            <input type="text" name="motor"  placeholder="Please input motor..."><br><br>

            <br><br>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Choose a car year</label>
            </div>
            <select name="year" id="">
            <option value="">Year ---</option>
                <?php for ($i=1965; $i <2023 ; $i++): ?>
                    
                    <option value="<?php echo $i ?>">Year <?php echo $i ?></option>
                <?php endfor ?>
            </select>
            <br><br>
            
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Price</label>
            </div>
            <input type="text" name="price"  placeholder="Please input price..."><br><br>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Mileage</label>
            </div>
            <input type="text" name="mileage"  placeholder="Please input mileage"><br><br>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Kilowatt</label>
            </div>
            <input type="text" name="kilowat" placeholder="Kilowatt"><br><br>

            ABS <input type="checkbox" name="abs" value="abs"><br>
            Airbag <input type="checkbox" name="airbag" value="airbag"><br>
            Car air conditioning <input type="checkbox" name="carAir" value="carAir"><br><br>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Fuel</label>
            </div>
            <select name="fuel" id="">
                <option value="Fuel">Fuel</option>
                <option value="Diesel">Diesel</option>
                <option value="Gasoline">Gasoline</option>
                <option value="Gas">Gas</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Other">Other</option>

            </select>
            <br><br>

            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect01">Description</label>
            </div>
            <textarea name="description" id="" cols="100" rows="10"></textarea>
            <br><br>
            

           
            <input type="file" name="image" value="" />


            <button type="submit" name="subBtn1" class="btn btn-success form-control ml-3">Save</button>

                    


            </form>
        </div>
    </div>
</div>
<?php 


 





?>
<?php require "./partials/footer.php" ?>


             
               