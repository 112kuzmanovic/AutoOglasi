<?php require_once "head.php";
require_once "functions.php";
$result = getAll(); 

?>

<?php  
?>

<div class="jumbotron text-center" id="jumbo" style="border-bottom:1px solid blue">
    <button style="width:400px" class="btn btn-outline-primary"><h1>All Cars</h1></button>
</div>
<div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                
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
                    <?php foreach($result as $car): ?>
                        
                        <div class="col-3">
                            <a  href="carinfo.php?id=<?php echo $car['id']; ?>"  >
                            <?php require "partials/card.php" ?>
                            </a>
                            <br>
                        </div>
                        
                        
                        <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
        <br><br>
        
        
