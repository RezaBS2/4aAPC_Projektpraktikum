function loadMap() {


    const url = window.location.href;
    const searchParams = new URLSearchParams(window.location.search);

    const lat = searchParams.get('lat');
    const lon = searchParams.get('lon');
    const firma = searchParams.get('firma');

    var linz = { lat: 48.3069, lng: 14.2858 };
    var currentLocation = { lat: lat, lng: lon };
    var map = new google.maps.Map(document.getElementById('googlemap'), {
        zoom: 15,
        center: linz
    });

    new google.maps.Marker({
        position: currentLocation,
        map,
        title: firma,
    });


}