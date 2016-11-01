<?php

session_start();

include '../connect.php';

if (!empty($_POST)) {
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty') !== false) {
        echo "Fill out all fields!";
    }


    if (isset($_POST['username'], $_POST['password'], $_POST['nessie_code'])) {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $nessie_code = trim($_POST['nessie_code']);

        if (!empty($username) && !empty($password) && !empty($nessie_code)) {
            $insert = $link->prepare("INSERT INTO account (username, password, nessie_code) VALUES (?,?,?)");
            $insert->bind_param('sss', $username, $password, $nessie_code);

            if ($insert->execute()) {
                header('Location: ../register_page.php');
                die();
            }
        }
    }
}

?>