<?php

if (isset($_POST['contact'])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    $message = $_POST["message"];


    $host = "localhost";
    $dbname = "smarthome";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_errno());
    }

    $sql = "INSERT INTO message (name, surname, email, type, message)
            VALUES ('{$name}','{$surname}','{$email}','{$type}','{$message}')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo ("your message was delivered successfully!");
}

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

        <form name = "contactpage" action="../core/contact.php" method="post" >
            <div class="content">

                <div class="name"><label for="name">Name</label><br>
                    <input type="text" name="name" value="" maxlength="20" id="name">
                    <small class = "error-message"></small>
                </div>

                <div class="surname"><label for="surname">Surname</label><br>
                    <input type="text" name="surname" value="" maxlength="20" id="surname">
                    <small class = "error-message"></small>
                </div>

                <div class="contact">
                    <lable for="contact">E-mail</lable><br>
                    <input type="text" name="email" value="" maxlength="70" id="contact" onclick="ValidateEmail(document.form1.text1)">
                    <small class = "error-message"></small>
                </div>

                <div class="catagory"><label for="category">Question Type</label><br>
                    <select name='type' class="selection" id="category">
                        <option value="account-problem">Account Problem</option>
                        <option value="personal-info">Personal Information Problem</option>
                        <option value="device-problem">Device Management Problem</option>
                        <option value="other">Other</option>
                    </select>
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
            
            <!-- <script>
            document.getElementById("contact").onblur = function () {
            var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
            if (reg.test(this.value)) {
            this.style.backgroundColor = "#FCEDDA";
            } else {
            this.style.backgroundColor = "red";
            alert("the format of e-mail is wrong!")
            }
            };
            </script> -->

                <div class="button">
                    <div class="submit"><input type="submit" name="contact" value="submit" id = "submit"></div>
                    <div class="reset"><input type="reset" value="Reset"></div>
                </div>

            </div>
        </form>
    </div>
    <script>
        const name = document.getElementById('name');
        const surname = document.getElementById('surname');
        const contact = document.getElementById('contact');

        document.querySlector('contactpage').addEventListener('submit', e => {
            e.preventDefault();
            validateForm();
        });

        function printError(input, message){
            const formControl = input.parentElement;
            const errorMessage = formControl.querySelector('.error-message');
            formControl.classList.add('error');
            errorMessage.textContent = message;
        }

        function removeError(input) {
            const formControl = input.parentElement;
            formControl.classList.remove('error');
        }

        function validateEmail(email){
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        }

        function validateForm(){
            const nameValue = name.value.trim();
            const surnameValue = surname.value.trim();
            const contactValue = contact.value.trim();

            if (nameValue === ""){
                printError(name, "please enter your name");
            } else {
                removeError(name);
            }

            if (surnameValue === ""){
                printError(surname, "please enter your surname");
            } else {
                removeError(surname);
            }

            if (contactValue === ""){
                printError(contact, "please enter your email");
            } else if(!validateEmail(contactValue)){
                printErroe(contact, 'the format of email is incorrect!');
            } else{
                removeError;
            }
        }
        
    </script>
</body>

</html>