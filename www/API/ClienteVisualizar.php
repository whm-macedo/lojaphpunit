<?php

namespace LOJA\API;

use LOJA\DAO\DAOCliente;

class ClienteVisualizar
{
    public $cliente;

    public function __construct()
    {
        if ($_GET['id']) {
            try {
                $DAO = new DAOCliente();
                $this->cliente = $DAO->buscarPorId($_GET['id']);
            } catch (\Exception $erro) {
                $this->cliente = $erro->getMessage();
            }
        }
    }
}
