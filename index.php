<?php
session_start();

require 'connect.php';
require 'security.php';
require 'includes/register.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>


    <link rel="stylesheet" href="css/style.css">
    <!--
    <script src='https://www.google.com/recaptcha/api.js'></script>
  -->
</head>

<body>
<div class="logo-text">Nessie</div>

<div class="login-page">
    <div class="form">
        <form class="register-form" action="includes/register.php" method="post">
            <input class="username" type="text" name="username" id="username" placeholder="name" autocomplete="off" required/>
            <input type="password" name="password" id="password" placeholder="password" autocomplete="off" required/>
            <input type="text" name="nessie_code" id="nessie_code" placeholder="nessie-code" autocomplete="off" required/>
            <!--
            <div class="g-recaptcha" data-sitekey="6Ld5FQoUAAAAAJxj84cEY2ZTcmv91mX5wydvOURs"></div>
      -->
            <button value="Insert">create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="includes/login.php" method="post">


            <input type="text" name="username" id="username" placeholder="username" autocomplete="off" required/>
            <input type="password" name="password" id="password" placeholder="password" autocomplete="off" required/>
            <button>login</button>
            <div class="login-error">
            <?php $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); if ($_GET["loginFailed"])
                echo $reasons[$_GET["reason"]]; ?>
    </div>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
<!--

        <form action="includes/logout.php">
            <button>LOG OUT</button>
        </form>

        <?php
        if (isset($_SESSION['id'])){
            echo $_SESSION['id'];
        } else{
            echo "You are not logged in!";
        }

        ?>
-->
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>


</body>
</html>
