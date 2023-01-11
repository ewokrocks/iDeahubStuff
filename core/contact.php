<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$contact = $_POST["contact"];
$catagory = $_POST["catagory"];
$message = $_POST["message"];

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_errno());
}

$sql = "INSERT INTO message (Name, Surname, E_mail, Question_type, Specific_Description)
        VALUES ('{$name}','{$surname}','{$contact}','{$catagory}','{$message}')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));
echo("successfully!")
?>


