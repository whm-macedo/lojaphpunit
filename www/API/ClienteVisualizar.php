<?php

namespace LOJA\API;

use LOJA\DAO\DAOCliente;

class ClienteVisualizar
{
    public $cliente;

    public function __construct()
    {
        if ($_SESSION['clienteid']) {
            try {
                $DAO = new DAOCliente();
                $this->cliente = $DAO->buscarPorId($_SESSION['clienteid']);
            } catch (\Exception $erro) {
                $this->cliente = $erro->getMessage();
            }
        }
    }
}
