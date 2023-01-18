<?php
include "db.php";
if (isset($_POST['submit'])) {
    $groupname=$_POST['groupname'];
    $device="";
    $devices = $_POST['devices'];
    $nSelection = count($devices);
    for($i=0; $i < $nSelection; $i++)
    {
        $numberVal = $devices[$i];

            if ($numberVal == "11"){
            echo("Eleven"); 
            }
            else if ($numberVal == "12"){
            echo("Twelve"); 
            } 

        }
?>

    $conn = mysqli_connect ("localhost","root", "","smarthome") ;

    $sql = "select * from user where email = '$email' and password_hash = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);     
}
?>