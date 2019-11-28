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
            $this->nome = $nome;
        }
    
        public function getPreco(){
            return $this->preco;
        }
    
        public function setPreco($preco){
            $this->preco = $preco;
        }
    
        public function getCategoria(){
            return $this->categoria;
        }
    
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        public function getImagem(){
            return $this->imagem;
        }
    
        public function setImagem($imagem){
            $this->imagem = $imagem;
        }
       
    }



?>