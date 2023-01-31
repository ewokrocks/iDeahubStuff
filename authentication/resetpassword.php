<?php include "db.php" ?>

<html>

<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&display=swap');

    body {
      background-color: #FCEDDA;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 500px;
      margin: 0 auto;
      background-color: #EE4E34;
      border-radius: 10px;
      padding: 20px;
    }

    input[type="password"] {
      width: 100%;
      height: 30px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      padding: 0 10px;
      font-size: 16px;
    }

    input[type="submit"] {
      width: 100%;
      height: 35px;
      border: none;
      border-radius: 5px;
      background-color: #EE4E34;
      color: #FCEDDA;
      font-size: 18px;
      cursor: pointer;
    }

    .message {
      margin-top: 20px;
      font-size: 18px;
    }

    .match {
      color: #00C853;
    }

    .mismatch {
      color: #ff4444;
    }
  </style>
</head>

<body>

  <?php

  require_once __DIR__ . '/../templates/navbar.php';

  ?>

  <br> <br>

  <form action="" method="post">
    <input type="password" name="current-password" placeholder="Enter your current password" required>
    <input type="password" name="new-password" placeholder="Enter new password" required>
    <input type="password" name="confir-password" placeholder="Confirm new password" required>
    <input type="submit" value="Submit">
  </form>

  <?php
  session_start();

  $current_user_email = $_SESSION['email'];
  echo $current_user_email;

  if (isset($_POST['submit'])) {
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confir-password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smarthome";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // get user id of the logged in user
    $current_user_email = $_SESSION['email'];

    // prepared statement to get current password of the user
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $current_user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    // check if the current password is correct
    if ($row['password'] === $currentPassword) {
      // check if the new password and confirm password match
      if ($newPassword === $confirmPassword) {
        // prepared statement to update the password
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $newPassword, $current_user_email);
        if ($stmt->execute()) {
          echo "Password updated successfully";
        } else {
          echo "Error updating password";
        }
        $stmt->close();
      } else {
        echo "New password and confirm password do not match";
      }
    } else {
      echo "Incorrect current password";
    }

    $conn->close();
  }

  ?>


</body>

</html>