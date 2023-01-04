<?php    header ( "Content-type:text/html;charset=utf-8" );

$servername="127.0.0.1:4306";
$username="root";
$password="";
$dbname="mydata";

$conn = mysqli_connect($servername,$username,$password,$dbname);

    $conn->set_charset('utf8');

 
    $id= $_POST['id'];
    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    
    $age=$_POST['age'];

    

    $sql = "INSERT INTO person(id,first_name,last_name,age) 

                VALUES ('{$id}','{$first_name}','{$last_name}' ,'{$age}')";

    mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo("successfully！！")     ?>