<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная Страница</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="diary/css/chek.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style>
body {
  background-image: url('diary/izo/book.jpeg');
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
    <a href="index.php">
    <img src="diary/izo/muha.jpeg" class="logotip">
    </a>
    <form action="diary/entrance.php" method="post">
    <input type="submit" class="logo" value="войти">
</form>
    <form action="diary/registration.php" method="post">
    <input type="submit" class="logo" value="зарегистрироваться">
</form>
    <form action="diary/aboutme.php" method="post">
    <input type="submit" class="logo" id="logo1"value="узнать о нас">
    </form>
</header>

<div class="greet">
 <p id="h">ПРИВЕТ</p>
 <p>Дорогой писатель.<br> На нашем сайте, ты можешь делится своими<br> переживаниями, сочинять поэзии,<br> или писать о сегодняшнем дне.<br> Мы очень надеемся, что вы останетесь довольны.</p>
 <img id="pen" src="diary/izo/pen1.png">
</div>
<div class="box1">
    <p id="nt">Создавать заметки<br> легко, записывайте<br>все-что нужно<br> на скорую руку</p>
    <img id="note" src="diary/izo/note1.png">
</div>
<div class="box2">
    <p id="menwr">делитесь своими<br> переживаниями<br>и прекрасными<br> моментами жизни<br>с лучшим другом,<br>который теперь,<br>всегда под рукой</p>
    <img id="mw" src="diary/izo/menwrite.png">
</div>
</body>
</html>