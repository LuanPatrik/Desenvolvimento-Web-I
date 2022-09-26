<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Listagem</title> 
        <link rel="stylesheet" href="listagem,.css">
        <link rel="stylesheet" href="index.php">
    </head>
    <body>
        <h1 class="titulo">Lista de Cliente</h1>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>CPF</td>
                <td>TELEFONE</td>
            </tr>

            <?php
                require_once '../DAO/DAOcliente.php';
                require_once '../DAO/Conexao.php';
                $dao = new DAOcliente();
                $lista = $dao->exibirLista();

                foreach($lista as $cliente)
                {
                    echo "<tr>";
                    foreach ($cliente as $key => $value) {
                        echo "<td> $value</td>" ;
                    }

                    echo '<td>
                    <form action="excluirCliente.php" method="POST">
                        <input type="hidden" name="id" value="'.$cliente['id'].'">
                        <input type="submit" value="Excluir">
                    </form></td>';
                    
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>