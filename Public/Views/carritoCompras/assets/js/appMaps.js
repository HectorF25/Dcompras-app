window.addEventListener('load', calcRoute, false);
var myLatLng = { lat: 4.610, lng: -74.082 };
var mapOptions = {
    center: myLatLng,
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();

directionsDisplay.setMap(map);

const options = {
    fields: ["formatted_address", "geometry", "name"],
    strictBounds: false,
    types: ["geocode"],
    componentRestrictions: {
        country: "COL",
    }
};

var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

function calcRoute() {
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'>Origen: " + document.getElementById("from").value + ".<br />Destino: " + document.getElementById("to").value + ".<br /> Distancia <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duracions <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";

            directionsDisplay.setDirections(result);
        } else {
            directionsDisplay.setDirections({ routes: [] });
            map.setCenter(myLatLng);
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i>Distancia no reconocida</div>";
        }
    });

}