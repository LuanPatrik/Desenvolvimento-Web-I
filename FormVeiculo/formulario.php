<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/formulario.css">
    <title>Cadastro de veículos</title>
</head>
<body>
    <form action="./listagem.php">
        <input class="btn-voltar" type="image" src="../imagens/voltar.png">
    </form>
    <?php
        require_once '../Model/Veiculo.php';
        require_once '../DAO/DAoveiculo.php';
        require_once '../DAO/Conexao.php';


        $id = filter_input(INPUT_POST, 'id');
        $fabricante = filter_input(INPUT_POST, 'fabricante');
        $modelo = filter_input(INPUT_POST, 'modelo');
        $ano = filter_input(INPUT_POST, 'ano');
        $placa = filter_input(INPUT_POST, 'placa');
    ?>

    <form action="cadastroEdit.php" method="POST" >
        <label for="fabricante" class="titulo">Fabricante</label><br>
        <input type="text" name="fabricante" class="textBox" value="<?php echo $fabricante?>"><br>
        <label for="modelo" class="titulo">Modelo</label><br>
        <input type="text" name="modelo" class="textBox" value="<?php echo $modelo?>"><br>
        <label for="ano" class="titulo">Ano</label><br>
        <input type="text" name="ano" class="textBox" value="<?php echo $ano?>"><br>
        <label for="placa" class="titulo">Placa</label><br>
        <input type="text" name="placa" class='textBox' value="<?php echo $placa?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button class="btnCadastro">Salvar</button>
    </form>
</body>
</html>