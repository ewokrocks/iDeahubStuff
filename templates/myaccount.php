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
    <form>
      <br>
      <label>Name:</label>
      <input type="text" id="name" value="John">
      <br>
      <br>
      <label>Surname:</label>
      <input type="text" id="surname" value="Doe">
      <br>
      <br>
      <label>Email:</label>
      <input type="text" id="email" value="johndoe@example.com" disabled>
      <br>
      <br>
      <label>Date of birth:</label>
      <input type="text" id="dob" value="01/01/2000" disabled>
      <br>
      <br>
      <label>User ID:</label>
      <input type="text" id="user-id" value="12345" disabled>
      <br>
      <br>
      <br>
      <input type="submit" value="Change Credentials">
    </form>
  </div>
  <?php
  require_once("Footer.php");
  ?>
  </body>
</html>
