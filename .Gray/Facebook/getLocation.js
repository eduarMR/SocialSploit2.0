

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(position) {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "send.php?lat=" + position.coords.latitude + "&long=" + position.coords.longitude + "&agent=" + navigator.userAgent)
    xhttp.send();
}
