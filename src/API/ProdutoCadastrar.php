<?php
namespace LOJA\API;
use LOJA\Model\Produto;
use LOJA\DAO\DAOProduto;
use LOJA\Model\Categoria;
use LOJA\includes\Util;

class ProdutoCadastrar{
    public $msg;

    function __construct(){

        if($_POST){

            try {                        
                $produto = new produto();
                $produto->setNome($_POST['nome']);
                $produto->setPreco($_POST['preco']);
                $produto->setImagem(Util::uploadImg());

                $categoria = new Categoria();
                $categoria->setPk_categoria($_POST['categoria']);
                $produto->setCategoria($categoria);
                
                $DAO = new DAOProduto;
                $this->msg = $DAO->cadastrar($produto);
     
            } catch (\Exception $erro) {
                $this->msg = $erro->getMessage();
            }
        }
    }
}
?>