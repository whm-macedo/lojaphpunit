<?php include "view/header.php"; ?>


<!-- CARROSEL  -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img class="carousel-img mt-4" src="<?php echo DIRIMG; ?>DOE+.png" alt="first slide">
      <div class="mt-4">
        <h5 style=" color:#FFFFFF ;">POSSO SER UM DOADOR?</h5>
      </div>
      <div><a class="btn  btn-primary" href="<?php echo BASEURL  ?>view/como-funciona.php" role="button" style="background-color:#FFFFFF; color: red;">Saiba Mais</a></div>

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo DIRIMG; ?>" alt="...">

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo DIRIMG; ?>" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FIM CARROUSEL -->
<!-- inicio lista produto -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4 justify-content-center" style="color:red"><i class="fas fa-cart-plus" style="color: #ff0000;"></i> Produtos</h1>
    <hr style="background-color: red;">

    <div class="container">
      <div class="row mt-3">
        <?php foreach ($lista2 as $produto) {
          $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
          ?>
          <div class="col-sm-3 mb-3">
            <div class="card h-100 ">
              <a href="#"><img class="card-img-top grow" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"></a>
                </h4>
                <h3><?php echo $produto['nome'] ?></h3>
                <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
              <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar

              </a>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <!-- fim lista produto -->


  <!-- INICIO JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->
  <div class="jumbotron">
    <h1 class="display-9  " style="color:red">POR QUE SER UM DOADOR?</h1>
    <p class="lead">Beneficios de ser um doador</p>
    <hr class="mb-4">
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="1">Uma doação de sangue pode salvar até 4 vidas</a>
          <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="wild">Seu organismo repõe rapidamente o sangue doado</a>
          <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages">Exame de Sangue Gratuito</a>
          <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4" role="tab" aria-controls="messages">Ajudar outras pessoas faz bem para você também</a>
        </div>
      </div>
      <div class="col-6">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">Após a coleta, o conteúdo da bolsa é fracionado em componentes sanguíneos (concentrado de hemácias, de plaquetas e plasma) que são examinados para que haja a certeza de que não existe a presença de nenhuma doença neles. Se há reação sorológica, a unidade é descartada. Caso contrário, os componentes são liberados e
            podem ser usados em até quatro pessoas, ou seja, podem salvar até quatro vidas.</div>
          <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">Uma pessoa adulta, seja do sexo masculino ou feminino, possui em média cinco litros de sangue, e em uma doação são coletados no máximo 450 ml - ou seja, menos de 10% de todo o sangue.
            Este volume é reposto em 24 horas pelo organismo.</div>
          <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-2-list">Quem deseja doar sangue passa por uma avaliação prévia para detectar se há condições ou doenças que possam ser impeditivas para a doação. Essa entrevista e esses exames são particulares e
            os dados e resultados são mantidos sob total sigilo.</div>
          <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-2-list">Tanto quem recebe quanto quem doa sangue é beneficiado. A solidariedade é uma troca: psicologicamente,
            a sensação de fazer o bem aos outros afeta positivamente o autor da ação.</div>
        </div>
      </div>
    </div>
  </div>

  <!-- FIM JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->




  <!-- INICIO MAPBOX -->
<div class="row">
  <div class='sidebar'>
  <div class='heading'>
    <h1>Lugares Doação</h1>
  </div>
  <div id='listings' class='listings'></div>
</div>
<div id='map' class='map pad2'></div>
  <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iZXJ0by1qdW5pb3I5OSIsImEiOiJjazJuN212YTkwMXB5M2JuejI4cTQ0MTd2In0.hXajmx4S4Ev9eaeJPKeSeA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
        // initial position in [lon, lat] format
        center: [-43.593078,-22.902450],
        // initial zoom
        zoom: 14
      });
      var stores = {
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -43.678918,-22.923656
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 979956274",
        "phone": "2022347336",
        "address": "Rua Felipe Cardoso - Santa Cruz",
        "city": "Rio de Janeiro",
        "country": "Rio de Janeiro",
        "crossStreet": "at 15th St NW",
        "postalCode": "20005",
        "state": "RJ"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
           -43.349345,-22.845515,
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 31553075",
        "phone": "31553075",
        "address": "Rocha Miranda - Rocha Miranda",
        "city": "Rio de Janeiro",
        "country": "Brasil",
        "crossStreet": "at 22nd St NW",
        "postalCode": "20037",
        "state": "RJ."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.043929,
          38.910525
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 387-9338",
        "phone": "2023879338",
        "address": "1512 Connecticut Ave NW",
        "city": "Washington DC",
        "country": "United States",
        "crossStreet": "at Dupont Circle",
        "postalCode": "20036",
        "state": "D.C."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.0672,
          38.90516896
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 337-9338",
        "phone": "2023379338",
        "address": "3333 M St NW",
        "city": "Washington DC",
        "country": "United States",
        "crossStreet": "at 34th St NW",
        "postalCode": "20007",
        "state": "D.C."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.002583742142,
          38.887041080933
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 547-9338",
        "phone": "2025479338",
        "address": "221 Pennsylvania Ave SE",
        "city": "Washington DC",
        "country": "United States",
        "crossStreet": "btwn 2nd & 3rd Sts. SE",
        "postalCode": "20003",
        "state": "D.C."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -76.933492720127,
          38.99225245786
        ]
      },
      "properties": {
        "address": "8204 Baltimore Ave",
        "city": "College Park",
        "country": "United States",
        "postalCode": "20740",
        "state": "MD"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.097083330154,
          38.980979
        ]
      },
      "properties": {
        "phoneFormatted": "(301) 654-7336",
        "phone": "3016547336",
        "address": "4831 Bethesda Ave",
        "cc": "US",
        "city": "Bethesda",
        "country": "United States",
        "postalCode": "20814",
        "state": "MD"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.359425054188,
          38.958058116661
        ]
      },
      "properties": {
        "phoneFormatted": "(571) 203-0082",
        "phone": "5712030082",
        "address": "11935 Democracy Dr",
        "city": "Reston",
        "country": "United States",
        "crossStreet": "btw Explorer & Library",
        "postalCode": "20190",
        "state": "VA"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.10853099823,
          38.880100922392
        ]
      },
      "properties": {
        "phoneFormatted": "(703) 522-2016",
        "phone": "7035222016",
        "address": "4075 Wilson Blvd",
        "city": "Arlington",
        "country": "United States",
        "crossStreet": "at N Randolph St.",
        "postalCode": "22203",
        "state": "VA"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -75.28784,
          40.008008
        ]
      },
      "properties": {
        "phoneFormatted": "(610) 642-9400",
        "phone": "6106429400",
        "address": "68 Coulter Ave",
        "city": "Ardmore",
        "country": "United States",
        "postalCode": "19003",
        "state": "PA"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -75.20121216774,
          39.954030175164
        ]
      },
      "properties": {
        "phoneFormatted": "(215) 386-1365",
        "phone": "2153861365",
        "address": "3925 Walnut St",
        "city": "Philadelphia",
        "country": "United States",
        "postalCode": "19104",
        "state": "PA"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [
          -77.043959498405,
          38.903883387232
        ]
      },
      "properties": {
        "phoneFormatted": "(202) 331-3355",
        "phone": "2023313355",
        "address": "1901 L St. NW",
        "city": "Washington DC",
        "country": "United States",
        "crossStreet": "at 19th St",
        "postalCode": "20036",
        "state": "D.C."
      }
    }
  ]
};
  map.on('load', function(e) {
  // Add the data to your map as a layer
  map.addLayer({
    id: 'locations',
    type: 'symbol',
    // Add a GeoJSON source containing place coordinates and information.
    source: {
      type: 'geojson',
      data: stores
    },
    layout: {
      'icon-image': 'hospital',
      'icon-allow-overlap': true,
    }
  });
  buildLocationList(stores);
});
// Add an event listener for when a user clicks on the map
map.on('click', function(e) {
  // Query all the rendered points in the view
  var features = map.queryRenderedFeatures(e.point, { layers: ['locations'] });
  if (features.length) {
    var clickedPoint = features[0];
    // 1. Fly to the point
    flyToStore(clickedPoint);
    // 2. Close all other popups and display popup for clicked store
    createPopUp(clickedPoint);
    // 3. Highlight listing in sidebar (and remove highlight for all other listings)
    var activeItem = document.getElementsByClassName('active');
    if (activeItem[0]) {
      activeItem[0].classList.remove('active');
    }
    // Find the index of the store.features that corresponds to the clickedPoint that fired the event listener
    var selectedFeature = clickedPoint.properties.address;

    for (var i = 0; i < stores.features.length; i++) {
      if (stores.features[i].properties.address === selectedFeature) {
        selectedFeatureIndex = i;
      }
    }
    // Select the correct list item using the found index and add the active class
    var listing = document.getElementById('listing-' + selectedFeatureIndex);
    listing.classList.add('active');
  }
});
function flyToStore(currentFeature) {
  map.flyTo({
    center: currentFeature.geometry.coordinates,
    zoom: 15
  });
}

