<?php
namespace LOJA\API;
use LOJA\DAO\DAOProduto;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\Model\Produto;
class CarrinhoRemover{
    function __construct(){
        $carrinho = new Carrinho; // inicia o carrinho
        $id = $_GET['id']; // pega o id do carrinho a remover

        if (isset($_SESSION['carrinho'])) { // verifica se existe carrinho na sessão
            $carrinho = $_SESSION['carrinho']; //pega o carrinho

            foreach($carrinho->getLista() as $item){ // Verifica os itens do carrinho
                if ($item->getProduto()->getPk_produto()===$id) { // Se o produto existir no carrinho
                    $carrinho->removeItem($id); // excluir o carrinho
                    $_SESSION['carrinho'] = $carrinho; // Atualiza o carrinho na sessão
                };
            }
        }else{
            //Se ão existir carrinho criado, retorna a página inicial
            //header("location: http://localhost/lojaphpunit/src/");
            header("location:".BASEURL);
        }
    }
}