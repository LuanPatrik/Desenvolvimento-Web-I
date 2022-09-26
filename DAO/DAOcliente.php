<?php
    class DaoCliente
    {
        public function exibirLista()
        {
            $lista = [];
            $pst = Conexao::getPreparedStatement('SELECT * FROM cliente;');
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function incluir(Cliente $cliente)
        {
            $sql = 'INSERT INTO cliente (nome,cpf,telefone) VALUES (?,?,?);';

            $obj = Conexao::getpreparedStatement($sql);
            $obj->bindValue(1, $cliente->getNome());
            $obj->bindValue(2, $cliente->getCpf());
            $obj->bindValue(3, $cliente->getTelefone());

            if ($obj->execute()) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function excluir(Cliente $cliente)
        {
            $sql = 'DELETE FROM cliente WHERE id = ?;';
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1,$cliente->getId());
            if ($pst->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function atualizar(Cliente $cliente)
        {
            $sql = 'UPDATE cliente SET nome = ?, cpf = ?, telefone = ? WHERE id = ?;';
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1,$cliente->getNome());
            $pst->bindValue(2,$cliente->getCpf());
            $pst->bindValue(3,$cliente->getTelefone());
            $pst->bindValue(5,$cliente->getId());
            if ($pst->execute()) {
                return true;
            }else {
                return false;
            }
        }
        
    }
?>