<?php
    header("Content-Type: text/html; charset=utf8");
    session_start ();
    if ($_SESSION ['login'] == "")
    	echo '<script type="text/javascript">
			alert ("Для посещения этой страницы необходимо авторизоваться.");
			document.location.href = "login.php";
			</script>';
?>

<html>
	<head>
		<meta content="html/text; charset=utf-8">
		<link href="style.css" rel="stylesheet"/>
		<title>Личный кабинет</title>
	</head>
	
	<body  background=images\index.jpg>
		<div class="container">
			<div class="box">
				<div>
					<form action="index.php">
						<button><font size=+3>На главную</font></button>
					</form>
				</div>
			</div>
		</div>
		<div id="window_cabinet">
			<div id="header">
				<h1>Личный кабинет</h1>
			</div>
			<div id="input_cabinet">
				<font size=+1>
				&nbsp;&nbsp;Вы вошли как&nbsp; <b><i>
				<?php
					mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
					mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
					
					echo $_SESSION ['login'];
					$_SESSION ['id'] = mysql_result (mysql_query ("SELECT id FROM login WHERE login='" . $_SESSION ['login'] . "'"), 0);
				?>
				</i></b>
				</font>
				<div class="container2">
					<div class="box2">
						<div>
							<form action="logout.php">
								&nbsp;&nbsp;<button>Выйти</button>
							</form>
						</div>
						<div>
							<form action='delete.php'>
								<button>Удалить аккаунт</button>
							</form>
						</div>

					</div>
				</div>
				<div class="container3">
					<div class="box3">
						<div>
							<form action="xml_out.php">
								&nbsp;&nbsp;<button>Экспорт в XML всех пользователей</button>
							</form>
						</div>
						<div>
							<form action='update.php'>
								&nbsp;&nbsp;<button>Изменить персональные данные</button>
							</form>
						</div>
					</div>
				</div>
				<div>&nbsp;
				<?php
					if (mysql_result (mysql_query ("SELECT choice FROM personal_info WHERE id='" . $_SESSION ['id'] . "'"),0) == 1)
					{
						echo"<form action='find_master.php' method='post'> &nbsp;&nbsp;Введите страну <br>
							&nbsp;&nbsp;<input maxlength=20 size=20 name='trip_country_find'>
							<br>&nbsp;&nbsp;<input type='submit' value='Найти туриста'>
							</form>";
					}
					else
					{
						echo"<form action='find_tourist.php' method='post'> &nbsp;&nbsp;Введите город <br>
							&nbsp;&nbsp;<input maxlength=20 size=20 name='city_find'>
							<br>&nbsp;&nbsp;<input type='submit' value='Найти жилье'>
							</form>";
					}
				?>
				</div>
			</div>
		</div>
	</body>
</html>