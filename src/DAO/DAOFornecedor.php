<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Fornecedor;

class DAOFornecedor{
    public function cadastrarFornecedor(Fornecedor $fornecedor){
        $sql = "INSERT INTO fornecedor VALUES (default, :nome, :cidade, :estado, :cnpj)"; 
        $con = conexao::getInstance()->prepare($sql);
        $con->bindValue(':nome', $fornecedor->getNome());
        $con->bindValue(':cidade', $fornecedor->getCidade());
        $con->bindValue(':estado', $fornecedor->getEstado());
        $con->bindValue(':cnpj', $fornecedor->getCnpj());
        
        $con->execute();
        return "Cadastrado com Sucesso!";
    }

    public function listaFornecedor(){
        $sql = "SELECT * FROM fornecedor";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($fornecedor = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $fornecedor;
        }
        return $lista;
}
    public function buscarPorId($id){
        $sql ="SELECT * FROM fornecedor WHERE pk_fornecedor = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $fornecedor = new Fornecedor();
        $fornecedor = $con->fetch(\PDO::FETCH_ASSOC);
    // print_r($usuario); //testar saida
        return $fornecedor;
}
}