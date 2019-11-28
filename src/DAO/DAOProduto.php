<?php

namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Produto;

class DAOProduto{

    public function cadastrar(Produto $produto){
        $sql = "INSERT INTO produto VALUES (default, :nome, :preco, :imagem, :categoria)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $produto->getNome());
        $con->bindValue(":preco", $produto->getPreco());
        $con->bindValue(":imagem", $produto->getImagem());        
        $con->bindValue(":categoria", $produto->getCategoria()->getPk_categoria());
        $con->execute();

        return "PRODUTO SALVO COM SUCESSO";
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
    public function buscaPorId($id){
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
}
?>