<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Veículos</title> 
        <link rel="stylesheet" href="../style/listagem.css">
        <link rel="stylesheet" href="index.php">
    </head>
    <body>
        <form action="./listagem.php">
            <input class="btn-voltar" type="image" src="../imagens/voltar.png">
        </form>
    </body>
    <?php
        require_once '../Model/Veiculo.php';
        require_once '../DAO/DAoveiculo.php';
        require_once '../DAO/Conexao.php';

        $obj = new Veiculo();
        $dao = new DAoveiculo();

        $id = filter_input(INPUT_POST, 'id');
        $fabricante = filter_input(INPUT_POST, 'fabricante');
        $modelo = filter_input(INPUT_POST, 'modelo');
        $ano = filter_input(INPUT_POST, 'ano');
        $placa = filter_input(INPUT_POST, 'placa');

        $obj->setId($id);
        $obj->setFabricante($fabricante);
        $obj->setModelo($modelo);
        $obj->setAno($ano);
        $obj->setPlaca($placa);

        if ($fabricante && $modelo && $ano && $placa) {
            if ($obj->getId() == null) {
                if ($dao->incluir($obj)) {
                    echo 'Veículo Cadastrado com sucesso!';
                }else{
                    echo 'Deu alguma MERD@!';
                }
            }else{
                if ($dao->atualizar($obj)) {
                    echo 'Veículo Atualizado com sucesso!';
                }
            }
        }
    ?>
</html>
