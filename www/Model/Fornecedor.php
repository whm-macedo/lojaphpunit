<?php
namespace LOJA\Model;
    class Fornecedor{

        private $pk_fornecedor;
        private $nome;
        private $cidade;
        private $estado;
        private $cnpj;

        public function __construct(){
                
        }
        public function getPk_fornecedor(){
            return $this->pk_fornecedor;
        }
    
        public function setPk_fornecedor($pk_fornecedor){
            $this->pk_fornecedor = $pk_fornecedor;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getCidade(){
            return $this->cidade;
        }
    
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }
    
        public function getCnpj(){
            return $this->cnpj;
        }
    
        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }
    }



?>