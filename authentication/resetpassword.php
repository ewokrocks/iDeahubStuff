<?php include "db.php" ?>


<html>
  <head>
    <style>
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

    <form action="" method="post">
      <input type="password" name="password" placeholder="Enter new password" required>
      <input type="password" name="confirm_password" placeholder="Confirm new password" required>
      <input type="submit" value="Submit">
    </form>
    <div class="message">
      <?php
        if (isset($_POST['password']) && isset($_POST['confirm_password'])) {
          $password = $_POST['password'];
          $confirm_password = $_POST['confirm_password'];
          if ($password == $confirm_password) {
            $sql = "UPDATE users SET password = '$password'";
            echo '<p class="match">Passwords match</p>';
          } else {
            echo '<p class="mismatch">Passwords do not match</p>';
          }
        }
      ?>
    </div>
  </body>
</html>