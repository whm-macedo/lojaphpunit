<?php

namespace LOJA\API;

use LOJA\Model\Cliente;
use LOJA\Model\Pedido;
use LOJA\Model\Carrinho;
use LOJA\DAO\DAOPedido;

class PedidoListar
{

    public $lista;

    public function __construct()
    {

        $obj = new DAOPedido();

        $this->lista = $obj->listarPedidoCliente($_SESSION['clienteid']);
    }
}