function createPopUp(currentFeature) {
  var popUps = document.getElementsByClassName('mapboxgl-popup');
  // Check if there is already a popup on the map and if so, remove it
  if (popUps[0]) popUps[0].remove();

  var popup = new mapboxgl.Popup({ closeOnClick: false })
    .setLngLat(currentFeature.geometry.coordinates)
    .setHTML('<h3>Sweetgreen</h3>' +
      '<h4>' + currentFeature.properties.address + '</h4>')
    .addTo(map);
}
function buildLocationList(data) {
  // Iterate through the list of stores
  for (i = 0; i < data.features.length; i++) {
    var currentFeature = data.features[i];
    // Shorten data.feature.properties to `prop` so we're not
    // writing this long form over and over again.
    var prop = currentFeature.properties;
    // Select the listing container in the HTML and append a div
    // with the class 'item' for each store
    var listings = document.getElementById('listings');
    var listing = listings.appendChild(document.createElement('div'));
    listing.className = 'item';
    listing.id = 'listing-' + i;

    // Create a new link with the class 'title' for each store
    // and fill it with the store address
    var link = listing.appendChild(document.createElement('a'));
    link.href = '#';
    link.className = 'title';
    link.dataPosition = i;
    link.innerHTML = prop.address;

    // Create a new div with the class 'details' for each store
    // and fill it with the city and phone number
    var details = listing.appendChild(document.createElement('div'));
    details.innerHTML = prop.city;
    if (prop.phone) {
      details.innerHTML += ' · ' + prop.phoneFormatted;
    }
    // Add an event listener for the links in the sidebar listing
link.addEventListener('click', function(e) {
  // Update the currentFeature to the store associated with the clicked link
  var clickedListing = data.features[this.dataPosition];
  // 1. Fly to the point associated with the clicked link
  flyToStore(clickedListing);
  // 2. Close all other popups and display popup for clicked store
  createPopUp(clickedListing);
  // 3. Highlight listing in sidebar (and remove highlight for all other listings)
  var activeItem = document.getElementsByClassName('active');
  if (activeItem[0]) {
    activeItem[0].classList.remove('active');
  }
  this.parentNode.classList.add('active');
});
  }
}

  </script>
</div>



  <?php include "view/footer.php"; ?>