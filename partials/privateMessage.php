<?php require_once "carInfoHead.php" ?>
<?php foreach ($cars as $car)?>


<?php if($car['user_id']!= $_SESSION['id']): ?>
<form action="sendPrivateMessage.php" method = "POST">
    <input type="hidden" name = "car_id" value = "<?php echo $car['id'] ?>">
    <input type="hidden" name = "car_mark" value = "<?php echo $car['mark'].'-'.$car['model'] ?>">
    <input type="hidden" name = "car_user_id" value = "<?php echo $car['user_id'] ?>">
    <input type="hidden" name = "session_user" value = "<?php echo $_SESSION['id'] ?>">
    <input type="hidden" name = "session_user_name" value = "<?php echo $_SESSION['name'] ?>">
    <button type = "submit" name = "privateMsg" class="btn btn-danger btn-sm float-right">Send private message</button>
    <input type="text" class="form-control" name="private_msg" placeholder="Please input private message">
</form>
<?php endif ?>