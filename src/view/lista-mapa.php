<?php include "view/header.php"; ?>

<h1>Página do MAPAS</h1>
<!-- INICIO MAPBOX -->
<div class="container">
  <div class="mapbox" id='map' style='width: 100%; height: 300px;'>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iZXJ0by1qdW5pb3I5OSIsImEiOiJjazJuN212YTkwMXB5M2JuejI4cTQ0MTd2In0.hXajmx4S4Ev9eaeJPKeSeA';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
      });
    </script>
  </div>
</div>
<!-- FIM MAPBOX -->

<?php include "footer.php"?>