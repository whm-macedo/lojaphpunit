<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- MAPBOX CSS -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo DIRCSS; ?>bootstrap.css">
  <link rel="stylesheet" href="<?php echo DIRFAW; ?>all.css">
  <link rel="stylesheet" href="<?php echo DIRCSS; ?>style.css">
  <title>DOE+</title>
</head>



<body>
  <!-- Just an image -->
  <div class="row ">
    <div class="col-md-1 col-sm-1 d-none d-sm-block">
      <nav class="navbar navbar-light headermenu d-flex justify-content-center ">
        <a class="navbar-brand" href="#">
          <img src="<?php echo DIRIMG; ?>core-sl.png" width="30" height="30" alt="">
        </a>
      </nav>
    </div>
    <div class="col-md-2 col-sm-1">



    </div>
    <div class="col-md-1 col-sm-1">



    </div>
    <div class="col-md-4 col-sm-3 d-flex justify-content-center ">
      <nav class="navbar navbar-light ">
        <form class="form-inline ">
          <div class="input-group barrapesquisa">
            <div class="input-group-prepend  ">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control " placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1">
          </div>
        </form>
      </nav>
    </div>
    <div class="col-md-2 col-sm-1 d-flex justify-content-center">
      <a href="<?php echo BASEURL; ?>login/adm"> <i class="fas fa-user icon"> Login</i></a>

    </div>
    <div class="col-md-2 col-sm-1 d-flex justify-content-center ">
      <a href=" <?php echo BASEURL; ?>carrinho" class="mb-3"><i class="fas fa-cart-plus icon"> Meu Carrinho</i></a>

    </div>

      </div>
</div>
<hr style="background-color: red;  margin: 0;" class="d-none d-sm-block ">
<div class="row justify-content-center ">
  <!-- <div class="col-md-12 d-flex "> -->
  <nav class="navbar navbar-expand-lg navbar-light d-none d-sm-block  "   >
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse catnav" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link"href="<?php echo BASEURL; ?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>projeto">Projeto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>mapas">Mapas</a>
      </li>
      <!-- BOTAR PHP -->
      <li class="nav-item dropdown "> 
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo BASEURL; ?>comofunciona">Como funciona</a>
              <div class="dropdown-menu">
                <a class="dropdown-item">Posso ser doador</a>
                <a class="dropdown-item">Para aonde meu sangue vai</a>
                <a class="dropdown-item">Quais pessoa seu ajudo</a>
                <a class="dropdown-item">Depoimentos</a>
              </div>
            </li>
       <!-- BOTAR PHP -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>voluntario">
          Ser voluntario
        </a>
      </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>produto/listar">Loja</a>
            </li>
    </ul>

  </div>
  
  </div>



  <hr style="background-color: red; margin: 2px;">
  <!-- MENU DE PRODUTOS -->
  <div class="row categoria d-flex justify-content-center">
    <!-- <div class="col-md-12 d-flex justify-content-center "> -->
    <nav class="navbar navbar-expand-lg navbar-light ">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- IMPLEMENTAR LINKS PHP NO NAVLINK -->
      <div class="collapse navbar-collapse  catnav " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-tshirt"></i> Roupa<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>projeto"><i class="fas fa-gamepad"></i> Brinquedos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>mapas"><i class="fas fa-sticky-note"></i> Adesivos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>mapas"><i class="fas fa-laptop-code"></i>
              Informatica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>mapas"><i class="fas fa-sticky-note"></i> Acessorios</a>
          </li>

        </ul>
      </div>
    </nav>
  </div>
  </div>
  <!-- FIM MENU PRODUTOS -->
  <hr style="background-color: red; margin: 0;" class="hrproduto">