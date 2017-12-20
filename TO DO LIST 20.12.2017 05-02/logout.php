<?php
include 'authorize.php';

$db = json_decode(file_get_contents("users.json"), true);

file_put_contents("users.json", json_encode($db));
setcookie("token", $token, time () - 1, "auth.php");

header('Location: login.php');  
?>