<?php

  include "view/header.php";
  
?>

<form class="form-horizontal  offset-md-3" method="POST" action="cadastrar">
    <fieldset >

    <!-- Form Name -->
    <legend>Visualizar Cliente</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="nome">Nome:</label>  
    <div class="col-md-6">
    <input id="nome" name="nome" value="<?php echo $cliente['nome'];?>" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="telefone">Telefone:</label>  
    <div class="col-md-6">
    <input id="telefone" name="telefone" value="<?php echo $cliente['telefone'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="email">Email:</label>  
    <div class="col-md-6">
    <input id="email" name="email" value="<?php echo $cliente['email'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="cpf">Cpf:</label>  
    <div class="col-md-6">
    <input id="cpf" name="cpf" value="<?php echo $cliente['cpf'];?>" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="rua">Rua:</label>  
    <div class="col-md-6">
    <input id="rua" name="rua" value="<?php echo $cliente['rua'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="complemento">cep:</label>  
    <div class="col-md-6">
    <input id="complemento" name="cep" value="<?php echo $cliente['cep'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="cep">numero:</label>  
    <div class="col-md-6">
    <input id="cep" name="numero" value="<?php echo $cliente['numero'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="uf">bairro:</label>  
    <div class="col-md-6">
    <input id="bairro" name="bairro" value="<?php echo $cliente['bairro'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="bairro">cidade:</label>  
    <div class="col-md-6">
    <input id="cidade" name="cidade" value="<?php echo $cliente['cidade'];?>" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-6 control-label" for="cadastrar"></label>
    <div class="col-md-6">
        <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
    </div>
    </div>

    </fieldset>
</form>

<?php

  include "view/footer.php";
  
?>