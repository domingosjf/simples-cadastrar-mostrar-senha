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
	
	
	<div class="container" style="background-color: gray;">
	
		<h1>Cadastrar usuário</h1><hr>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<form method="POST" action="processa.php">
		
		<div class="col-sm" style="background-color: silver;">
		
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control form-control-lg" placeholder="Nome completo" required>
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="email" name="email" class="form-control" placeholder="Seu melhor e-mail" required>
					<small id="emailHelp" class="form-text text-muted">Seu Melhor Email.</small>
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" id="senha" class="form-control form-control-sm" placeholder="Senha com 6 caracteres">
				    <button type="button" class="btn btn-primary" onclick="mostrarSenha()">Apresentar a senha</button></br></br>
			
				</div>

			<img src="captcha.php" alt="Código captcha"><br>
			
			<label>Digite o código</label>
			<input type="text" name="captcha" required><br><br>
			
		
			<button  class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
		
			
			<a class="btn btn-success" href="login.php" role="button
			
			">Login</a><br><br>
			
		
		   </form>
			
		</div>
			
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