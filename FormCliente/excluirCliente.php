-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
</head>
<body>
    <h1>Exclusão de Cliente!</h1>
    <?php
        require_once '../model/Cliente.php';
        require_once '../DAO/Conexao.php';
        require_once '../DAO/DAOcliente.php';

        $id = filter_input(INPUT_POST, 'id');
        $cliente = new Cliente();
        $cliente->setId($id);

        $dao = new DAOcliente();
        if ($dao->excluir($cliente)) {
            echo 'Cliente excluído com sucesso!';
        }else {
            echo 'Erro na exclusão!';
        }
    ?>
</body>
</html>