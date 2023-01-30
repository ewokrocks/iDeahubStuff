
<?php
session_start();

if(!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $dob = $_POST['dob'];
    $userid = $_SESSION['userid'];
    $email = $_POST['email'];

    $conn = new mysqli("localhost", "db_username", "db_password", "db_name");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("UPDATE users SET name = ?, surname = ?, dob = ?, email = ? WHERE userid = ?");
    $stmt->bind_param("ssssi", $name, $surname, $dob, $email, $userid);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['dob'] = $dob;
        $_SESSION['email'] = $email;
        echo "Credentials updated successfully!";
    } else {
        echo "Error updating credentials. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
  <head>
    <title>User Credentials</title>
    <link rel="stylesheet" href="../static/css/myacc.css">
  </head>
  <body>
  <?php
require_once("navbar.php");
?>
    <div class="enter">
    <form method="post">
      <label>Name:</label>
      <input type="text" id="name" value="<?php echo $_SESSION['name']; ?>">
      <br>
      <label>Surname:</label>
      <input type="text" id="surname" value="<?php echo $_SESSION['surname']; ?>">
      <br>
      <label>Email:</label>
      <input type="text" id="email" value="<?php echo $_SESSION['email']; ?>" disabled>
      <br>
      <label>Date of birth:</label>
      <input type="text" id="dob" value="<?php echo $_SESSION['dob']; ?>" disabled>
      <br>
      <label>User ID:</label>
      <input type="text" id="user-id" value="<?php echo $_SESSION['userid']; ?>" disabled>
      <br>
      <input type="submit" name="submit" value="Update Credentials">
    </form>
  </div>
  <?php
  require_once("Footer.php");
  ?>
  </body>
</html>
