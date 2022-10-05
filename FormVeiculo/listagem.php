<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Veículos</title> 
        <link rel="stylesheet" href="../style/listagem.css">
        <link rel="stylesheet" href="index.php">
    </head>
    <body>
        <form action="../index.php">
            <input class="btn-voltar" type="image" src="../imagens/voltar.png">
        </form>

        <table border=1 class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FABRICANTE</th>
                    <th>MODELO</th>
                    <th>ANO</th>
                    <th>PLACA</th>
                </tr>
            </thead>

            <?php
                require_once '../DAO/DAoveiculo.php';
                require_once '../DAO/Conexao.php';
                $dao = new DAoveiculo();
                $lista = $dao->exibirLista();

                foreach($lista as $veiculo)
                {
                    echo "<tr>";
                    foreach ($veiculo as $key => $value) {
                        echo "<td> $value</td>" ;
                    }

                    echo '<td>
                    <form action="formulario.php" method="POST">
                        <input type="hidden" name="id" value="'.$veiculo['id'].'">
                        <input type="hidden" name="fabricante" value="'.$veiculo['fabricante'].'">
                        <input type="hidden" name="modelo" value="'.$veiculo['modelo'].'">
                        <input type="hidden" name="ano" value="'.$veiculo['ano'].'">
                        <input type="hidden" name="placa" value="'.$veiculo['placa'].'">
                        <input type="image" src="../imagens/editar.png">
                    </form></td>';

                    echo '<td>
                    <form action="excluirVeiculo.php" method="POST">
                        <input type="hidden" name="id" value="'.$veiculo['id'].'">
                        <input type="image" src="../imagens/excluir.png">
                    </form></td>';
                    
                    echo "</tr>";
                }
            ?>
        </table>
        <form action="./formulario.php">
            <input class="btnCadastrar" type="submit" value="Cadastrar">
        </form>
    </body>
</html>