<?php

  include "view/header.php";
  
?>

<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
       
        
    </thead>
    <tbody>
        <?php foreach ($lista as $categoria) {?>
        <tr>
            <th scope="row"><?php echo $categoria['pk_categoria']?> </th>
            <td><?php echo $categoria['nome']?></td>
            
            
        </tr>
        <?php }?>
    </tbody>
</table>

<?php

  include "view/footer.php";
  
?>

