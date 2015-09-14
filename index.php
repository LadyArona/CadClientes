<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Clientes</title>
    </head>
    
    <style>
        div.margem2 {
            padding: 5px;
        }
        body{
            background-color: #E6E6FF
        }
    </style>

    <body>
        <h1>Cadastro de Clientes</h1>
        <form action="insere.php" method="POST">
            <div class='margem2'>
                Nome:<br>
                <input type="text" name="nome">
            </div>
            <div class='margem2'>
                Endereço:<br>
                <input type="text" name="endereco">
            </div>
            <div class='margem2'>
                Telefone:<br>
                <input type="text" name="telefone">
            </div>
            <div class='margem2'>
                Senha:<br>
                <input type="password" name="senha">
            </div>
            <div class='margem2'>
            <input type="submit" name="Inserir">
            </div>
        </form>
        <br>
        <input type="button" onclick="window.open('consulta.php','_parent')" value="Ver lista de clientes registrados.">
    </body>
</html>