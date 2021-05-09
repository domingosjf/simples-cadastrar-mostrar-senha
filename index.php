<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>Cadastrar  com Apresentar e Ocultar Senha</title>
	</head>
    <body>
	<div class="container">
		<h1>Cadastrar usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<form method="POST" action="processa.php">
			<label>Nome</label>
			<input type="text" name="nome" required><br><br>
			
			<label>E-mail</label>
			<input type="email" name="email" required><br><br>

			<img src="captcha.php" alt="Código captcha"><br>
			
			<label>Digite o código</label>
			<input type="text" name="captcha" required><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" id="senha">
			
			<button type="button" onclick="mostrarSenha()">Apresentar a senha</button></br></br>
			
			
			
		
			<button  class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
		
			
			<a class="btn btn-success" href="login.php" role="button">Login</a><br><br>
			
		
		</form>
		
		<script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</div>
	
	</body>
</html>