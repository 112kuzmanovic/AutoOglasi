<div class="card text-center" style = "width:300px">
    <div class="card-header">
        <img style="width:98%;height:150px" src="images/<?php echo $car['img'] ?>" alt="nema slike">
    </div>
                           
    <div class="card-body">
        <button class="btn btn-secondary"><?php echo $car['mark']."-".$car['model']." ".$car['motor'] ?></button>
        <p style ="font-size:12px;font-weight:400;border:1px solid gray;margin-top:5px"><?php echo 'Published:'. $car['date_of_publication'] ?></p>
    </div>
    <div class="card-footer">
        <button class="btn btn-success float-left"><?php echo $car['price']." "."KM" ?></button>
        <a href="carFromUser.php?name=<?php echo $car['name'] ?>" class="btn btn-primary btn-sm float-right"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo $car['name'] ?></a>
    </div>
    
</div>
<br>