<?php

include "view/header.php";

?>

<div class="col-md-12 d-flex justify-content-center">
<form class="form-horizontal" method="post" action="">
      <img class="mb-4 ml-5 d-flex justify-content-center" src="<?php echo DIRIMG; ?>doe-final.png" alt="" width="72" height="72">
      
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
      <label for="Password" class="sr-only">Senha</label>
      <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
      
      <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>

      <button class="btn btn-lg btn-primary btn-block mt-3 formadm" type="submit">Login</button>
      
    </form>



<?php

include "view/footer.php";

?> -->