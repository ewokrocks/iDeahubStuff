
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/contactus.css">
    <title>Document</title>
</head>
<body>
<?php
require_once("navbar.php");
?>
    <div class="main">
        
        <div class="title">
            <div class="title_top"></div>
            <br>
            <div class="title_bottom">CONTACT US</div>
        </div>

        <form action="contact.php" method="POST">
        <div class="content">
            
            <div class="name">Name<br>
                <input type="text" name="name" value="" maxlength="20">
            </div>

            <div class="surname">Surname<br>
                <input type="text" name="surname" value="" maxlength="20">
            </div>

            <div class="contact">E-mail<br>
                <input type="text" name="email" value="" maxlength="20">
            </div>

            <div class="catagory">Question Type<br>
                <select name='question_type' class="selection">
                    <option value="account-problem">Account Problem</option>
                    <option value="personal-info">Personal Information Problem</option>
                    <option value ="device-problem">Device Management Problem</option>
                    <option value= "other">Other</option>
                </select>
            </div>

            <div class="description">Specific Description<br>
                <textarea name="message" cols="50" rows="5" class="textarea"></textarea>
            </div>

            <!-- <div class="photo">Screenshot of The Problem<br>
                <div class="file">
                    <div class="file1"></div>
                <input type="file" name="screenshot" value="111">
                </div>
                
            </div> -->

            <div class="button">
                <div class="submit"><input type="submit" value="Submit"></div>
                <div class="reset"><input type="reset" value="Reset"></div>
            </div>

        </div>
        </form>
    </div>
    <?php
require_once("Footer.php");
?>
</body>
</html>