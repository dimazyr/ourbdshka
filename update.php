<?php
    header("Content-Type: text/html; charset=utf8");
	session_start();
?>
<html>
	<head>
		<meta content="html/text; charset=utf-8">
		<title>
	 		Изменение ваших личных данных 
		</title>
	</head>
	<table background="images\manilov.jpg" width="900px" height="910px" align=center>
		<table>
  	   <?php
	   
	    mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
		mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");
		$n = mysql_query ("SELECT name,phone,country FROM personal_info WHERE id='".$_SESSION['id']."'");
		//$p = mysql_query ("SELECT phone FROM personal_info WHERE id='".$_SESSION['id']."'");
		//$c = mysql_query ("SELECT country FROM personal_info WHERE id='".$_SESSION['id']."'");
		$k=mysql_fetch_array($n);
		echo ("    <form action='update2.php' method='post'>
		       &nbsp;Ваше имя:
				<br>
				&nbsp;<input method='post' type='text' value='".$k['name']."' name='name1'>
				<br><br>
				&nbsp;Телефон:
				<br>
				&nbsp;+7<input method='post' value='".$k['phone']."' name='phone1'>
				<br><br>
				&nbsp;Страна:
				<br>
				&nbsp;<input method='post' value='".$k['country']."' name='country1'>   
					<button>Подтвердить изменения</button>
					</form>");
				
               
    		
    ?>
                </table> 
		<tr height="500">
		<td></td>
		</tr>
		<tr height="100">
			<td colspan=2>
				
			</td>
		</tr>
	</table>
		<body align=center>

	<font size=+1>Tol'n'Gleb © 2014</font>

	</body>

</html>