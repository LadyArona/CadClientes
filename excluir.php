<?php
	/*Estou usando o servidor WAMPSERVER */
	error_reporting(0);
	$conexao = mysql_connect('127.0.0.1', 'root', '');
	if (!$conexao) {
		die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
	}
	mysql_select_db('paw');

	$id = $_GET['id'];

	$sql = "delete from clientes where id = $id;";
	mysql_query($sql);
	echo "Cliente excluido com sucesso";
	mysql_close($conexao);
?>