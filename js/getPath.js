// Get data from php
$(document).ready(function(){           
    $('#button').click(function() {
        getdata();
    });
});
var mymap = L.map('mapid').setView([-74.85676288604736, 11.017236142211214], 13);
var latlngs = [];
cent=0;
latlngs[cent]=[lat, lng];
var plyline = L.polyline(latlngs, {color: 'blue'}).addTo(mymap);
mymap.fitBounds(plyline.getBounds());

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

function getdata(){
    var latlngs = new Array();
    var val1 = $('#text1').val();
      var val2 = $('#text2').val();
      $.ajax({
          type: 'POST',
          url: 'get_gps.php',
          data: { text1: val1, text2: val2},
          success: function (data) {
            console.log(data);

              var duos = data.split(" ");
              let cont = 0;
              let j=0;
              for (let i = 0; i < duos.length-1; i+=2) {
                j=i+1;  
                latlngs[cont] = [parseFloat(duos[j]),parseFloat(duos[i])];
                cont++;
                
              }        
              plyline.setLatLngs(latlngs);
              mymap.fitBounds(plyline.getBounds());
              console.log(latlngs);

          }
      });
  }