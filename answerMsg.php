<?php 
require_once "partials/head.php";
require_once "functions.php";
$id = $_GET['id'];
$message = allMessage($_SESSION['id']);
foreach($message as $mess);
// dd($message[0]);



?>
<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="sendAnswerMsg.php" method="POST">
            <button class="btn btn-danger btn-sm"><?php echo $mess['sender_user_name'] ?></button>
            <p><?php echo $mess['message_time'] ?></p>
            <p style="border:1px dotted black"><i><?php echo $mess['message'] ?></i></p>
            <textarea id="" name="ansMsg" rows="4" cols="50" autofocus>
            </textarea>
            <input type="hidden" name="id" value="<?php $mess['id'] ?>">
            <input type="hidden" name ="sender_user_id" value = "<?php echo $mess['sender_user_id'] ?>" >
            <input type="hidden" name ="car_id" value = "<?php echo $mess['car_id'] ?>" >
            <input type="hidden" name ="car_name" value = "<?php echo $mess['car'] ?>" >
            <button type = "submit" name = "answerMsg" class="btn btn-success btn-sm float-left">Answer</button>

            </form>
        </div>
    </div>
</div><br>
<?php require_once "inbox.php" ?>