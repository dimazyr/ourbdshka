<?php 
	header("Content-Type: text/html; charset=utf8");
	session_start();
?>	
<?php
	mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
	mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	$n = stripslashes (mysql_real_escape_string($_POST ['name1']));
	$p= stripslashes (mysql_real_escape_string($_POST ['phone1']));
	$c = stripslashes (mysql_real_escape_string($_POST ['country1']));

	$_SESSION ['name'] = $n;
	mysql_query("UPDATE personal_info
		SET 
		name='".$_SESSION ['name']."', 
		phone='".$p."',
		country='".$c."'
		WHERE id='".$_SESSION['id']."'");
	
	
	echo '<script type="text/javascript">
					alert ("Вы успешно изменили учетную запись.");
				document.location.href = "cabinet.php";
			</script>';
?>

