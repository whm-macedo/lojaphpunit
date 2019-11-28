<?php

namespace LOJA\Model;

class Categoria{
    private $pk_categoria;
    private $nome;
   

    public function __construct(){
        
	}
	public function getPk_categoria(){
		return $this->pk_categoria;
	}

	public function setPk_categoria($pk_categoria){
		$this->pk_categoria = $pk_categoria;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
}
?>