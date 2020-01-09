<?php

namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Produto;

class DAOProduto{
    public $lastId;

    public function cadastrar(Produto $produto){

        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try{

        $con = $pdo->prepare("INSERT INTO produto VALUES (default, :nome, :preco, :imagem, :categoria)");
        
        $con->bindValue(":nome", $produto->getNome());
        $con->bindValue(":preco", $produto->getPreco());
        $con->bindValue(":imagem", $produto->getImagem());        
        $con->bindValue(":categoria", $produto->getCategoria()->getPk_categoria());
        $con->execute();
        
        $this->lastId = $pdo->lastInsertId(); // Retorna o id do cliente cadastrado
        $pdo->commit();
        return "PRODUTO SALVO COM SUCESSO";
        
    }catch (\Exception $e) {
        $this->lastId = 0;
        $pdo->rollback();
        return "Erro ao cadastrar";
    }
}

    public function listaProduto(){
        $sql = "SELECT
            produto.nome, 
            produto.preco, 
            produto.imagem, 
            produto.pk_produto AS 'id', 
            categoria.nome AS 'categoria' 
            FROM produto 
            INNER JOIN categoria 
            ON produto.categoria = categoria.pk_categoria";

        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($produto = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $produto;
        }

        return $lista;
    }

    public function listaProduto10(){
        $sql = "SELECT 
        produto.nome, 
        produto.preco, 
        produto.imagem, 
        produto.pk_produto AS 'id', 
        categoria.nome AS 'categoria' 
        FROM produto 
        INNER JOIN categoria 
        ON produto.categoria = categoria.pk_categoria limit 4";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($produto = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $produto;
        }
        return $lista;
    }
    public function buscarPorId($id){
        $sql = "SELECT * FROM produto WHERE pk_produto = :id";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $obj = $con->fetch(\PDO::FETCH_ASSOC);
        
        $produto = new Produto();
        $produto->setPk_produto($obj['pk_produto']);
        $produto->setNome($obj['nome']);
        $produto->setPreco($obj['preco']);
        $produto->setPreco($obj['categoria']);
        $produto->setImagem($obj['imagem']);
       
        return $produto;
    }


    public function deleteAll(){
        $sql = "DELETE FROM produto";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
    }

    public function deleteFromId($id)
    {
        $sql = "DELETE FROM produto WHERE pk_produto = {$id}";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído com sucesso";
    }
}
