<?php

  include "view/header.php";
  
?>

<form class="form-horizontal  offset-md-3" method="POST" action="cadastrar">
    <fieldset >

    <!-- Form Name -->
    <legend>Cadastro de Cliente</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="nome">Nome:</label>  
    <div class="col-md-6">
    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="telefone">Telefone:</label>  
    <div class="col-md-6">
    <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="email">Email:</label>  
    <div class="col-md-6">
    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="cpf">Cpf:</label>  
    <div class="col-md-6">
    <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="rua">Rua:</label>  
    <div class="col-md-6">
    <input id="rua" name="rua" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="complemento">Complemento:</label>  
    <div class="col-md-6">
    <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="cep">Cep:</label>  
    <div class="col-md-6">
    <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="uf">Uf:</label>  
    <div class="col-md-6">
    <input id="uf" name="uf" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 control-label" for="bairro">Bairro:</label>  
    <div class="col-md-6">
    <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md">
        
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