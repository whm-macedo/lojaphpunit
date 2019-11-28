<?php

  include "view/header.php";
  
?>

<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
       
    </thead>
    <tbody>
        <?php foreach ($lista as $usuario) {?>
        <tr>
            <th scope="row"><?php echo $usuario['pk_usuario']?> </th>
            <td><?php echo $usuario['nome']?></td>
            
        </tr>
        <?php }?>
    </tbody>
</table>

<?php

  include "view/footer.php";
  
?>
