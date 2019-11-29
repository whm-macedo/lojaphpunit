<?php

  include "view/header.php";
  
?>

<form class="form-horizontal" method="post" action="cadastrar">
    <fieldset>

    <!-- Form Name -->
    <legend>Cadastro de Fornecedor</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">nome</label>  
    <div class="col-md-4">
    <input id="nome" name="nome" value="<?php echo $fornecedor['nome'];?>" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="cidade">Cidade</label>  
    <div class="col-md-4">
    <input id="cidade" name="cidade" value="<?php echo $fornecedor['cidade'];?>"  type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label" for="estado">Estado</label>  
    <div class="col-md-4">
    <input id="estado" name="estado" value="<?php echo $fornecedor['estado'];?>"  type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label" for="cnpj">Cnpj</label>  
    <div class="col-md-4">
    <input id="cnpj" name="cnpj"  value="<?php echo $fornecedor['cnpj'];?>" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="cadastrar"></label>
    <div class="col-md-4">
        <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
    </div>
    </div>

    </fieldset>
</form>

<?php

  include "view/footer.php";
  
?>

