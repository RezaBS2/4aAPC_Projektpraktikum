function loadMap() {
    var linz = {lat: 48.3069, lng: 14.2858};
    var currentLocation = {lat: 48.3030284, lng: 14.2876725};
        var map = new google.maps.Map(document.getElementById('googlemap'), {
            zoom: 15,
            center: linz
        });

        new google.maps.Marker({
            position: currentLocation,
            map,
            title: "Location Name",
          });

          
}