<?php
    Class Cliente
    {
        private $id;
        private $nome;
        private $cpf;
        private $telefone;

        public function __construct($n=null, $c=null, $t=null)
        {
            $this->nome = $n;
            $this->cpf = $c;
            $this->telefone = $t;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;

            return $this;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;

            return $this;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;

            return $this;
        }
    }

?>