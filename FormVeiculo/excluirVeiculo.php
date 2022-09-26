<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <link rel="stylesheet" href="../style/listagem.css">
    <link rel="stylesheet" href="index.php">
</head>
<body>
    <form action="./listagem.php">
        <input class="btn-voltar" type="image" src="../imagens/voltar.png">
    </form>
    <?php
        require_once '../model/Veiculo.php';
        require_once '../DAO/Conexao.php';
        require_once '../DAO/DAOveiculo.php';

        $id = filter_input(INPUT_POST, 'id');
        $veiculo = new Veiculo();
        $veiculo->setId($id);

        $dao = new DAOveiculo();
        if ($dao->excluir($veiculo)) {
            echo 'Veículo excluído com sucesso!';
        }else {
            echo 'Erro na exclusão!';
        }
    ?>
</body>
</html>