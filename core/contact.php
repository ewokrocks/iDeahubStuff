<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$type = $_POST["type"];
$message = $_POST["message"];

$host = "localhost";
$dbname = "smarthome";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_errno());
}

$sql = "INSERT INTO message (name, surname, email, question_type, description)
        VALUES ('{$name}','{$surname}','{$email}','{$type}','{$message}')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));
echo("successfully!")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/contact-us.css">
    <title>Document</title>
</head>

