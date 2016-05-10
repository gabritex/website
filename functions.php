
<?php

function insertTo(){
                        
                        include ('connections.php');
                        $sqlinsert="INSERT INTO user_data('', email, nome, apelido, pwd) VALUES ('$_POST['']', '$_POST[email]','$_POST[nome]','$_POST[apelido]','$_POST[pwd]')";

                        if ($conn->query($sqlinsert) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                    }
?>