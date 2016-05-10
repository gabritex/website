
<?php
   
                        require('connection.php');
                        
  /*                      
                        $sql="INSERT INTO user_data('', 'email', 'nome', 'apelido', 'pwd') 
                        VALUES ('', '$_POST[email]','$_POST[nome]','$_POST[apelido]','$_POST[pwd]')";

                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

*/
						//close the connection
						$conn = null;
						var_dump($conn)
?>