<?php
    /*Estou usando o servidor WAMPSERVER */
    error_reporting(0);
    $conexao = mysql_connect('127.0.0.1', 'root', '');
    if (!$conexao) {
            die('Não foi possível conectar devido ao erro a seguir: ' . mysql_error());
    }
    mysql_select_db('paw');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql = "update clientes set nome = $nome, endereco = $endereco, telefone = $telefone where id = $id;";
    mysql_query($sql) or die(mysql_error());
    echo "Cliente editado com sucesso";
    mysql_close($conexao);
?>
