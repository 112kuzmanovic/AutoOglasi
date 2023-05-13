<?php 
    require_once "./functions.php";
    require_once "carInfoHead.php";

    foreach ($cars as $car);
    
 ?>

<?php if($car['user_id']!=$_SESSION['id']): ?>
    <p class="float-left"><b>Ask a question:</b></p>
    <form action="question.php" method= "POST">
        <input type="hidden" name="car_id" value="<?php echo $car['id'] ?>">
        <input type="hidden" name="newQuestion" value="<?php echo $car['user_id'] ?>">
        <input type="hidden" name="cars_user_id" value="<?php echo $car['user_id'] ?>">
        <input type="text" name="question" placeholder="Ask a question" class="form-control">
        <button type = "submit" name="send" class="btn btn-success btn-sm float-left">Send</button>
    </form>
    <br>
<?php endif ?>

<?php 
$question = allQuestions($car['id']);
$ans1 = allAnswer1($_SESSION['id']);
// dd($ans[0]['car_user_id'])
?>

<?php foreach ($question as $question1): ?>
   <div style="border-bottom:1px solid blue" class="card text-left">
   <?php 
       $answer = answers($question1['id']);
          
       
       
      
    ?>
       <div class="card-header">
           <div  class="input-group-append">
           <a href="carFromUser.php?name=<?php echo $question1['name'] ?>" style="background-color:#e07b39;color:#eeeee4" class="btn btn-sm" for="inputGroupSelect01"><?php echo $question1['name'] ?></a>
           </div>
           <p class="float-left"><?php echo $question1['question'] ?></p>
       </div>
       
       <div class="card-body ml-5">
           <?php if(count($answer)>0): ?>
               <?php foreach($answer as $ans) ?>
               <?php if($ans['question_id']==$question1['id']):?>
                   <a href="carFromUser.php?name=<?php echo $car['name'] ?>" class="btn btn-warning btn-sm"><?php echo  $car['name'] ?></a><?php echo ' '.$ans['answer'] ?>
                   <?php endif ?>
               
               
           <?php endif ?>
               
      
       </div>
       
       
       <?php 
    //    dd($question1)
        ?>
   
       <div class="card-footer">
           <?php if($car['user_id']==$_SESSION['id']): ?>
               <form action="answer.php" method="POST">
                   <div class="input-group">
                       <input type="hidden" name="question_id" value="<?php echo $question1['id'] ?>">
                       <input type="hidden" name="car_id" value="<?php echo $car['id'] ?>">
                       <input type="hidden" name="car_user_id" value="<?php echo $question1['user_id'] ?>">
                       <input type="text" class="form-control" name="answer" placeholder="Please input answer">
                   <div class="input-group-append">
                       <button name="answered" class="btn btn-info btn-sm float-right">Answered</button>
                   </div>
                   </div> 
               </form>
           <?php endif ?>
       </div>
      
   </div>
   <?php endforeach ?>
   <?php require_once "privateMessage.php" ?>

   <?php
    if(count($question)>0):
     if($_SESSION['id']==$question1['cars_user_id']):
   if(count($question)>0):
   $id = $car['id']; 
   $sql = "SELECT question.newQuestion,question.cars_id,cars_table.id FROM question INNER JOIN cars_table ON question.cars_id=cars_table.id WHERE question.cars_id ='$id'";
   $query = mysqli_query(db(),$sql);
   $result = mysqli_fetch_assoc($query);
   $res=$result['newQuestion']-$result['newQuestion'];

   
   $sql1 = "UPDATE question SET newQuestion = '$res' WHERE question.cars_id = $id";
    $query = mysqli_query(db(),$sql1);
   
   endif;
endif;
endif;
// dd($ans1[0]);
// dd($question);
if(count($ans1)>0 && count($question)):
    if($_SESSION['id']==$ans1[0]['car_user_id']):
           
            $id = $question1['id'];
            
            $sql = "SELECT answer.newAns,answer.question_id,question.id FROM answer INNER JOIN question ON answer.question_id=question.id WHERE answer.question_id ='$id'";
            $query = mysqli_query(db(),$sql);
            $result = mysqli_fetch_assoc($query);
            $res1 = 0;
            // dd($id);
            // dd($result);
            $sql1 = "UPDATE answer SET newAns = '$res1' WHERE answer.question_id = $id";
            $query = mysqli_query(db(),$sql1);

        
    endif;
endif;
    

   ?>