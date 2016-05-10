<?php require_once('header.php') ?>
<?php require_once('navigation.php') ?>
<!-- Header -->
    <header>
        <div class="container">
            
                <div class="col-lg-6">
                	<!-- SIGN UP -->
                	<form method="post" action="up_form.php">
                		<h1>Registe-se</h1>
                		Email: <input type="text" name="email"><br>
                		Nome: <input type="text" name="nome"><br>
                		Apelido: <input type="text" name="apelido"><br>
						Password: <input type="text" name="pwd"><br>
						<input type="submit" name="submit_reg" value="click">


                	</form>
                    <div class="col-lg-6">
                    <!-- LOGIN -->
                    <form>
                		<h1>Login</h1>
                		Email: <input type="text" name="email"><br>
						Password: <input type="text" name="pwd"><br>
						<input type="submit">
                	</form>
                </div>
              
            </div>
        </div>
    </header>
<?php require_once('footer.php') ?>

   