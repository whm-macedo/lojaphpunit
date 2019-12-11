<?php
namespace LOJA\includes;
class Config{

    private $servidor = "TEST"; //PROD OU TEST

    public $url = "http://localhost/lojaphpunit/www";
    public $serverHost;
    public $serverDB;
    public $serverUser;
    public $serverPass;
    public $cepOrigem;


    public function __construct(){
        if($this->servidor=="TEST"){
            $this->serverHost = "localhost";

            $this->serverDB = "loja";
            $this->serverUser = "root";
            $this->serverPass = ""; 
            $this->cepOrigem = "21852070";                       
        }else{
            $this->$url = "http://www.doemais.web70113.uni5.net";
            $this->serverHost = "mysql18-farm70.uni5.net";
            $this->serverDB = "doemais";
            $this->serverUser = "doemais";
            $this->serverPass = "senac10058";
            $this->sepOrigem = "21852070";
        }
    }
}