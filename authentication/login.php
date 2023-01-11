<?php

include "db.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect ("localhost","root", "","smarthome") ;

    $sql = "select * from user where email = '$email' and password_hash = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        header("Location: ///localhost/iDeahubStuff/templates/main-page.html");
    }  
    else{  
        echo  '<script>
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }     
}


?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:#FCEDDA;">
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Email: </label>
                <input type="text" id="user" name="email"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="password"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>

