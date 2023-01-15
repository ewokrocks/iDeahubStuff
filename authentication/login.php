<?php

include "db.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "smarthome");

    $sql = "select * from user where email = '$email' and password_hash = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: ///localhost/iDeahubStuff/templates/main-page.html");
    } else {
        echo '<script>
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }
}


?>

<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../static/css/login.css">

</head>


<body style="background-color:#FCEDDA;">

    <?php

    require_once __DIR__ . '/../templates/navbar.php';

    ?>

    <div class="main">

        <div class="title">
            <div class="title_top"></div>
            <br>
            <div class="title_bottom">Log in</div>
        </div>

        <form action="login.php" onsubmit="return isvalid()" method="post">
            <div class="content">

                <div class="email"><label for="email">Email</label><br>
                    <input type="text" name="email" value="" maxlength="200" id="email">
                </div>

                <div class="password"><label for="password">Password</label><br>
                    <input type="text" name="password" value="" maxlength="200" id="password">
                </div>

                <div class="button">
                    <div class="submit"><input type="submit" name="submit" value="Log in!"></div>

                </div>

                <a href="http://"> Forgot password? </a>

            </div>
        </form>

    </div>


    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.length == "" && pass.length == "") {
                alert(" Username and password field is empty!!!");
                return false;
            }
            else if (user.length == "") {
                alert(" Username field is empty!!!");
                return false;
            }
            else if (pass.length == "") {
                alert(" Password field is empty!!!");
                return false;
            }

        }
    </script>


</body>