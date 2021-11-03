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
	<img src="izo/muha.jpeg" class="logotip">
	</a>
</header>
<p>.</p>

<div class="froma">
<form action="main.php" method="post" enctype="multipart/form-data">
	<input type="file" name="filename">
	<input type="submit" value="отправить">
</form>
</div>

<p id="un"><?php echo $_COOKIE['username'];?></p>
<p id="ln"><?php echo $_COOKIE['lastname'];?></p>