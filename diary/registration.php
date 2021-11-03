<?php
	session_start();
	$title = "Регистрация";
	require_once('header2.php');
?>
<div class="gret">
<div class="row">
	<div class="col">
		<form action="checking_registration.php" method="post">
			<input type="text" name="username" placeholder="введите имя" class ="validate" id="UN">

			<input type="text" name="lastname" placeholder="введите фамилию" class="validate" id="LN">

			<input type="email" placeholder="email" id="em" name="email" class="validate">

			<input type="password" placeholder="пароль" id="pss_reg" name="pass" class="validate">

			<input type="password" name="pass-confirm" placeholder="повторите пароль" class="validate" id="p-c">

			<input type="submit" name="" value="отправить" class="logo" id="go">

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