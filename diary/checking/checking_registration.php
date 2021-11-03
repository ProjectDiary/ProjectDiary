<?php
session_start();
ini_set("display_errors", 1);

$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$passconfirm = filter_var(trim($_POST['pass-confirm']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);

$email = stripslashes($email);
$email = htmlspecialchars($email);
$passconfirm = stripslashes($passconfirm);
$passconfirm = htmlspecialchars($passconfirm);
$pass = stripslashes($pass);
$pass = htmlspecialchars($pass);
$username = stripslashes($username);
$username = htmlspecialchars($username);
$lastname = stripslashes($lastname);
$lastname = htmlspecialchars($lastname);



$mysql = new mysqli ('localhost', 'root', 'root', 'diary_bd');
$result = $mysql->query("SELECT*FROM `usersdata` WHERE `email` = '$email'");
$user = $result->fetch_assoc();



if (!empty($user['id'])) {
    $_SESSION['message'] = "Введенный вами email уже используется";
    header('location: registration.php');
    exit();
} else if (mb_strlen($username) < 3) {
    $_SESSION['message'] = "Недопустимая для имени";
    header('location: registration.php');
    exit();
} else if (mb_strlen($lastname) < 3) {
    $_SESSION['message'] = "Недопустимая для фамилии";
    header('location: registration.php');
    exit(); 
} else if ($pass!=$passconfirm) {
    $_SESSION['message'] = "пароли не совпадают";
    header('location: registration.php');
    exit();
}

//           НЕ ТРОГАЙ!!!!!!!!!!!!!!!


// $mail = new PHPMailer
// $mail->CharSet = 'utf-8';

// $mail->isSMTP();
// $mail->host = 'smtp.mail.ru'; 
// $mail->SMTPAuth = true;
// $mail->Username = 'tuks_fuks@mail.ru';
// $mail->Password = '22052003muha';
// $mail->SMTPSecure = 'ss1';
// $mail->Port = 465;

// $mail->setFrom('tuks_fuks@mail.ru');
// $mail->addAddress($email);
// $mail->isHTML(true);

// $mail->Subject = 'Поздравляю! Вы были усешно зарегистрированы';
// $mail->Body = '';
// $mail->AltBody = '';

// if (!$mail->send()) {
//     $_SESSION['message'] = 'Вы указали неверную почту';
//     header('location: /registration.php');
//     exit();
// }


//           НЕ ТРОГАЙ!!!!!!!!!


$pass = password_hash($pass, PASSWORD_DEFAULT);
$result2 = $mysql->query ("INSERT INTO `usersdata` (`email`,`password`, `username`, `lastname`) VALUES ('$email','$pass', '$username', '$lastname')");

if ($result2=='TRUE'){
$_SESSION['message'] = "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
header('location: registration.php');
     exit();
 }
else {
    echo "Ошибка! Вы не зарегистрированы.";
     }

?>