// Get data from php
$(document).ready(function() {
    $("#button").click(function() {
        getdata();
    });
    $("#button2").click(function() {
        getT();
    });
    $("#button3").click(function() {
        delMark();
    });
});

//Set up dateP and get Value from it
$(function() {
    $("#datetimepicker7").datetimepicker();
    $("#datetimepicker8").datetimepicker({
        useCurrent: false
    });
    $("#datetimepicker7").on("change.datetimepicker", function(e) {
        $("#datetimepicker8").datetimepicker("minDate", e.date);
        let d1 = e.date._d;
        d1 =
            d1.getFullYear() +
            "-" +
            (d1.getMonth() + 1) +
            "-" +
            d1.getDate() +
            " " +
            d1.getHours() +
            ":" +
            d1.getMinutes() +
            ":" +
            "0";
        $("#d1").val(d1);
    });
    $("#datetimepicker8").on("change.datetimepicker", function(e) {
        $("#datetimepicker7").datetimepicker("maxDate", e.date);
        let d2 = e.date._d;
        d2 =
            d2.getFullYear() +
            "-" +
            (d2.getMonth() + 1) +
            "-" +
            d2.getDate() +
            " " +
            d2.getHours() +
            ":" +
            d2.getMinutes() +
            ":" +
            "0";
        $("#d2").val(d2);
    });
});

//map init
var mymap = L.map("mapid").setView(
    [-74.85676288604736, 11.017236142211214],
    13
);
var latlngs = [];
cent = 0;
latlngs[cent] = [lat, lng];
var marker = L.marker([lat, lng], { opacity: 0 }).addTo(mymap);

var plyline = L.polyline(latlngs, { color: "blue" }).addTo(mymap);
mymap.fitBounds(plyline.getBounds());

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: 'OSM' })
    .addTo(mymap);


//Get data from inputs, make query & get data from DB and set vector to polyline
function getdata() {
    marker.setOpacity(0);
    var latlngs = new Array();
    var time = new Array();

    var val1 = $("#d1").val();
    var val2 = $("#d2").val();

    $.ajax({
        type: "POST",
        url: "get_gps.php",
        data: { text1: val1, text2: val2 },
        success: function(data) {
            var duos = data.split(",");

            let cont = 0;
            let j = 0;
            let k = 0;
            for (let i = 0; i < duos.length - 1; i += 3) {
                j = i + 1;
                k = j + 1;
                latlngs[cont] = [parseFloat(duos[j]), parseFloat(duos[i])];
                time[cont] = duos[k];

                cont++;
            }
            $("#array").val(latlngs);
            $("#tarray").val(time);

            if (latlngs.length > 0) {
                plyline.setLatLngs(latlngs);
                mymap.fitBounds(plyline.getBounds());
            } else {
                alert("No se encontraron posiciones en este intervalo de tiempo");
            }
        }
    });
}



//init spinner
var sp = $("#spinner").spinner();


function getT() {
    $('#indice').removeClass('d-none');
    $('#spinner').removeClass('d-none');
    $('#button3').removeClass('d-none');
    $('#t1').removeClass('d-none');

    var time = $("#tarray").val().split(",");
    var duos = $("#array").val().split(",");
    let cont = 0;
    let j = 0;
    for (let i = 0; i < duos.length - 1; i += 2) {
        j = i + 1;
        latlngs[cont] = [parseFloat(duos[j]), parseFloat(duos[i])];
        cont++;
    }
    //set up spinner
    sp.spinner("option", "min", 0);
    sp.spinner("option", "max", latlngs.length);

    //init pos for marker
    $("#spinner").on("spinstop", function() {
        let pos = sp.spinner("value");
        marker.setLatLng({ lat: latlngs[pos][1], lng: latlngs[pos][0] })
        marker.setOpacity(1);
        $("#t1").val(time[pos])
    });

}

function delMark() {
    $('#indice').addClass('d-none');
    $('#spinner').addClass('d-none');
    $('#button3').addClass('d-none');
    $('#t1').addClass('d-none');
}