/**
 * Created by Uiks on 7.04.2016.
 */
var a = 0;
$(document).ready(function() {
    timer();
});

function timer() {
    setTimeout(soidud, 4000);
}

function soidud() {

    $.ajax({
        type: 'POST',
        url: "index/Proovifail",
        dataType: "json",
        data: "soidudtest=1",

        success: function (result) {
            writeSoidud(result);
            console.log(a);

        }
    });

}

function writeSoidud(data) {
    console.log(JSON.stringify(data));
    console.log(data[0].Lahtekoht);
    var uusmuutuja = "";
    for (var i = 0; i < data.length; i++) {
        var h = "<tr>" +
            "<td>" + data[i].Lahtekoht + "</td>" +
            "<td>" + data[i].Sihtkoht + "</td>" +
            "<td>" + data[i].Autojuht + "</td>" +
            "<td>" + data[i].Lisainfo + "</td>" +
            "<td>" + data[i].Aeg + "</td>" +
            "</tr>";
        uusmuutuja = uusmuutuja + h;

    }
    a += 10;
    document.getElementById("innertable").innerHTML = uusmuutuja;
    timer();
}