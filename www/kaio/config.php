<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteRule ^([a-z0-9-]+)?$ src/controller.php?model=$1 [NC,L]
  RewriteRule ^([a-z0-9-]+)/([a-z0-9-]+)?$ src/controller.php?model=$1&action=$2 [NC,L]
  RewriteRule ^([a-z0-9-]+)/([a-z0-9-]+)/([a-z0-9-]+)?$ src/controller.php?model=$1&action=$2&id=$3 [NC,L]
  RewriteRule ^([a-z0-9-]+)/([a-z0-9-]+)/([a-z0-9-]+)/(qtd=[a-z0-9-]+)?$ src/controller.php?model=$1&action=$2&id=$3&qtd=$4 [NC,L]
</IfModule>


///////////////

fitchef.tk
  
  dns1.danielcavalcanti.com.br 189.38.95.2
  dns2.danielcavalcanti.com.br 162.159.24.210
  
  fitchef.tk
  petcustoms.ml
  doemais.ml
  caio, eliakin , gabriel -> qualificaroficina.tk
  
  
  Senha FTP: senac@10058
    
    
  // LOGINS FTP (alternativo)
    URL: http://www.doemais.web70113.uni5.net
    HOST: ftp.web70113.uni5.net
      USUARIO: doemais
        SENHA: senac@10058
          MYSQL: mysql18-farm70.uni5.net
          BANCO/USURIO: doemais

    URL: http://www.fitchef.web70111.uni5.net
    HOST: ftp.web70111.uni5.net
      USUARIO: fitchef
        SENHA:  
          MYSQL: mysql17-farm70.uni5.net
          BANCO/USURIO: fitchef				

  	URL: http://www.petcustoms.web70111.uni5.net
    HOST: ftp.web70111.uni5.net
      USUARIO: petcustoms
        SENHA: senac@10058
          MYSQL: mysql17-farm70.uni5.net
          BANCO/USURIO: petcustoms


    URL: http://www.qualificaroficina.web70113.uni5.net
    HOST: ftp.web70113.uni5.net
      USUARIO: qualificaroficina
        SENHA: senac@10058
          MYSQL:  
          BANCO/USURIO: qualificarofic
            senac10058
