<?php require "./partials/head.php" ?>
<div class="jumbotron text-center">
    <h2>Add new Car</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="chooseModel.php" method="post">
                

                <div class="input-group-prepend">

                    <label class="input-group-text" for="inputGroupSelect01">Choose a car brand</label>
                </div>
                <select class="custom-select" name="mark" id="">
                    <?php ;
                     foreach ($carMarks as $mark): ?>
                        
                        <option value="<?php echo  $mark['mark']; ?>"><?php echo  $mark['mark'] ?></option>
                   
                    <?php endforeach ?>;
                </select><br>
                
                <button type="submit" name="subBtn" class="btn btn-primary">Continue</button>
                </form>
                
                

                
        </div>
    </div>
</div>
<?php require "./partials/footer.php" ?>

