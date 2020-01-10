<?php
namespace LOJA\DAO;

use LOJA\Model\Conexao;
use LOJA\Model\Pedido;
use LOJA\Model\Item;
use LOJA\Model\Carrinho;

class DAOPedido{
    public function cadastrar(Pedido $pedido, Carrinho $carrinho){
        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try{
            
            $con = $pdo->prepare("INSERT INTO pedido VALUES (default, :data_pedido, :frete, :dias, :fk_cliente)");
            $con->bindValue(":data_pedido", $pedido->getData());
            $con->bindValue(":frete", $pedido->getFrete());
            $con->bindValue(":dias", $pedido->getDias());
            $con->bindValue(":fk_cliente", $pedido->getCliente()->getPk_cliente());
            $con->execute();
            $lastId = $pdo->lastInsertId();

            $con2 = $pdo->prepare("INSERT INTO item VALUES (:quantidade, :fk_produto, :fk_pedido)" );

            foreach ($carrinho->getItems() as $item){

                $con2->bindValue(":fk_produto", $item->getProduto()->getPk_produto());
                $con2->bindValue(":fk_pedido", $lastId);
                $con2->bindValue(":quantidade", $item->getQuantidade());
                $con2->execute();
            }

            $pdo->commit();
            $_SESSION['carrinho'] = null;
            return "Pedido efetuado com sucesso";
        }catch(\Exception $e){
            $pdo->rollback();
            return "Erro ao efetuar o pedido";
        }  
          
    }
    
}