<?php
$email=$_POST['email'];
$password=$_POST['password'];

//databse connection
$conn = new mysqli('localhost','root','php-practice');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(email, password)values(?, ?)");
    $stmt->bind_param("ss", $email,$password);
    $stmt ->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>
