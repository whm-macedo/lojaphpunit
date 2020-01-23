<?php


include "header.php"?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Data do Pedido</th>
            <th scope="col">Total da Compra</th>
            <th scope="col"></th>

            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pedido as $pedido) {?>
        <tr>
            <td><?php echo $pedido['data_pedido'] ?></td>
            <td>R$ <?php echo number_format($pedido['total'],2,",","."); ?></td>
            <td><a href=" <?php echo $url; ?>/painel/pedido/<?php echo $pedido['pk_pedido'];?>" class="btn btn-warning">Detalhes</a> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php include "footer.php"?>