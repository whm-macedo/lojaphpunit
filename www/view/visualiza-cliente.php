<?php

include "view/header.php";

?>

<form class="form-horizontal  offset-md-3" method="POST" action="<?php echo BASEURL?>cliente/visualizar/<?php echo $_GET['id']?>">
    <fieldset>

        <!-- Form Name -->
        <legend>Visualizar/Editar Cliente</legend>

        <input id="id" name="id" value="<?php echo $cliente['pk_cliente']; ?>" type="hidden">

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="nome">Nome:</label>
            <div class="col-md-6">
                <input id="nome" name="nome" value="<?php echo $cliente['nome']; ?>" type="text" placeholder="" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="senha">Senha:</label>
            <div class="col-md-6">
                <input id="senha" name="senha" value="<?php echo $cliente['senha']; ?>" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="telefone">Telefone:</label>
            <div class="col-md-6">
                <input id="telefone" name="telefone" value="<?php echo $cliente['telefone']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="email">Email:</label>
            <div class="col-md-6">
                <input id="email" name="email" value="<?php echo $cliente['email']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="cpf">Cpf:</label>
            <div class="col-md-6">
                <input id="cpf" name="cpf" value="<?php echo $cliente['cpf']; ?>" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="rua">Rua:</label>
            <div class="col-md-6">
                <input id="rua" name="rua" value="<?php echo $cliente['rua']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>
                <!-- Text input-->
                <div class="form-group">
            <label class="col-md-6 control-label" for="complemento">Complemento:</label>
            <div class="col-md-6">
                <input id="complemento" name="complemento" value="<?php echo $cliente['complemento']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="cep">cep:</label>
            <div class="col-md-6">
                <input id="cep" name="cep" value="<?php echo $cliente['cep']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-6 control-label" for="uf">UF:</label>
            <div class="col-md-6">
                <input id="uf" name="uf" value="<?php echo $cliente['uf'];
                                                ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="bairro">bairro:</label>
            <div class="col-md-6">
                <input id="bairro" name="bairro" value="<?php echo $cliente['bairro']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-6 control-label" for="editar"></label>
      <div class="col-md-6">
        <button id="editar" name="editar" class="btn btn-primary">Editar</button></a>
      </div>
    </div>


    </fieldset>
</form>

<?php

include "view/footer.php";

?>