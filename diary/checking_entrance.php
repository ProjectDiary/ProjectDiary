<?php
session_start();
ini_set("display_errors", 1);

$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$email = stripslashes($email);
$email = htmlspecialchars($email);
$pass = stripslashes($pass);
$pass = htmlspecialchars($pass);


$mysql = new mysqli ('localhost', 'root', 'root', 'diary_bd');

$res = $mysql->query("SELECT*FROM `usersdata` WHERE `email`='$email'");

$us = $res->fetch_assoc();
$hash = $us['password'];



if (password_verify($pass, $hash)) {
    setcookie('username', $us['username'], time() + 3600, "/");
    setcookie('lastname', $us['lastname'], time() + 3600, "/");
    setcookie('id', $us['id'], time() + 3600, "/");
    //require_once('main.php');
    header("location: header3.php");
} else {
    $_SESSION['message'] = "Проверь";
    header('location: entrance.php');
}

 

$mysql->close();

?>