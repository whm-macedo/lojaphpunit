<?php

namespace LOJA\DAO;

use LOJA\Model\Conexao;
use LOJA\Model\Cliente;

class DAOCliente
{
    public $lastId;

    public function cadastrar(Cliente $cliente)
    {

        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try {
            $con = $pdo->prepare(
                "INSERT INTO cliente VALUES (default, :nome, :telefone, :cpf,:email, :rua, :complemento, :cep, :uf, :bairro)"
            );

 
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":rua", $cliente->getRua());
            $con->bindValue(":complemento", $cliente->getComplemento());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":uf", $cliente->getUf());
            $con->bindValue(":bairro", $cliente->getBairro());
            $con->execute();

            $this->lastId = $pdo->lastInsertId(); // Retorna o id do cliente cadastrado
            $pdo->commit(); // Finaliza a transação
            return "Cadastrado com sucesso";
        } catch (\Exception $e) {
            $this->lastId = 0;
            $pdo->rollback();
            return "Erro ao cadastrar";
        }
    }
    public function listaClientes()
    {
        $sql = "SELECT * FROM cliente";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while ($cliente = $con->fetch(\PDO::FETCH_ASSOC)) {
            $lista[] = $cliente;
        }
        return $lista;
    }
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM cliente WHERE pk_id = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $cliente = new Cliente();
        $cliente = $con->fetch(\PDO::FETCH_ASSOC);
        // print_r($usuario); //testar saida
        return $cliente;
    }
    public function deleteAll()
    {
        $sql = "DELETE FROM cliente";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
    }
    public function deleteFromId($id)
    {
    $sql = "DELETE FROM cliente WHERE pk_cliente = {$id}";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído com sucesso";
    }
}
