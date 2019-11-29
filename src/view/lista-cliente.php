<?php

  include "view/header.php";
  
?>

<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
        <th scope="col">telefone</th>
        <th scope="col">email</th>
        <th scope="col">cpf</th>
        <th scope="col">rua</th>
        <th scope="col">cep</th>
        <th scope="col">numero</th>
        <th scope="col">bairro</th>
        <th scope="col">cidade</th>
    </thead>
    <tbody>
        <?php foreach ($lista as $cliente) {?>
        <tr>
            <th scope="row"><?php echo $cliente['pk_id']?> </th>
            <td><?php echo $cliente['nome']?></td>
            <td><?php echo $cliente['telefone']?></td>
            <td><?php echo $cliente['email']?></td>
            <td><?php echo $cliente['cpf']?></td>
            <td><?php echo $cliente['rua']?></td>
            <td><?php echo $cliente['cep']?></td>
            <td><?php echo $cliente['numero']?></td>
            <td><?php echo $cliente['bairro']?></td>
            <td><?php echo $cliente['cidade']?></td>
        </tr>
        <?php }?>
    </tbody>
</table>

<?php

  include "view/footer.php";
  
?>

