<?php 

function db(){
$con=  mysqli_connect('localhost','root','propaganda','pik1')or die("Connection error");
    
    return $con;
}
function dd($val){
    echo "<pre>";
    die (var_dump($val));
    echo "</pre>";
}

function logUser($user){
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('Location: index.php');
}
function getAll(){
    $sql = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.date_of_publication,cars_table.motor,cars_table.price,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id=users.id ORDER BY cars_table.date_of_publication DESC";

    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}
function getAllFromUser($name){
    $sql ="SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.motor,cars_table.year,cars_table.price,cars_table.mileage,cars_table.kw,cars_table.abs,cars_table.airbag,cars_table.carAir,cars_table.fuel,cars_table.description,cars_table.img,cars_table.date_of_publication,cars_table.user_id,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id = users.id WHERE users.name = '$name' ORDER BY cars_table.date_of_publication DESC ";
    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}
function getAllUserAds($id){
    $sql ="SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.date_of_publication,cars_table.motor,cars_table.price,cars_table.year,cars_table.mileage,cars_table.kw,cars_table.fuel,cars_table.abs,cars_table.carAir,cars_table.airbag,cars_table.description,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id = users.id WHERE cars_table.user_id = '$id' ORDER BY cars_table.date_of_publication DESC";
    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;


}
function allFromAddress($address){
    $sql ="SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.motor,cars_table.year,cars_table.price,cars_table.mileage,cars_table.kw,cars_table.abs,cars_table.airbag,cars_table.carAir,cars_table.fuel,cars_table.description,cars_table.img,cars_table.date_of_publication,cars_table.user_id,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id = users.id WHERE users.address = '$address' ORDER BY cars_table.date_of_publication DESC";
    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}

function allQuestions($id){
    $sql = "SELECT question.question,question.id,question.cars_id,question.cars_user_id,question.user_id,users.name FROM question INNER JOIN users ON question.user_id = users.id WHERE question.cars_id = '$id'";
    $query = mysqli_query(db(),$sql);
    $question = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $question;
}

function answers($id){
    $sql = "SELECT answer.answer,answer.question_id,question.id FROM answer INNER JOIN question ON answer.question_id = '$id' ";
    $query = mysqli_query(db(),$sql);
    $answer = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $answer;
}

function newMsg($id){
    $sql = "SELECT * FROM newmessage WHERE newmessage.newMsg = '$id'";
    $query = mysqli_query(db(),$sql);
    $res = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $res;
}

function allMessage($id){
    $sql = "SELECT * FROM newmessage WHERE newmessage.recipient_user_id = '$id'";
    $query = mysqli_query(db(),$sql);
    $res = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $res;
}

function cars1(){
    $sql2 = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.img,cars_table.date_of_publication,cars_table.motor,cars_table.price,cars_table.year,cars_table.mileage,cars_table.kw,cars_table.fuel,cars_table.abs,cars_table.carAir,cars_table.airbag,cars_table.description,cars_table.user_id,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.user_id=users.id ORDER BY cars_table.date_of_publication DESC";
    $query = mysqli_query(db(),$sql2);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}

function allQuestions1($id){
    $sql = "SELECT question.question,question.id,question.cars_id,question.cars_user_id,users.name FROM question INNER JOIN users ON question.user_id = users.id WHERE question.newQuestion = '$id'";
    $query = mysqli_query(db(),$sql);
    $question = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $question;
}

function oneCar($id){
    $sql = "SELECT cars_table.id,cars_table.mark,cars_table.model,cars_table.motor,cars_table.year,cars_table.price,cars_table.mileage,cars_table.kw,cars_table.abs,cars_table.airbag,cars_table.carAir,cars_table.fuel,cars_table.description,cars_table.img,cars_table.date_of_publication,cars_table.user_id,users.id,users.name,users.address FROM cars_table INNER JOIN users ON cars_table.id = '$id'";
    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}

function getAnswer($id){
    $sql = "SELECT answer.answer,answer.question_id,answer.user_id,answer.car_user_id,answer.newAns,answer.car_id FROM answer INNER JOIN question ON answer.question_id = question.id  WHERE answer.newAns = '$id'";
    $query = mysqli_query(db(),$sql);
    $question = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $question;
}

function allAnswer1($id){
    $sql = "SELECT answer.answer,answer.question_id,answer.user_id,answer.car_user_id,answer.newAns,answer.car_id FROM answer INNER JOIN question ON answer.question_id = question.id  WHERE answer.car_user_id = '$id'";
    $query = mysqli_query(db(),$sql);
    $question = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $question;
}

?>