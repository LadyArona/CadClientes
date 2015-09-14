<?php
    /*Estou usando o servidor WAMPSERVER */
    error_reporting(0);
    $conexao = mysql_connect('127.0.0.1', 'root', '');
    if (!$conexao) {
            die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
    }
    mysql_select_db('paw');
    
    $id = $_GET['id'];
    $sql = "select * from clientes where id = $id;";
    $resultado = mysql_query($sql);
    $cliente = mysql_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Editar Clientes</title>
	</head>

	<body>
            <h1>Cadastro de Clientes</h1>
		<form action="edita.php" method="POST">
			Nome:<input type="text" name="nome" value="<?php echo $cliente['nome'];?>"><br>
			Endere�o:<input type="text" name="endereco" value="<?php echo $cliente['endereco'];?>"><br>
			Telefone<input type="text" name="telefone" value="<?php echo $cliente['telefone'];?>"><br>
                        <input type="hidden" name="id" value="<?php echo $cliente['id'];?>">
			<input type="submit" name="Alterar">
		</form>
	</body>
</html>