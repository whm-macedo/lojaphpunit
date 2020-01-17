<?php
namespace LOJA\DAO;

use LOJA\Model\Conexao;
use LOJA\Model\Pedido;
use LOJA\Model\Item;
use LOJA\Model\Carrinho;
use LOJA\Model\Cliente;

class DAOPedido{
    public function cadastrar(Pedido $pedido, Carrinho $carrinho){
        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try{
            
            $con = $pdo->prepare("INSERT INTO pedido VALUES (default, :data_pedido, :frete, :dias, :fk_cliente)");
            $con->bindValue(":data_pedido", $pedido->getData());
            $con->bindValue(":frete", $pedido->getFrete());
            $con->bindValue(":dias", $pedido->getDias());
            $con->bindValue(":fk_cliente", $_SESSION['clienteid']);
            $con->execute();
            $lastId = $pdo->lastInsertId();
            $_SESSION['idpedido'] = $lastId;

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
    public function listarPedidoCliente($idCliente)
    {
        $sql = "SELECT pedido.data_pedido, SUM(produto.preco*item.quantidade) as total
        FROM pedido INNER JOIN cliente
        on pedido.fk_cliente = cliente.pk_cliente
        inner join item
        on item.fk_pedido = pedido.pk_pedido
        inner join produto
        on produto.pk_produto = item.fk_produto
        where cliente.pk_cliente = id";

    

    $con = Conexao::getInstance()->prepare($sql);
    $con->bindValue(":id", $idCliente);
    $result = $con->execute();
    }
    public function PedidoDetalhado(Type $var = null)
    {
        // DETALHA UM PEDIDO
      
      $sql ="SELECT 
      pedido.data_pedido,
      pedido.frete,
      produto.nome,
      produto.preco
      
          FROM pedido INNER JOIN cliente
          ON pedido.fk_cliente = cliente.pk_cliente

          INNER JOIN item
          ON item.fk_pedido = pedido.pk_pedido

          INNER JOIN produto
          ON produto.pk_produto = item.fk_produto
          
          WHERE pedido.pk_pedido = :id";
    }


}