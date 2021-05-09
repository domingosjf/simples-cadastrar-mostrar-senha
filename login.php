<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Apresentar a senha</title>
	</head>
	<body>
		<h1>Login Apresentar e Ocultar Senha</h1>
		<form method="POST">
			<label>Senha</label>
			<input type="password" name="senha" id="senha">
			
			<button type="button" onclick="mostrarSenha()">Apresentar a senha</button>
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
	</body>
</html>