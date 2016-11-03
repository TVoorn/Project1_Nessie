<?php

session_start();

include '../connect.php';
include 'register.php';


$sql = "SELECT * FROM account WHERE username='$username'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
$verify = password_verify($_POST['password'],$row[2]);

if($verify){
    $_SESSION["username"]=$username;
    header("Location: ../control.html");
    echo "You logged in!";
}else
{
    $_SESSION['id'] = $row['id'];

}


if(!$row = mysqli_fetch_assoc($result) && $verify){

    die(header("location:../index.php?loginFailed=true&reason=password"));

} else{
    $_SESSION['id'] = $row['id'];

}

header("Location: ../control.html");
