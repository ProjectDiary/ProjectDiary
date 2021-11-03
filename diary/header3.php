<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo "$title";?></title>
</head>
<body class="body">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
	<link rel="stylesheet" type="text/css" href="css/check2.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<header>
	<a href="/index.php" id="logg">
	<img src="izo/muha.jpeg" class="logotip"></button>
	</a>
<script>
	function toggleMenu() {
  var menuBox = document.getElementById('menu-box');    
  if(menuBox.style.display == "block") { // if is menuBox displayed, hide it
    menuBox.style.display = "none";
  }
  else { // if is menuBox hidden, display it
    menuBox.style.display = "block";
  }
}
</script>
</header>

<div class="menu">
<p id="menu" onclick="toggleMenu()"><img src="izo/menu.png" id="icon"></p>
<ul id="menu-box" style="display: block">
  <li><a href="personal_area.php" class="lk">Личный кабинет</a></li>
  <li><a href="animal.html"class="lk">Настройки</a></li>
  <!-- <li><a href="pictures.html"></a></li> -->
</ul>
</div>

<div class="block1">
	<a href="/index.php">
	<img id="izobr1" class="izobr" src="izo/feather.png">
	</a>
	<p id="choice1" class="choice">Попробуй себя в творчестве</p>
</div>


<div class="block2">
	<a href="/index.php">
	<img id="izobr2" class="izobr" src="izo/wr.png">
  </a>
	<p id="choice2" class="choice">Записывай самое сокровенное</p>
</div>

<div class="block3">
	<a href="/index.php">
	<img id="izobr3" class="izobr" src="izo/daybook.png">
	</a>
	<p id="choice3" class="choice">Ваши заметки на скорую руку</p>
</div>