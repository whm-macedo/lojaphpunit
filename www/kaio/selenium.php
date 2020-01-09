https://github.com/facebook/php-webdriver/wiki

# Selenium 3.8
https://selenium-release.storage.googleapis.com/index.html?path=3.8/

# Executar servidor Selenium
java -jar selenium-server-standalone-3.8.1.jar -enablePassThrough false
java -Dwebdriver.gecko.driver="C:\geckodriver\geckodriver.exe" -jar C:\Selenium\selenium-server-standalone-3.8.1.jar -enablePassThrough false
java -Dwebdriver.gecko.driver="C:\geckodriver\geckodriver.exe" -jar C:\Selenium\selenium-server-standalone-3.8.1.jar -enablePassThrough false -port 4445

# Testar Servidor
http://localhost:4444/wd/hub

# Instalação do Selenium para Composer
composer require facebook/webdriver

# Instação Driver para Firefox
https://github.com/mozilla/geckodriver/releases/download/v0.26.0/geckodriver-v0.26.0-win64.zip
## Extrair para c:/geckodriver
## Adicionar c:/geckodriver no PATH