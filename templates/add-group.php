<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['email'])) {
  // Get user ID from session
  $email = $_SESSION['email'];

  // Use user ID globally
//    echo "email: " . $email;
} else {
  // Redirect to login page
  header('Location: C:\xampp\htdocs\iDeahubStuff\authentication\login.php');
}

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'smarthome');

// Check if the connection was successful
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query

$sql = "SELECT users.UserID, users.name, users.surname, COUNT(device.UserID)
FROM users
LEFT JOIN device ON users.UserID = device.UserID
WHERE users.email = '$email'
GROUP BY users.UserID";


// Execute the query
$result = mysqli_query($db, $sql);

// Check if the query was successful
if (!$result) {
  die("Query failed: " . mysqli_error($db));
}

// Fetch the result as an array
$row = mysqli_fetch_array($result);

// Get the the result
$_SESSION['user_id'] = $row[0];
$name = $row[1];
$surname = $row[2];
$num_devices = $row[3];
$user_id = $_SESSION['user_id'];

$sql = "SELECT users.email, device.DeviceName
        FROM users
        LEFT JOIN device
        ON users.UserID = device.UserID
        WHERE users.UserID = $user_id";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $device_names[] = $row['DeviceName'];
    // Use the fetched data in your HTML page

  }
} else {
  echo "No data found";
}


// Close the database connection
mysqli_close($db);

// Print the number of devices
// echo "Number of devices: " . $num_devices;
?>

<!DOCTYPE HTML>
<html>

<head>

  <style>
    body {

      background-color: #FCEDDA;

    }
  </style>

  <link rel="stylesheet" type="text/css" href="../static/css/add-group.css" />

</head>

<body>

  <?php
  require_once("navbar.php");
  ?>

  <div class="pop">
    <div class="divAdd">
      <form action="../authentication/addgroup.php" method="post" target="_blank" class="add">
        <label for="fname">New group name</label>
        <input class="group_title" type="text" id="fname" name="groupname" placeholder="new group name..">
        
        <label for="devices">Devices</label>
        <select id="devices" name="devices" multiple="multiple" class="selectsize">

          <?php for ($i = 0; $i < count($device_names); $i++) { ?>
            <option class="device" value="device1">

              <li>
                <?php echo $device_names[$i]; ?>
              </li>

            <?php } ?>



          </option>
        </select>

        <input id="add_group_btn" type="submit" value="Submit">
      </form>
    </div>


</body>

</div>


</html>