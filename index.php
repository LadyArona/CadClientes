<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Clientes</title>
	</head>

	<body>
		<h1>Cadastro de Clientes</h1>
		<form action="insere.php" method="POST">
			Nome:<input type="text" name="nome"><br>
			Endereço:<input type="text" name="endereco"><br>
			Telefone<input type="text" name="telefone"><br>
			<input type="submit" name="Inserir">
		</form>
		<br>
		<input type="button" onclick="window.open('consulta.php','_parent')" value="Ver lista de clientes registrados.">
	</body>
</html>