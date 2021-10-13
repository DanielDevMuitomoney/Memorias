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
    <img class="wave" src="8_Sem_Titulo_20211009003429.png">
	<div class="container">
		<div class="img">
			<img src="PicsArt_10-09-01.00.28.png">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
				<img src="avatar.png">
				<h2 class="title">Welcome</h2>
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
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="senha">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<button type="submit" class="btn" value="Login" >login</button>
				
			
				<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
				

				

            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>




</html>