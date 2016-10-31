<?php

include 'connect.php';

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM account WHERE username='$username' AND password='$password' ";
$result = mysqli_query($link, $sql);

if(!$row = mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
} else{
    echo "You are logged in";
    header("Location: control.html");

}

//header("Location: index.php");