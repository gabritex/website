
<?php

if(isset($_POST['submit_reg'])){ // button name
insertTo();
require_once('index.php');
}

function insertTo(){
condb();
$sqlinsert="INSERT INTO user_data('', email, nome, apelido, pwd) VALUES ('$_POST['']', '$_POST[email]','$_POST[nome]','$_POST[apelido]','$_POST[pwd]')";

if ($conn->query($sqlinsert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




}

function condb(){
	$servername="localhost";
	$username="root";
	$password="";
	$database="web_db";
	
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>