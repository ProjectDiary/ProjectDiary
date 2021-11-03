<?php
session_start();
ini_set("display_errors", 1);

$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$mysql = new mysqli ('localhost', 'root', 'root', 'diary_bd');

$result = $mysql->query("SELECT*FROM `usersdata` WHERE `email` = '$email' AND `password` = '$pass'");
$user = $result->fetch_assoc();


 $_SESSION['message'] = "Вы ввели неверные данные";
 header('location: entrance.php');


$mysql->close();

?>