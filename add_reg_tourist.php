<?php
    header("Content-Type: text/html; charset=utf8");
?>

<html>
	<head>
	<meta content="html/text; charset=utf-8">
	<link href="style.css" rel="stylesheet"/>
		<title>
			Ввод дополнительных данных
		</title>
	</head>

	<body background="images\reg.jpg">
		<div class="container">
			<div class="box">
				<div>
					<form action="index.php">
						<button><font size=+3>На главную</font></button>
					</form>
				</div>
			</div>
		</div>
		<div id="window_add_reg_tourist">
			<div id="header">
				<h1>Заполните дополнительные данные</h1>
			</div>
			<div id="input_add_reg_tourist">
				<form action="reg_tourist.php" method="post">
					&nbsp;В какую страну вы хотите отправиться?<br>
					&nbsp;<input value="" name="trip_country">
					<br><br>
					&nbsp;Какими языками вы владеете?(Например: английский, русский)<br>
					&nbsp;<input value="" name="language">
					<br>
					&nbsp;<input type="submit" value="Завершить регистрацию" name="submit1">&nbsp;
				</form>
			</div>
		</div>
	</body>
</html>
