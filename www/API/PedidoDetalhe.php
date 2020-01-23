<?php

namespace LOJA\API;

use LOJA\Model\Cliente;
use LOJA\Model\Pedido;
use LOJA\Model\Carrinho;
use LOJA\DAO\DAOPedido;

class PedidoDetalhe{
    public $dados;
    public $produtos;

public function __construct(){
    try{
        $DAO = new DAOPedido();
        $this->dados = $DAO->pedidoDetalhado($_GET['id']);
        $this->produtos = $DAO->listaItens($_GET['id']);
    }catch(\Exception $e){
        $this->dados = $e->getMessage();
    }
}
}