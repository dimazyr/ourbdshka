<?php 
	header("Content-Type: text/html; charset=utf8");
	session_start();
?>	
<?php
	mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
	mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
	
	mysql_query("DELETE FROM trip_info WHERE trip_id='" . $_SESSION ['id'] . "'");
	mysql_query("DELETE FROM add_info WHERE add_id='" . $_SESSION ['id'] . "'");
	
	session_destroy();
	echo '<script type="text/javascript">
					alert ("Вы успешно удалили свою учетную запись. Возвращайтесь к нам,и удачных путешествий!");
				document.location.href = "index.php";
			</script>';
?>
