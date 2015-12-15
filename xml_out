<?php
    header("Content-Type: text/html; charset=utf8");
    session_start();
?>

<?php

mysql_connect ("localhost", "root", "") or die ("Ошибка подключения к базе данных.");
mysql_select_db ("mydb") or die ("Ошибка подключения к таблице базы данных.");

$sql 	= 'SELECT email, login FROM `login`';
$wht	= 'SELECT name  FROM  `personal_info`';
$result = mysql_query($sql) or die("ALL WRONG".$sql);
$wesult = mysql_query($wht) or die("ALL WRONG".$sql);

   // Откроем файл (если он есть) или создадим его
	$fp = fopen ("xml_file.xml", "w");

   // "Внедрим" нужные нам XML-тэги вручную

   fputs($fp,"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
   fputs($fp,"<dataset>\n");

   while($res=mysql_fetch_array($result))
   {
    $wes=mysql_fetch_array($wesult);
      fputs($fp,"	<user>\n");
	  fputs($fp,"		<name>".$wes["name"]."</name>\n");
      fputs($fp,"		<email>".$res["email"]."</email>\n");
	  fputs($fp,"		<login>".$res["login"]."</login>\n");
      fputs($fp,"	</user>\n");  
	  
   }//endwhile
   
  
  fputs($fp,"</dataset>\n");
  fclose($fp);

 
  echo '<script type="text/javascript">
        document.location.href = "xml_file.xml";
      </script>';
?>


  
