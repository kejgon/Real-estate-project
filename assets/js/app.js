



// Google map activation
function myMap(properties) {
    var mapProp = {
        center: new google.maps.LatLng(-1.299568, 36.789859),
        zoom: 6,
    };
    var map = new google.maps.Map(document.getElementById("contactMap"), mapProp);
}


myMap();

