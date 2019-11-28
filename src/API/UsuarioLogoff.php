<?php 
namespace LOJA\API;

class UsuarioLogoff
{
    function __construct()
    {
        unset($_SESSION['usuarioid']);
        unset($_SESSION['usuarionome']);
        unset($_SESSION);
        header ("location: http://localhost/senac/modelo-de-negocio/login/adm");
    }
}
