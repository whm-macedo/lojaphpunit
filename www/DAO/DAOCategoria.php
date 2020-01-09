<?php

namespace LOJA\DAO;

use LOJA\Model\Conexao;
use LOJA\Model\Categoria;

//Inserir o beginTransaction
// Utilizar o $lastid
//Realizar o testa Daocategorai

class DAOCategoria
{

    public $lastId;

    public function cadastrarCategoria(Categoria $categoria)
    {
        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try {
            $con = $pdo->prepare("INSERT INTO categoria VALUES (default, :nome)");

            $con->bindValue(':nome', $categoria->getNome());
            $con->execute();
            $this->lastId = $pdo->lastInsertId(); // Retorna o id do cliente cadastrado
            $pdo->commit();
            return "Cadastrado com Sucesso!";


        } catch (\Exception $e) {
            $this->lastId = 0;
            $pdo->rollback();
            return "Erro ao cadastrar";
        }
    }


    public function listaCategoria()
    {
        $sql = "SELECT * FROM categoria";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while ($categoria = $con->fetch(\PDO::FETCH_ASSOC)) {
            $lista[] = $categoria;
        }
        return $lista;
    }
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM categoria WHERE pk_categoria = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $categoria = new Categoria();
        $categoria = $con->fetch(\PDO::FETCH_ASSOC);
        // print_r($usuario); //testar saida
        return $categoria;
    }
    public function deleteAll()
    {
        $sql = "DELETE FROM categoria";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
    }
    public function deleteFromId($id)
    {
    $sql = "DELETE FROM categoria WHERE pk_categoria = {$id}";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído com sucesso";
    }
}
