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
$userId = $row[0];
$name = $row[1];
$surname = $row[2];
$num_devices = $row[3];

$query = "SELECT GroupName FROM DeviceGroup WHERE UserID = $userId";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $groupNames[] = $row['GroupName'];
        // echo "<li>$groupName</li>";
    }
} else {
    echo "<p>No group found for this user</p>";
}

// Close the database connection
mysqli_close($db);

// Print the number of devices
// echo "Number of devices: " . $num_devices;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/main-page.css">
</head>

<body style="background-color:#FCEDDA;">
    <?php
    require_once("navbar.php");
    ?>
    <h2 style="text-align: center; color: #ee4e34;">Welcome
        <?php echo $name . ' ' . $surname; ?>
    </h2>

    <!-- <div class="block__item">
        <div class="square1">
            <div class="nameofgrouptextdevice">Devices connected
                <div class="nameofgrouptextfirst">
                    <p>
                       
                    </p>
                </div>
            </div>

        </div>
    </div> -->

    <div class="block__item">
        <div class="square2">
            <div class="nameofgrouptext">
                <p style="color: #FCEDDA;">Total devices connected:
                    <?php echo $num_devices; ?>
                </p>
            </div>

        </div>
    </div>

    <?php for ($i = 0; $i < count($groupNames); $i++) { ?>
        <div class="block__item1">
            <div class="square7">
                <div class="nameofgrouptext">

                    <?php echo $groupNames[$i]; ?>


                    <a href="page2.html"><img class="arrow" src="../static/images/arrow1.svg"></a>
                </div>
                <img class="arrow" src="../static/images/arrow1.svg">
            </div>
        </div>
    <?php } ?>

    <div class="block__item1">
        <div class="square8">
            <a href="add-group.php">
                <img href="page2.html" class="plus" src="../static/images/plus.svg">
            </a>
            <div class="textlayout">New Layout</div>
        </div>
    </div>
    <br>



</body>

</html>