 <div class="carousel-inner">

    <?php
      $active=true;
    ?>

    <?php foreach ($lista2 as $produto) { ?>

      <?php if($active==true){ $active=false ?>

        <div class="carousel-item active">
          <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
        </div>

      <?php }else{ ?>

        <div class="carousel-item">
          <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
        </div>
   
    <?php }}  ?>

  </div>