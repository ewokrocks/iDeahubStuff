<?php include "db.php" ?>

<?php

if(isset($_POST['register'])){
    
    $username = $_POST['name'];
    $lastname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    global $con;

    $sql = "INSERT INTO user (name, surname,email, password_hash)
        VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->stmt_init();
    if ( ! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }
    
    $stmt->bind_param("ssss",
                      $_POST["surname"],
                      $_POST["name"],
                      $_POST["email"],
                      $password);
                      
    if ($stmt->execute()) {
    
        header("Location: signup-success.html");
        exit;
        
    } else {
        
        if ($mysqli->errno === 1062) {
            die("email already taken");
        } else {
            die($mysqli->error . " " . $mysqli->errno);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO-8859-1">
    <title>Registration form</title>
    <link rel="stylesheet" type="text/css" href="../static/css/register.css">
</head>

<body style="background-color:#FCEDDA;">

    <div class="container">

        <img src="../static/images/SmartHome.png">
        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Best way to impress your house</p>

        <div class="innercontainer">

            <form action="../authentication/register.php" name="register" method="POST" id="register" novalidate >

                <div class="input-field"><input type="text" name="name" placeholder="Name" required></div>


                <div class="input-field"><input type="text" name="surname" placeholder="Surname" required></div>


                <div class="input-field"><input type="email" name="email" placeholder="Email address" required></div>


                <div class="input-field"><input type="password" name="password" placeholder="Password" required></div>


                <div class="input-field"><input type="password" name="password_confirmation" placeholder="Confirm Password" required></div>


                <button type="submit" name="register" value="Submit" id="button">Sign up</button><br>

            </form>

            <div class="line">
                Already have an account!
                <a href="login.html">Login here</a>
            </div>

        </div>

    </div>



    <script type="text/javascript">
        function save() {
            var email = document.getElementById("email").value;
            var pwd = document.getElementById("pwd").value;
            alert("email" + email + "password" + pwd);
        }
    </script>

</body>

</html>

