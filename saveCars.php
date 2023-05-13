<?php session_start(); ?>
<?php require "connection.php"; 
if(isset($_POST['subBtn1'])){
$mark = $_POST['mark'];
$model = $_POST['model'];
$motor = $_POST['motor'];
$year = $_POST['year'];
$price = $_POST['price'];
$mileage = $_POST['mileage'];
$kilowat = $_POST['kilowat'];
$desc = $_POST['description'];
$id = $_SESSION['id'];


if(isset($_POST['abs'])){
    $abs = "yes";
}else{
    $abs = "no";
}

if(isset($_POST['airbag'])){
    $airbag = "yes";
}else{
    $airbag = "no";
}


if(isset($_POST['carAir'])){
    $carAir = "yes";
}else{
    $carAir = "no";
}

$fuel = $_POST['fuel'];
$description = $_POST['description'];



// Get reference to uploaded image
$image_file = $_FILES["image"];

// Exit if no file uploaded
if (!isset($image_file)) {
    die('No file uploaded.');
}

// Exit if image file is zero bytes
if (filesize($image_file["tmp_name"]) <= 0) {
    die('Uploaded file has no contents.');
}

// Exit if is not a valid image file
$image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('Uploaded file is not an image.');
}

// Get file extension based on file type, to prepend a dot we pass true as the second parameter
$image_extension = image_type_to_extension($image_type, true);

// Create a unique image name
$image_name = bin2hex(random_bytes(16)) . $image_extension;

// Move the temp image file to the images directory
move_uploaded_file(
    // Temp image location
    $image_file["tmp_name"],

    // New image location
    __DIR__ . "/images/" . $image_name
);  
$sql = "INSERT INTO cars_table VALUES (NULL,'$mark','$model','$motor','$year','$price','$mileage','$kilowat','$abs','$airbag','$carAir','$fuel','$desc','$image_name',NOW(),'$id')";


$query = mysqli_query($db,$sql);
if($query){
    header ("Location: index.php");
}else{
    echo "Error!!";
}


}


?>