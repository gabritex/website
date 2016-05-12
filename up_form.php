
<?php
   
                        include('connection.php');
                        
                        $sql="INSERT INTO user_data (email, nome, apelido, pwd) VALUES (:email, :nome, :apelido, :pwd)";
                        
                        $stmt = $conn->prepare($sql);
            
                        $stmt->bindParam(':email', $_POST[email], PDO::PARAM_STR);
                        $stmt->bindParam(':nome', $_POST[nome], PDO::PARAM_STR);
                        $stmt->bindParam(':apelido', $_POST[apelido], PDO::PARAM_STR);
                        $stmt->bindParam(':pwd', $_POST[pwd], PDO::PARAM_STR);

                        $stmt->execute();
                        

						//close the connection
						$conn = null;
                        var_dump($conn);
						

?>