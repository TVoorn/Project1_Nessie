<?php
require 'connect.php';
require 'security.php';

if(!empty($_POST)){
  if(isset($_POST['username'], $_POST['password'], $_POST['nessie_code'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $nessie_code = trim($_POST['nessie_code']);

    if(!empty($username) && !empty($password) && !empty($nessie_code)){
      $insert = $link->prepare("INSERT INTO account (username, password, nessie_code) VALUES (?,?,?)");
      $insert->bind_param('sss', $username, $password, $nessie_code);

      if($insert->execute()){
        header('Location: index.php');
        die();
      }
    }
  }
}
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
    <form action="" method="post" class="register-form">
      <input type="text" name="username" id="username" placeholder="name" autocomplete="off"/>
      <input type="password" name="password" id="password" placeholder="password" autocomplete="off"/>
      <input type="text" name="nessie_code" id="nessie_code" placeholder="nessie-code" autocomplete="off"/>
      <div class="g-recaptcha" data-sitekey="6Ld5FQoUAAAAAJxj84cEY2ZTcmv91mX5wydvOURs"></div>

      <button value="Insert">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="login.php" method="post">

      <input type="text" name="username" id="username" placeholder="username" autocomplete="off"/>
      <input type="password" name="password" id="password" placeholder="password" autocomplete="off"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>

    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>



</body>
</html>
