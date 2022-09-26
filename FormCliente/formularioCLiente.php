<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/formulario.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <a href="../index.php">Início</a>
    <h1>Cadastro de Cliente</h1>
    <form action="" method="POST" >
        <label for="nome" class="titulo">Nome</label><br>
        <input type="text" name="nome" id="nome" class="textBox"><br>
        <label for="cpf" class="titulo">Cpf</label><br>
        <input type="text" name="cpf" id="cpf" class="textBox"><br>
        <label for="telefone" class="titulo">Telefone</label><br>
        <input type="text" name="telefone" id="telefone" class="textBox"><br>
        <button class="btnCadastro">Cadastrar</button>
    </form>
    <?php
        require_once '../Model/Cliente.php';
        require_once '../DAO/DAOcliente.php';
        require_once '../DAO/Conexao.php';
        $obj = new Cliente();
        $dao = new DAocliente();

        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $telefone = filter_input(INPUT_POST, 'telefone');

        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setTelefone($telefone);

        if ($nome && $cpf && $telefone) {
            if ($dao->incluir($obj)) {
                echo 'Cliente Cadastrado com sucesso!';
            }else{
                echo 'Deu alguma MERD@!';
            }
        }
    ?>
</body>
</html>