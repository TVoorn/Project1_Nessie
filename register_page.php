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

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<div class="logo-text">Nessie</div>

<div class="login-page">


    <div class="form">

        <div class="register-message">
            Your account is successfully created
        </div>

        <form action="index.php">
            <button>RETURN</button>
        </form>

    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>


</body>
</html>
