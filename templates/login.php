<!DOCTYPE html>

<html>

<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration </title>

    <link rel="stylesheet" type="text/css" href="../static/css/login.css">
    <?php
require_once("navbar.php");
?>
</head>

<body style="background-color:#FCEDDA;">

    <form action="login.php" method="post"> 

        <div class="container">

            <img src="../static/images/SmartHome.png">
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Best way to impress your house</p>
            <div class="innercontainer">
    
                <div class="input-field"><input type="text" placeholder="Email address" required></div>
                <div class="input-field"><input type="password" placeholder="Password" required>
                </div>
    
    
                <div class="line">Forgotten password?</div>
    
                <button type="submit" value="Login" id="submit">Login</button><br>
                <a href="register.html"><button class="create">Create new account</button></a>
    
    
            </div>



            <div class="line"><a href="/authentication/forgotpass.php">Forgotten password?</a></div>

            <button type="submit" value="Login" id="submit">Login</button><br>
            <a href="register.html"><button class="create">Create new account</button></a>




        </div>
    
        </div>

    </form>
   
    <?php
  require_once("Footer.php");
  ?>
</body>

</html>