
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<<<< Temporary merge branch 1:templates/contact us.html
    <link rel="stylesheet" href="../static/css/contact-us.css">
=========
    <link rel="stylesheet" href="../static/css/contactus.css">
>>>>>>>>> Temporary merge branch 2:templates/contact us.php
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

        <form action="../core/contact.php" method="post">
        <div class="content">
            
            <div class="name"><label for="name">Name</label><br>
                <input type="text" name="name" value="" maxlength="20" id="name">
            </div>

            <div class="surname"><label for="surname">Surname</label>><br>
                <input type="text" name="surname" value="" maxlength="20" id="surname">
            </div>

            <div class="contact"><lable for="contact">E-mail</lable>><br>
                <input type="text" name="email" value="" maxlength="20" id="contact">
            </div>

            <div class="catagory"><label for="category">Question Type</label>><br>
                <select name='type' class="selection" id="category">
                    <option value="account-problem">Account Problem</option>
                    <option value="personal-info">Personal Information Problem</option>
                    <option value ="device-problem">Device Management Problem</option>
                    <option value= "other">Other</option>
                </select>
            </div>

            <div class="description"><lable for="description">Specific Description</lable>><br>
                <textarea name="message" cols="50" rows="5" class="textarea" id="description"></textarea>
            </div>

            <!-- <div class="photo"><lable for="photo">Screenshot of The Problem</lable>><br>
                <div class="file">
                    <div class="file1"></div>
                <input type="file" name="screenshot" value="111" id="photo">
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