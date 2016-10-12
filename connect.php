<?php
/**
 * Created by PhpStorm.
 * User: tjardavoorn
 * Date: 12/10/2016
 * Time: 11:07
 */

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];


$user = "";
$password = "";

$connect = mysqli_connect("localhost",$Username,$Password,$Nessie_users)
or die('Error connecting to MySQL server.');

$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
$querypass = "SELECT * FROM 'users' WHERE 'password' = 'inputpass' ";

$result = mysqli_query($query);
$resultpass = mysqli_query($querypass);

$row = mysqli_fetch_array($result);
$rowpass = mysqli_fetch_array($resultpass);

$serveruser = $row["username"];
$serverpass = $row["password"];

echo $result;
echo $resultpass;

mysqli_close();
?>