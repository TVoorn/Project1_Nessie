<?php

session_start();

include '../connect.php';

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$nessie_code = trim($_POST['nessie_code']);
$hash_password = password_hash($password, PASSWORD_DEFAULT);

if (!empty($_POST)) {
    if (isset($_POST['username'], $_POST['password'], $_POST['nessie_code'])) {
        if (!empty($username) && !empty($hash_password) && !empty($nessie_code)) {
            $insert = $link->prepare("INSERT INTO account (username, password, nessie_code) VALUES (?,?,?)");
            $insert->bind_param('sss', $username, $hash_password, $nessie_code);

            if ($insert->execute()) {
                header('Location: ../register_page.php');
                die();
            }
        }
    }
}

?>