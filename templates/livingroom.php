<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/room.css">
</head>

<body>
    <!-- <div>
    <div class="rcorners1 toggle-button-wrapper ">
    <img src="../static/images/airconditioner.png" alt="airconditioner"> <br>
    <input type="checkbox" id="toggle-button" name="switch">
    <label for="toggle-button" class="button-label">
        <span class="circle"></span>
        <span class="text on">ON</span>
        <span class="text off">OFF</span>
    </label> 
    <p>Air Conditioner</p> 
    </div>
    <div class="rcorners1 toggle-button-wrapper">
    <img src="../static/images/light.png" alt="light"> <br>
    <input type="checkbox" id="toggle-button2" name="switch2">
    <label for="toggle-button2" class="button-label">
        <span class="circle"></span>
        <span class="text on">ON</span>
        <span class="text off">OFF</span>
    </label>
    <p>Light</p> 
</div> -->

    <?php
    require_once("navbar.php");
    ?>

    <div class="pop">
        <div class="rcorners1"><br>
            <img src="../static/images/lightoff.png" alt="light"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Light</p>
        </div>
        <div class="rcorners1"><br>
            <img src="../static/images/air-conditioner-on.png" alt="airconditioner"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Airconditioner</p>
        </div>
        <div class="rcorners1"><br>
            <img src="../static/images/lampoff.png" alt="lampoff"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Light</p>
        </div>
        <div class="rcorners1"><br>
            <img src="../static/images/lighton.png" alt="light"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Light</p>
        </div>
        <div class="rcorners1"><br>
            <img src="../static/images/lampon.png" alt="lamp"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Light</p>
        </div>
        <div class="rcorners1"><br>
            <img src="../static/images/window.png" alt="window"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Window</p>
        </div>
        <div class="rcorners1">
            <br>
            <img src="../static/images/windowsON.png" alt="windowsON"> <br><br>
            <input class="switch-button" type="checkbox">
            <p>Window</p>
        </div>
        <div class="rcorners1">
            <br>
            <img src="../static/images/washing-machine-off.png" alt="washing-machine"><br>
            <br>
            <input class="switch-button" type="checkbox">
            <p>Washing-machine</p>
        </div>
    </div>

</body>

</html>