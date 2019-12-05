<?php

namespace LOJA\Model;
    class Produto{

        private $pk_produto;
        private $nome;
        private $preco;
        private $categoria;
        private $imagem;

        public function __construct(){
                
        }
        public function getPk_produto(){
            return $this->pk_produto;
        }
    
        public function setPk_produto($pk_produto){
            $this->pk_produto = $pk_produto;
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
    
        public function getPreco(){
            return $this->preco;
        }
    
        public function setPreco($preco){
            if (!empty($preco)) {
                $this->preco = $preco;
            }else{
                throw new \Exception('Preço Inválido');
            }
            
        }
    
        public function getCategoria(){
            return $this->categoria;
        }
    
        public function setCategoria($categoria){
            if (!empty($categoria)) {
                $this->categoria = $categoria;
            }else{
                throw new \Exception('Categoria Inválida');                
            }
            
        }
        public function getImagem(){
            return $this->imagem;
        }
    
        public function setImagem($imagem){
            $this->imagem = $imagem;
        }
       
    }



?>