# Selenium 3.8
https://selenium-release.storage.googleapis.com/index.html?path=3.8/

# Executar servidor Selenium
java -jar selenium-server-standalone-3.8.1.jar -enablePassThrough false

# Testar Servidor
http://localhost:4444/wd/hub
  
# Instalação do Selenium para Composer
composer require facebook/webdriver

# Instação Driver para Firefox
https://github.com/mozilla/geckodriver/releases/download/v0.26.0/geckodriver-v0.26.0-win64.zip
## Extrair para c:/geckodriver
## Adicionar c:/geckodriver no PATH


java -Dwebdriver.gecko.driver="C:\geckodriver\geckodriver.exe" -jar C:\Selenium\selenium-server-standalone-3.8.1.jar -enablePassThrough false
  
  java -Dwebdriver.gecko.driver="C:\geckodriver\geckodriver.exe" -jar C:\Selenium\selenium-server-standalone-3.8.1.jar -enablePassThrough false -port 4445

    
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


class CadastroProdutoTest extends TestCase
{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen()
    {
        
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());

        $driver->get('http://localhost/lojavirtual/www/login/adm');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("KaioAdmin");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("cerbero");

        $submitElement = $driver->findElement(WebDriverBy::id('login'));
        $submitElement->click();

        $driver->get('http://localhost/lojavirtual/www/produto/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("NovoProduto");
        $driver->findElement(WebDriverBy::id('preco'))->sendKeys("1919");
        $driver->findElement(WebDriverBy::id('categoria'))->sendKeys("Camisa");
        $driver->findElement(WebDriverBy::id('imagem'))->sendKeys("camisaNova.jpg");

        $submitElement = $driver->findElement(WebDriverBy::id('Cadastrar'));
        $submitElement->click();

        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        
        $this->assertEquals($msg, "PRODUTO SALVO COM SUCESSO");
      
 
    }


}
