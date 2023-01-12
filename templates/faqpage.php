<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../static/css/faq.css">
  <title>FAQ</title>
</head>
<body>
<?php
require_once("navbar.php");
?>
<h1>Frequently Asked Questions</h1>

<!-- Create the question and answer blocks -->
<div class="question">Question 1: What is PHP?</div>
<div class="answer">
  Answer: PHP is a server-side scripting language that is used to create dynamic web pages. It stands for PHP: Hypertext Preprocessor.
</div>

<div class="question">Question 2: How does PHP work?</div>
<div class="answer">
  Answer: PHP scripts are executed on the server, and the resulting HTML is sent to the client. The client's web browser does not execute the PHP code, but rather displays the HTML produced by the PHP script.
</div>

<div class="question">Question 3: What is a PHP script?</div>
<div class="answer">
  Answer: A PHP script is a text file containing a series of PHP commands. It has a .php file extension and is typically saved in the root directory of a web server. When a user requests a PHP page, the server processes the PHP commands and generates the HTML output to be displayed in the user's web browser.
</div>

<div class="question">Question 4: What are some common uses for PHP?</div>
<div class="answer">
  Answer: PHP is often used to create web-based applications, such as content management systems, forums, and e-commerce websites. It can also be used to access and manipulate databases, create dynamic images, and perform server-side validation of form data.
</div>

<div class="question">Question 5: Is PHP easy to learn?</div>
<div class="answer">
  Answer: Some people find PHP relatively easy to learn, while others may find it more challenging. It can depend on your previous programming experience and the resources you use to learn. There are many online tutorials and resources available to help you learn PHP, and practicing by building small
</div>
<?php
require_once("Footer.php");
?>
</body>

</html>