<?php
	session_start();
	$title = "Вход";
	require_once('header2.php');
?>
<div class="gret">
<div class="row">
	<div class="col">
		<form action="checking_entrance.php" method="post">
		<input type="email" placeholder="email" id="em" name="email" class="validate">
		<input type="password" placeholder="пароль" id="pss_en" name="pass" class="validate">
		<input type="submit" name="" value="войти" class="logo" id="enter">
		</form>
	</div>
	<div class="col">
		<form action="registration.php" method="post">
		<input type="submit" name="" value="авторизоваться" class="logo" id="auth">
		</form>
	</div>
</div>
	<?php
		if ($_SESSION['message']) {
			echo '<p id="err">'.$_SESSION['message'].'</p>';
		}
		unset($_SESSION['message']);
	?>
</div>

<?php
	require_once('footer.php');
?>