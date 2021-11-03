<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная Страница</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/chek.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style>
body {
  background-image: url('izo/book.jpeg');
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.logotip{
	border-radius: 180px;
	border:  3px slod green;
	height: 70px;
	width: 70px;
}
</style>

<header>
	<a href="/index.php">
	<img src="izo/muha.jpeg" class="logotip"></button>
	</a>
	<form action="entrance.php" method="post">
	<input type="submit" class="logo" value="войти">
	</form>
	<form action="registration.php">
	<input type="submit" class="logo" value="зарегистрироваться">
	</form>
	<form action="aboutme.php" method="post">
	<input type="submit" class="logo" id="logo1"value="узнать о нас">
	</form>
</header>
