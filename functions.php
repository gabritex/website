
<?php



<?php if(isset($_POST['submit_reg']){ // button name
condb();
$sqlinsert="INSERT INTO user_data('', email, nome, apelido, pwd) 
			VALUES ('$_POST['']', '$_POST[email]','$_POST[nome]','$_POST[apelido]','$_POST[pwd]')";
			include('index.php');
}


function condb(){
	$hostname="localhost";
	$username="root";
	$password="root";
	$database="web_db";
	
	
@mysql_connect ("$hostname","$username","$password") or die("Username ou Password erradas");
@mysql_select_db($database) or die("Erro ao ligar à base de dados");

}

?>