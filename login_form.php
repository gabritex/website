
<?php
                       
                        include('connection.php');
                        
                        if(isset($_POST['submit'])){
                                
                                $errMsg = '';
                                //username and password sent from Form
                                $email = trim($_POST['email']);
                                $pwd = trim($_POST['pwd']);
                               
                                if($email == '')
                                        $errMsg .= 'You must enter your Username<br>';
                                        
                                if($pwd == '')
                                        $errMsg .= 'You must enter your Password<br>';
                                        
                                
                                $sql='SELECT (id,email, nome, apelido, pwd) FROM  user_data WHERE email = :email';
                                if($errMsg == ''){
                                        echo "MSG_sql: " . $sql;
                                        
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                                        $stmt->execute();

                                        $results = $stmt->fetch(PDO::FETCH_ASSOC);

                                        if(count($results) > 0 && password_verify($pwd, $results['pwd'])){
                                                $_SESSION['email'] = $results['email'];
                                                header('location:index.php');
                                                exit;
                                        }else{
                                                $errMsg .= 'email and Password are not found<br>';
                                        }
                                }
                        }
                        



?>