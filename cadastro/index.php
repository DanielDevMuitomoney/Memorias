<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cadastro.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <img class="wave" src="../Imagens\Login_imgs\wave.png">
	<div class="container">
		<div class="img">
			<img src="../Imagens\Login_imgs\engravatado.png">
		</div>
		<div class="login-content">
			<form action="cadastrar.php" method="POST">
				<img src="../Imagens\Login_imgs\avatar.png">
				<h2 class="title">Welcomeeeee</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nomee</h5>
           		   		<input name="nome" class="input" >
           		   </div>
           		</div>
				   
				   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input name="usuario" class="input" name="text">
           		   </div>
           		</div>
           		
				

				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input" name="senha">
            	   </div>
            	</div>

				   

				
            	
            	<button type="submit" class="btn" value="Login" >Cadastrar</button>
				
			
				<?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    
                      <p>Usuario Cadastrado.Faça  <a href="../Login\login.php">login</a></p>
                    
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

					<?php

					if(isset($_SESSION['usuario_existe'])):
						?>
						<P>O usuário já existe</P>
						<?php
						endif;
						unset($_SESSION['usuario_existe']);
						?>
                      

					
				

				

            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>




</html>