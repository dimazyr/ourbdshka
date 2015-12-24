<?php
    header("Content-Type: text/html; charset=utf8");
?>
<html>
	<head>
	<meta content="html/text; charset=utf-8">
	<link href="style.css" rel="stylesheet"/>
		<title>
			Авторизация
		</title>
	</head>

	<body background="images\index.jpg">
		<div class="container">
			<div class="box">
				<div>
					<form action="index.php">
						<button><font size=+3>На главную</font></button>
					</form>
				</div>
				<div>
					<form action="reg.php">
						<button><font size=+3>Регистрация</font></button>
					</form>
				</div>
			</div>
		</div>
		<div id="window_login">
			<div id="header">
				<h1>Авторизация</h1>
			</div>
			<div id="input_login">
				<form action="enter.php" method="post">
				Логин: <br>
				<input value="" name="login">
				<br><br>
				Пароль: <br>
				<input value="" name="password" type="password">
				<br>
				<br>
				&nbsp;<input type="submit" value="Войти" name="sub">
				</form>
			</div>
		</div>
	</body>
</html>
