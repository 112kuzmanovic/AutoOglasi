<?php

require_once "functions.php";
require_once "connection.php";
require_once "carInfoHead.php";


?>

<ul  class="navbar-nav ml-auto">
<li class="nav-item"><a href="inbox.php" class="nav-link"><i class="fa fa-inbox" aria-hidden="true"></i>
 Inbox</a></li>
    <li  class="nav-item"><a style="color:cadetblue" href="user.view.php" class="nav-link"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $_SESSION['name'] ;?></a></li>
    <li class="nav-item"><a style="color:cadetblue" href="logout.php" class="nav-link">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
</ul>

<?php 

$newMsg = newMsg($_SESSION['id']);
$question = allQuestions1($_SESSION['id']);
$answer = getAnswer($_SESSION['id']);
// dd($answer)
// dd($question[0]['cars_id'])

?>

<?php if(count($newMsg)>0): ?> 
    <form action="newMessage.php" method="POST">
    <button style="display:<?php if(isset($_POST['new'])){ echo "none";} ?>" type="submit" name="new" class="btn btn-danger btn-sm">New Message<sup>(<?php echo count($newMsg) ?>)</sup></button>
    </form>
<?php endif ?>

<?php if(count($question)>0): ?>
    <a href="carinfo.php?id=<?php echo $question[0]['cars_id'] ?>" type="submit" name="" class="btn btn-danger btn-sm">New Question<sup>(<?php echo count($question) ?>)</sup></a>
<?php endif ?>
   
<?php if(count($answer)>0): ?>
    <a href="carinfo.php?id=<?php echo $answer[0]['car_id'] ?>" type="submit" name="" class="btn btn-danger btn-sm">New Answer<sup>(<?php echo count($answer) ?>)</sup></a>
<?php endif ?>