<?php include "view/header.php"; ?>
<div class="container d-flex justify-content-center">
<div class="py-5 text-center">
  
</div>



<div class="row align-items-center mt-2">
    <div class="col-md-12 ">
        <!-- Select Basic -->


        <form action=" " method="POST">
            <p class="display-4" style="font-size:2.5rem">Selecione sua forma de pagamento</p>
            <div class="row justify-content-center">
                <div class="form-check m-3">
                    <input type="radio" class="form-check-input" id="materialChecked" name="cartao">
                    <label class="form-check-label" for="materialChecked">Cartão de Credito</label>


                </div>
                <div class="form-check m-3">
                    <input type="radio" class="form-check-input" id="materialChecked" name="boleto">
                    <label class="form-check-label" for="materialChecked">Boleto</label>
                </div>

                <button class="btn btn-primary btn-block  btnpagamento " type="submit">OK</button>
            </div>
        </form>


        <?php if (isset($_POST['cartao'])) {
        ?>
        <div class="container  justify-content-center">
            <form class="form-horizontal  ">


                <!-- Form Name -->
                <legend>Infomações para pagamento</legend>

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
            </form>
            </div>
        <?php 
        } else { 
            var_dump(" não escolheu 'bike'");
        }
        ?>

    </div>
   
</div>
</div>
<?php include "view/footer.php"; ?>