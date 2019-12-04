<?php
namespace LOJA\Model;
class Conexao{
    private function __construct(){
        
    }
    public static function getInstance(){
        try {
            $conexao = new \PDO("mysql:host=localhost; dbname=loja", "root", "");
            //$conexao = new \PDO("mysql:host=mysql18-farm70.uni5.net; dbname=doemais", "doemais", "senac10058");
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");            
            return $conexao;
        } catch (\PDOException $erro) {            
            return null;
        }
    }
    
}
?>
