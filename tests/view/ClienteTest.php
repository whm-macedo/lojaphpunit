<?php
namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen(){
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
        
        $driver->get('http://localhost/lojaphpunit/www/cliente/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys('thais');
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys('4564s');
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys('21985071093');
        $driver->findElement(WebDriverBy::id('email'))->sendKeys('william.hormerod@gmail.com');
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys('13246333793');
        $driver->findElement(WebDriverBy::id('rua'))->sendKeys('rua 2');
        $driver->findElement(WebDriverBy::id('complemento'))->sendKeys('casa 1');
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys('23094-270');
        $driver->findElement(WebDriverBy::id('uf'))->sendKeys('rj');
        $driver->findElement(WebDriverBy::id('bairro'))->sendKeys('campo grande');
        

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
// brasil
    }
}