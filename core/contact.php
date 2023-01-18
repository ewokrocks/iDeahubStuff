<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$contact = $_POST["contact"];
$catagory = $_POST["catagory"];
$message = $_POST["message"];

$host = "localhost";
$dbname = "smarthome";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/contactus.css">
    <title>Document</title>
</head>

<body>

    <?php

    require_once __DIR__ . '/../templates/navbar.php';

    ?>

    <div class="main">

        <div class="title">
            <div class="title_top"></div>
            
            <div class="title_bottom">CONTACT US</div>
        </div>

        <form action="../core/contact.php" method="post">
            <div class="content">

                <div class="name"><label for="name">Name</label><br>
                    <input type="text" name="name" value="" maxlength="20" id="name">
                </div>

                <div class="surname"><label for="surname">Surname</label><br>
                    <input type="text" name="surname" value="" maxlength="20" id="surname">
                </div>

                <div class="contact">
                    <lable for="contact">E-mail</lable><br>
                    <input type="text" name="email" value="" maxlength="70" id="contact">
                </div>


                <div class="description"><label for="description">Specific Description</label><br>
                    <textarea name="message" cols="50" rows="5" class="textarea" id="description"></textarea>
                </div>

                <!-- <div class="photo"><lable for="photo">Screenshot of The Problem</lable>><br>
                <div class="file">
                    <div class="file1"></div>
                <input type="file" name="screenshot" value="111" id="photo">
                </div>
                
                </div> -->

                <div class="button">
                    <div class="submit"><input type="submit" name="contact" value="Submit"></div>
                    <div class="reset"><input type="reset" value="Reset"></div>
                </div>

            </div>
        </form>
    </div>

</body>

</html>