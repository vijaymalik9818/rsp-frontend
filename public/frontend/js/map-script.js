function initMap() {  var blueMarker = {    url: markerIconPath,    scaledSize: new google.maps.Size(60, 60) // Adjust the size as needed  };  var sacramento = {    info: '<strong>Corporate Office</strong><br>\r\    202, 5403 Crowchild Trail NW ,  <br> Calgary, AB T3B 4Z1<br>\r\    <a href="https://maps.app.goo.gl/bCRtQMKE5yK4Gdek9" target="_blank">Get Directions</a>',    lat: 51.1038044,    long: -114.1655494,  };  var locations = [    [sacramento.info, sacramento.lat, sacramento.long, 1],    // You can add more locations here if needed  ];  try {    var map = new google.maps.Map(document.getElementById("map"), {      zoom: 11,      center: new google.maps.LatLng(51.0642845, -114.1395738),      mapTypeId: google.maps.MapTypeId.ROADMAP,    });  } catch (e) {    console.error('Error initializing map: ', e);  }  var infowindow = new google.maps.InfoWindow({});  var marker;  // Add markers to the map  for (var i = 0; i < locations.length; i++) {    marker = new google.maps.Marker({      position: new google.maps.LatLng(locations[i][1], locations[i][2]),      map: map,      icon: blueMarker, // Set the marker icon to blue    });    google.maps.event.addListener(      marker,      "click",      (function (marker, i) {        return function () {          infowindow.setContent(locations[i][0]);          infowindow.open(map, marker);        };      })(marker, i)    );  }  // Once the map is loaded, append the card to the map container  google.maps.event.addListenerOnce(map, 'tilesloaded', function() {    // Card HTML content    var cardHTML = `      <div class="corporate-office-card">        <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-thm">          <div class="inquiry-form">            <h4 class="text-white">Corporate Office</h4>            <div class="d-flex flex-column gap-2 addressSection">              <p class="mb-0 d-flex gap-2">                <i class="fa-light fa-envelope"></i>                <a href="mailto:office@repinc.ca">office@repinc.ca</a>              </p>              <p class="mb-0 d-flex gap-2">                <i class="fa-light fa-phone"></i>                <a href="tel:403.547.4102">403.547.4102</a>              </p>              <p class="mb-0 d-flex gap-2">                <i class="fa-sharp fa-light fa-location-dot"></i>                202, 5403 Crowchild Trail NW Calgary, AB T3B 4Z1              </p>            </div>          </div>        </div>      </div>    `;    // Append the card to the map container    var mapContainer = document.getElementById('map');    mapContainer.insertAdjacentHTML('beforeend', cardHTML);    // Now style the card, center it, and make it appear above the map    var card = document.querySelector('.corporate-office-card');    card.style.position = 'absolute';    card.style.top = '52%';    card.style.left = '67%';    card.style.transform = 'translate(-50%, -50%)';    card.style.zIndex = '10';  });}