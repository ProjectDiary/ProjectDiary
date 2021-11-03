<?php
	session_start();
	ini_set("display_errors", 1);
	//echo $_FILES['filename']['size'];
	//echo $_FILES['filename']['name'];

	$mysql = new mysqli ('localhost', 'root', 'root', 'diary_bd');

	//$_FILES['filename']['name'] = $_COOKIE['id'].'.png';
	//echo $_FILES['filename']['name'];

	$avaName = rand();
	$avaName2 = $avaName;

	$result2 = $mysql->query ("INSERT INTO `usersdata` (`kag`) VALUES ('$avaName2')");


	if ($result2=='TRUE'){
$_SESSION['message'] = "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
     exit();
 }
else {
    echo "Ошибка! Вы не зарегистрированы.";
     }

	move_uploaded_file($_FILES['filename']['tmp_name'], 'avatar/'.$_FILES['filename']['name']);
?>