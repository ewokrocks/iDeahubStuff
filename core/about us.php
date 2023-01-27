<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/about-us.css">
</head>

<?php

require_once __DIR__ . '/../templates/navbar.php';

?>

<div class="textmain">Our core values</div>
<br>
<div style="display:flex; justify-content:space-evenly;" class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Innovation</h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p style="color: #EE4E34;" class="card-text">Innovation plays a key role in introducing novelty to existing
                product lines or processes, leading to increased market share, revenue, and customer satisfaction. </p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Safety</h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p style="color: #EE4E34;" class="card-text">Its goals are clear: no accidents, no harm to people and no
                damage to the environment. That's a huge responsibility </p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Excellence</h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p style="color: #EE4E34;" class="card-text">We are committed to excellence through the systematic and
                disciplined management of our operations.</p>
        </div>
    </div>

</div>

<br>
<br>
<br>
<br>

<?php

require_once __DIR__ . '/../templates/footer.php';

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>