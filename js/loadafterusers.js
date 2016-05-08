
var miturida = 4;
var amount = 5;
var pageNr = 2;

function users() {
    $.ajax({
        type: 'POST',
        url: "index/Proovifail",
        dataType: "json",
        data: "postuser=1",

        success: function (result) {
            writeRows(result);
        }
    });

}

sync();

function sync(){
    var currentURL = window.location.href;
    if(currentURL.indexOf('page_nr')> -1){
        var currentPage = parseInt(currentURL.split("#")[1].split('=')[1]);
        pageNr = currentPage;
        miturida = 2*(currentPage); // et kaks korda rohkem asju välja prindiks
        users();
    }

}

function writeRows(data) {
    history.pushState({}, "page nr", "kasutajad#page_nr=" + (pageNr));
    pageNr = pageNr + 1;
    console.log(miturida);

    var uusmuutuja = "";
    if(miturida < data.length) {
        for (var i = 0; i < miturida; i++) {
            var h = "<tr>" +
                "<td>" + data[i].Eesnimi + "</td>" +
                "<td>" + data[i].Perenimi + "</td>" +
                "<td>" + data[i].Liitumine + "</td>" +
                "<td>" + data[i].Telefoninumber + "</td>" +
                "</tr>";
            uusmuutuja = uusmuutuja + h;

        }
        miturida += 2;


    document.getElementById("usertable").innerHTML = uusmuutuja;
    }
    else {
        for (var i = 0; i < data.length; i++) {
            var h = "<tr>" +
                "<td>" + data[i].Eesnimi + "</td>" +
                "<td>" + data[i].Perenimi + "</td>" +
                "<td>" + data[i].Liitumine + "</td>" +
                "<td>" + data[i].Telefoninumber + "</td>" +
                "</tr>";
            uusmuutuja = uusmuutuja + h;

        }


        document.getElementById("usertable").innerHTML = uusmuutuja;
    }
}


