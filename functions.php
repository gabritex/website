
<?php

	$hostname="localhost";
	$username="yyyyy";
	$password="xxxxx";
	$database="database_name";
	
	
@mysql_connect ("$hostname","$username","$password") or die("Username ou Password erradas");
@mysql_select_db($database) or die("Erro ao ligar à base de dados");


?>