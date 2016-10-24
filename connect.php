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

print_r($result);



/*

$sql = "SELECT * FROM 'username' WHERE 'username' = 'test'";


$results = mysqli_query($sql);
var_dump($results);



$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
$querypass = "SELECT * FROM 'users' WHERE 'password' = '$inputpass' ";

$result = mysqli_query($query);
$resultpass = mysqli_query($querypass);

$row = mysqli_fetch_array($result);
$rowpass = mysqli_fetch_array($resultpass);

$serveruser = $row["username"];
$serverpass = $row["password"];

if($serveruser&&$serveruser){
    if(!$result){
        die("Username or password is invalid");
    }
}

echo $result;
echo $resultpass;

mysqli_close();

*/
?>