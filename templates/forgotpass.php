<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" href="../static/css/forgotpass1.css">
</head>
<body>
	<form action="forgot-password.php" method="post">
		<!-- Email field -->
		<div class="textemail"><label for="email">Enter your email address:</label></div><br>
		<input type="email" name="email" id="email" required><br>
		<!-- Submit button -->
		<input class="textemail" type="submit" value="Send Reset Link">
	</form>
	<?php
		if(isset($_POST['email'])) {
			// Send the reset password email here
			echo '<p class="success">Reset password email sent!</p>';
		}
	?>
</body>
</html>