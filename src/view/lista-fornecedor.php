<?php

  include "view/header.php";
  
?>

<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
        <th scope="col">cidade</th>
        <th scope="col">estado</th>
        <th scope="col">cnpj</th>
       
    </thead>
    <tbody>
        <?php foreach ($lista as $fornecedor) {?>
        <tr>
            <th scope="row"><?php echo $fornecedor['pk_fornecedor']?> </th>
            <td><?php echo $fornecedor['nome']?></td>
            <td><?php echo $fornecedor['cidade']?></td>
            <td><?php echo $fornecedor['estado']?></td>
            <td><?php echo $fornecedor['cnpj']?></td>
            
        </tr>
        <?php }?>
    </tbody>
</table>

<?php

  include "view/footer.php";
  
?>
