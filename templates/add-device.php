<?php



$servername = "localhost";
$username = "username";
$password = "password";



$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$devices = $_POST["devices"];

	foreach ($devices as $device) {
		$sql = "INSERT INTO devices (name) VALUES ('$device')";

		if (mysqli_query($conn, $sql)) {
			echo "Device added successfully<br>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Devices to your Smart Home </title>
	<style>
		body {
			background-color: #FCEDDA;
			color: #EE4E34;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
		}
		form {
			width: 400px;
			margin: 50px auto;
			padding: 20px;
			border: 3px solid #EE4E34;
			border-radius: 10px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #EE4E34;
			border-radius: 5px;
		}
		input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #EE4E34;
			color: #FCEDDA;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #FCEDDA;
			color: #EE4E34;
		}
	</style>
</head>
<body>
<?php
  require_once("navbar.php");
  ?>
	<h1>Add Devices to Smart Home</h1>
	<form action="add_devices.php" method="post">
		<label for="devices">Devices:</label>
		<textarea id="devices" name="devices" rows="5"></textarea>
		<input type="submit" value="Add">
	</form>
</body>
</html>