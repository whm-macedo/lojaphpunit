<?php

use LOJA\Model\Pedido;

include "header.php"?>
<?php   
        echo $pedido['frete'];
        echo $pedido->getFrete();
      
    
?>

<?php include "footer.php"?>