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

class WebTest extends TestCase{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen(){
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
        
        $driver->get('http://localhost/lojaphpunit/www/cliente/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys('I want to send this');
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys('abc.123');
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys('21979956277');
        $driver->findElement(WebDriverBy::id('email'))->sendKeys('exemplo@exemplo.com');
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys('123.456.789-96');
        $driver->findElement(WebDriverBy::id('rua'))->sendKeys('R a');
        $driver->findElement(WebDriverBy::id('complemento'))->sendKeys('mercado');
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys('23063541');
        $driver->findElement(WebDriverBy::id('uf'))->sendKeys('RJ');
        $driver->findElement(WebDriverBy::id('bairro'))->sendKeys('Campo Grande');
        

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
// brasil
    }
}