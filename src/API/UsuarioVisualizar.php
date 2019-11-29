<?php
namespace LOJA\API;

use LOJA\DAO\DAOUsuario;

class UsuarioVisualizar{
    public $dados;

    public function __construct(){
        if ($_GET['id']) {
            try {
                $DAO = new DAOUsuario();
                $usuario = $DAO->buscarPorId($_GET['id']);
            }catch (Exception $e) {
                $msg = $e->getMessage();
            }
        }
    }
}
?>