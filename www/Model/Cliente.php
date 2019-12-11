<?php
namespace LOJA\Model;
use LOJA\includes\Util;

    class Cliente{
        private $pk_cliente;
        private $nome;
        private $telefone;
        private $email;
        private $cpf;
        private $rua;
        private $complemento;
        private $cep;
        private $uf;
        private $bairro;

        public function __construct(){
            
        }
        public function getPk_cliente(){
            return $this->pk_cliente;
        }
    
        public function setPk_cliente($pk_cliente){
            $this->pk_cliente = $pk_cliente;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            if (!empty($nome)) {
                $this->nome = $nome;
            }else{
                throw new \Exception('Nome Inválido');
            }
        }
    
        public function getTelefone(){
            return $this->telefone;
        }
    
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
                $this->email = $email;
            else
                throw new \Exception("E-mail Inválido");
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            if(Util::validaCPF($cpf)) throw new \Exception("CPF Inválido");
            $this->cpf = $cpf;           
           
        }
    
        public function getRua(){
            return $this->rua;
        }
    
        public function setRua($rua){
            $this->rua = $rua;
        }
    
        public function getComplemento(){
            return $this->complemento;
        }
    
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }
    
        public function getCep(){
            return $this->cep;
        }
    
        public function setCep($cep){
            $this->cep = $cep;
        }
    
        public function getUf(){
            return $this->uf;
        }
    
        public function setUf($uf){
            $this->uf = $uf;
        }
    
        public function getBairro(){
            return $this->bairro;
        }
    
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
    }
?>