<?php
/**
 * Created by PhpStorm.
 * User: tjardavoorn
 * Date: 12/10/2016
 * Time: 11:07
 */

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];


$user = 'root';
$password = 'root';
$db = 'database_test';
$host = 'localhost';
$port = 8889;

$link = mysqli_init(); // <- gebruiken voor queries
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
) or die("Database not connected correctly");

$result = $link->query("SELECT * FROM account WHERE username='12344'") or die($link->error);

//print_r($result);

?>