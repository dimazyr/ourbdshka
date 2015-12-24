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
		<div id="window_add_reg_master">
			<div id="header">
				<h1>Заполните дополнительные данные</h1>
			</div>
			<div id="input_add_reg_master">
				<form action="reg_master.php" method="post">
					&nbsp;&nbsp;Город<br>
					&nbsp;<input size=30 maxlength=30 value="" name="city">
					<br><br>
					&nbsp;&nbsp;Улица<br>
					&nbsp;<input size=30 maxlength=30 value="" name="street">
					<br><br>
					&nbsp;Выберите тип предоставляемого помещения: 
					<br>
					&nbsp;&nbsp; <input type="radio" name="type" value="Апартаменты">Апартаменты<br>
					&nbsp;&nbsp; <input type="radio" name="type" value="Комната">Комната<br>
					&nbsp;&nbsp; <input type="radio" name="type" value="Квартира">Квартира<br>
					&nbsp;&nbsp; <input type="radio" name="type" value="Бунгало">Бунгало<br>
					<br>
					&nbsp;&nbsp;Какое максимальное количество гостей вы можете принять? &nbsp; 
					<br>
					&nbsp;<input size=20 maxlength=20 name="NumOfGuest">
					<br><br>
					&nbsp;<input type="submit" value="Завершить регистрацию" name="submit1">&nbsp;
				</form>
			</div>
		</div>
	</body>

</html>
