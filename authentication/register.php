<?php include "db.php" ?>
<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smarthome";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_password = $_POST['verify_password'];

    // Initialize error message
    $error = "";

    // Validate name
    if (empty($name)) {
        $error .= "Name is required.<br>";
    }

    // Validate surname
    if (empty($surname)) {
        $error .= "Surname is required.<br>";
    }

    // Validate email
    if (empty($email)) {
        $error .= "Email is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Invalid email format.<br>";
    }

    // Validate password
    if (empty($password)) {
        $error .= "Password is required.<br>";
    } elseif (strlen($password) < 8) {
        $error .= "Password must be at least 8 characters long.<br>";
    }

    // Validate verify password
    if (empty($verify_password)) {
        $error .= "Verify password is required.<br>";
    } elseif ($password != $verify_password) {
        $error .= "Password and verify password do not match.<br>";
    }

    // If there is no error, add user to database
    if (empty($error)) {
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, surname, email, password)
                VALUES ('$name', '$surname', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            header("location:signup-success.html");
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo $error;
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

    <?php

    require_once __DIR__ . '/../templates/navbar.php';

    ?>

    <br>

    <form action="" method="post">
        <br>
        <img src="../static/images/SmartHome.png">
        <br>
        <div class="form-field">
            <input type="text" name="name" placeholder="Name" id="name">
            <div class="error-message" id="nameError"></div>
        </div>
        <div class="form-field">
            <input type="text" name="surname" placeholder="Surname" id="surname">
            <div class="error-message" id="surnameError"></div>
        </div>
        <div class="form-field">
            <input type="email" name="email" placeholder="Email" id="email">
            <div class="error-message" id="emailError"></div>
        </div>
        <div class="form-field">
            <input type="password" name="password" placeholder="Password" id="password">
            <div class="error-message" id="passwordError"></div>
        </div>
        <div class="form-field">
            <input type="password" name="verify_password" placeholder="Verify Password" id="verifyPassword">
            <div class="error-message" id="verifyPasswordError"></div>
        </div>
        <input type="submit" name="submit" value="Register!" onclick="return validateForm()">
        <br>
        <p style="color: #FCEDDA !important;"> <a href="login.php">Already have an account? Log in!</a></p>
    </form>


</body>

</html>