<?php
/**
 * Created by PhpStorm.
 * User: tjardavoorn
 * Date: 03/11/2016
 * Time: 12:30
 */

$passwordhashh = 'hoi';
$hash = password_hash($passwordhashh, PASSWORD_DEFAULT);
echo "<br>". $passwordhashh;

echo "<br>". $hash;

echo "<br>".password_verify($passwordhashh,$hash);