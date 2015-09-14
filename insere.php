<?php
	/*Estou usando o servidor WAMPSERVER */
	error_reporting(0);
	$conexao = mysql_connect('127.0.0.1', 'root', '');
	if (!$conexao) {
		die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
	}
	mysql_select_db('paw');

	$nome = mysql_real_escape_string(strip_tags($_POST['nome']));
	$endereco = mysql_real_escape_string(strip_tags($_POST['endereco']));
	$telefone = mysql_real_escape_string(strip_tags($_POST['telefone']));
        $senha = md5($_POST['senha']);

	$sql = "insert into clientes (nome, endereco, telefone, senha) values ('$nome', '$endereco', '$telefone', '$senha');";
	mysql_query($sql);
	echo "Cliente inserido com sucesso!";
	mysql_close($conexao);
?>