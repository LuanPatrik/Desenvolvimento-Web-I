<?php
    class DaoVeiculo
    {
        public function exibirLista()
        {
            $lista = [];
            $pst = Conexao::getPreparedStatement('SELECT * FROM veiculo;');
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function incluir(Veiculo $veiculo)
        {
            $sql = 'INSERT INTO veiculo (fabricante, modelo, ano, placa) VALUES (?,?,?,?);';

            $obj = Conexao::getpreparedStatement($sql);
            $obj->bindValue(1, $veiculo->getFabricante());
            $obj->bindValue(2, $veiculo->getModelo());
            $obj->bindValue(3, $veiculo->getAno());
            $obj->bindValue(4, $veiculo->getPlaca());

            if ($obj->execute()) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function excluir(Veiculo $veiculo)
        {
            $sql = 'DELETE FROM veiculo WHERE id = ?;';
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1,$veiculo->getId());
            if ($pst->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function atualizar(Veiculo $veiculo)
        {
            $sql = 'UPDATE veiculo SET fabricante = ?, modelo = ?, ano = ?, placa = ? WHERE id = ?;';
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1,$veiculo->getFabricante());
            $pst->bindValue(2,$veiculo->getModelo());
            $pst->bindValue(3,$veiculo->getAno());
            $pst->bindValue(4,$veiculo->getPlaca());
            $pst->bindValue(5,$veiculo->getId());
            if ($pst->execute()) {
                return true;
            }else {
                return false;
            }
        }
        
    }
?>