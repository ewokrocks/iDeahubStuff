<?php
session_start();
$current_user_email = $_SESSION['email'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else if (empty($password)) {
        // Validate the password
        $error = "Password is required.";
    } else {
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "smarthome");

        // Check for connection errors
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the email and password exist in the database
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        // Check if the query is successful and the result has a row
        if (mysqli_num_rows($result) == 1) {
            // Create a session and set the email
            $_SESSION['email'] = $email;

            // Create a cookie and set the email
            setcookie("email", $email, time() + (86400 * 30), "/");

            // Redirect to the dashboard
            header("Location: /../iDeahubStuff/templates/main-page.php");
            exit();
        } else {
            $error = "Email or password is incorrect.";
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../static/css/login.css">

</head>
<?php

require_once __DIR__ . '/../templates/navbar.php';

?>

<body>
    <div class="form-container">
        <form action="login.php" method="post">
        <h1 class="fancy-title">Log In</h1>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="GO!">
        </form>
        <br>
    
        <p><a href="forgotpass.php">Forgot Password?</a></p>
        <br>
       <p><a href="register.php">Don't have an account?</a></p>

        <?php if (!empty($error)) { ?>
            <p class="error">
                <?php echo $error; ?>
            </p>
        <?php } ?>
    </div>


</body>

</html>