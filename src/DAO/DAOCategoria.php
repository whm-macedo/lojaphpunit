<?php

namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Categoria;

class DAOCategoria{
    public function cadastrarCategoria(Categoria $categoria){
        $sql = "INSERT INTO categoria VALUES (default, :nome)"; 
        $con = conexao::getInstance()->prepare($sql);
        $con->bindValue(':nome', $categoria->getNome());
        $con->execute();
        return "Cadastrado com Sucesso!";
    }
    public function listaCategoria(){
        $sql = "SELECT * FROM categoria";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($categoria = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $categoria;
        }
        return $lista;
    } 
    public function buscarPorId($id){
        $sql ="SELECT * FROM categoria WHERE pk_categoria = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $categoria = new Categoria();
        $categoria = $con->fetch(\PDO::FETCH_ASSOC);
       // print_r($usuario); //testar saida
        return $categoria;
    } 
}