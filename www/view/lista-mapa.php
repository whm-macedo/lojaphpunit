<?php include "view/header.php"; ?>

<h1>Página do MAPAS</h1>
<!-- INICIO MAPBOX -->
<div class="container">
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
      center: [-43.593078, -22.902450],
      // initial zoom
      zoom: 14
    });
    var stores = {
      "type": "FeatureCollection",
      "features": [{
          "type": "Feature",
          "geometry": {
            "type": "Point",
            "coordinates": [
              -43.678918, -22.923656
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
              -43.349345, -22.845515,
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
      var features = map.queryRenderedFeatures(e.point, {
        layers: ['locations']
      });
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

      var popup = new mapboxgl.Popup({
          closeOnClick: false
        })
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
</div>
<!-- FIM MAPBOX -->

<?php include "footer.php" ?>