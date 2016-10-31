<?php

session_start();

include 'connect.php';

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