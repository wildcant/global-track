$(document).ready(function() {
  $("#button").click(function() {
    getT();
  });
});
// lat -74.8514925
//lon  11.0194053
var options = {
  center: [11.017236142211214, -74.85676288604736],
  zoom: 18
};
var map = L.map("map", options);

L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
  attribution: "OSM"
}).addTo(map);

var myMarker = L.marker([11.017236142211214, -74.85676288604736], {
  title: "MyPoint",
  alt: "The Big I",
  draggable: true
})
  .addTo(map)
  .on("dragend", function() {
    var coord = String(myMarker.getLatLng());
    geo = coord.slice(7, -1).split(", ");
    $("#latitud").val(geo[1]);
    $("#longitud").val(geo[0]);
  });
function getT() {
  var val1 = $("#latitud").val();
  var val2 = $("#longitud").val();
  var val3 = $("#rad").val();
  console.log(val1, val2, val3);

  $.ajax({
    type: "POST",
    url: "getTime.php",
    data: { lat: val1, lon: val2, rad: val3 },
    success: function(data) {
      if (data == null) {
        alert("No se encontro esta posicion");
      } else {
        var tiempos = data.split(",");
        console.log(tiempos);
        $("#t1").val(tiempos[0]);
        $("#t2").val(tiempos[tiempos.length - 2]);
      }
    }
  });
}
