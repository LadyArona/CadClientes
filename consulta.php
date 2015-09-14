<?php
	/*Estou usando o servidor WAMPSERVER */
	error_reporting(0);
	$conexao = mysql_connect('127.0.0.1', 'root', '');
	if (!$conexao) {
		die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
	}
	mysql_select_db('paw');

	$sql = "SELECT * FROM CLIENTES";

	$resposta = mysql_query($sql);

	while ($registro = mysql_fetch_assoc($resposta)) {
		echo "<hr>";
		echo "<ul>";
		echo "<li>Nome: ".$registro['nome']."</li>";
		echo "<li>Endereco: ".$registro['endereco']."</li>";
		echo "<li>Telefone: ".$registro['telefone']."</li>";
		echo "</ul>";
	}
?>