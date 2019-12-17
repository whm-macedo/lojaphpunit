<?php
namespace LOJA\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location:".BASEURL);//."painel/adm"
        }
    }

    public static function restritoUsuario(){
        $config = new Config();
        if(!isset($_SESSION['clienteid'])){
            header("location:".BASEURL. 'cliente/cadastrar');
        }
    }
}