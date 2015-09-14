<?php
	/*Estou usando o servidor WAMPSERVER */
	error_reporting(0);
	$conexao = mysql_connect('127.0.0.1', 'root', '');
	if (!$conexao) {
		die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
	}
	mysql_select_db('paw');

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];

	$sql = "insert into clientes (nome, endereco, telefone) values ('$nome', '$endereco', '$telefone');";
	mysql_query($sql);
	echo "Cliente inserido com sucesso";
	mysql_close($conexao);
?>