<?php




require 'db-connect.php';

$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students (name, address, class, phone) VALUES ('$name', '$address', '$class', '$phone')";
if (mysqli_query($con, $sql)) {
    header("Location: index.php");
    exit();
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}




?>