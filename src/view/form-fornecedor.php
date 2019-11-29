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
    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Cidade</label>  
    <div class="col-md-4">
    <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Estado</label>  
    <div class="col-md-4">
    <input id="estado" name="estado" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Cnpj</label>  
    <div class="col-md-4">
    <input id="cnpj" name="cnpj" type="text" placeholder="" class="form-control input-md" required="">
        
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