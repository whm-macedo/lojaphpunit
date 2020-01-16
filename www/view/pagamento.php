<?php include "view/header.php"; ?>
<div class="row align-items-center" >
<div class="col-12 ">

<form class="form-horizontal  ">
   

        <!-- Form Name -->
        <legend>Infomações para pagamento</legend>
        
        <!--<?php echo $_SESSION['idpedido'];?>-->

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label labelcss" for="textinput">Numero do cartão</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label labelcss" for="textinput">Código de segurança</label>
            <div class="col-md-2">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Expira</label>
            <div class="row " >
            <div class="col-md-1" style="padding-right:2px ">
                <select id="selectbasic" name="selectbasic" class="form-control pr-0">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                </select>
            </div>
            <label for="" class="">/</label>
            <div class="col-md-1 " style="padding-left:2px ">
                <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">2020</option>
                    <option value="2">2021</option>
                </select>
            </div>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios"></label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="1" checked="">
                    Pagamento em boleto
                </label>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block w-25" type="submit">Salvar</button>
</form>

</div>
</div>
<?php include "view/footer.php"; ?>