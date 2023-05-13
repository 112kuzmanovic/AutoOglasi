<?php 
require_once "functions.php";
require_once "partials/head.php";
$newMsg = newMsg($_SESSION['id']);
$allMessage = allMessage($_SESSION['id']);
// dd($allMessage)


?>
    <?php if(isset($_SESSION['id'])): ?>

    <table class="table table-dark">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sender_user_name</th>
                <th scope="col">Car</th>
                <th scope="col">Message</th>
                <th scope="col">Answer</th>
                <th scope="col">#</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($newMsg as $msg): ?>
            <tr style = "background-color:tomato">
                
                <th scope = "row">New!!</th>
                <td><?php echo $msg['sender_user_name']. '--' . $msg['message_time'] ?></td>
                <td><?php echo $msg['car'] ?></td>
                <td><?php echo $msg['message'] ?></td>
                <td><a name="unread" href="markAsReadMsg.php?id=<?php echo $msg['id'] ?>" class="btn btn-success btn-sm">Mark as read</a></td>
                
            </tr>
            <?php endforeach ?>
            <?php foreach($allMessage as $msg): ?>
            <tr>  
                <th scope = "row">#</th>
                <td><?php echo $msg['sender_user_name'] . '--' . $msg['message_time']?></td>
                <td><?php echo $msg['car'] ?></td>
                <td><?php echo $msg['message'] ?></td>
                <td><a href="answerMsg.php?id=<?php echo $msg['id'] ?>" class="btn btn-success btn-sm">Ansver</a></td>
            </tr>
            <?php endforeach ?>

        </tbody>
    </table>
    <?php else: ?>
        <?php header('Location: index.php') ?>
    <?php endif ?>

