// Get data from php
$(document).ready(function(){           
    setInterval(() => {
        solicitar();   
    }, 500);
});
var mymap = L.map('mapid').setView([-74.85676288604736, 11.017236142211214], 13);
var marker = L.marker([lat, lng]).addTo(mymap);
var latlngs = new Array();
cent=0;
latlngs[cent]=[lat, lng];
var plyline = L.polyline(latlngs, {color: 'blue'}).addTo(mymap);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

function solicitar(){
    var oReq = new XMLHttpRequest();
    oReq.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //Tomar datos
            var latlong = this.responseText.split(" ");
            //Actualiza mapa
            marker.setLatLng({lat:latlong[0],lng:latlong[1]});
            //mymap.setView({lat:latlong[0],lng:latlong[1]});
            //Actualizar tabla
            document.getElementById("latitud").innerHTML = latlong[0];
            document.getElementById("longitud").innerHTML = latlong[1];
            document.getElementById("fecha").innerHTML = latlong[2];
            //Actualizar polilinea
            cent=cent+1;
            latlngs[cent]=[latlong[0], latlong[1]];
            plyline.setLatLngs(latlngs);
            mymap.fitBounds(plyline.getBounds());
        }
    }
oReq.open("get", "get-data.php", true);
oReq.send();
}