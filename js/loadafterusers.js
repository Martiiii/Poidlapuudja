
var miturida = 4;
var amount = 5; // Load step
var pageNr = 2; // Shown in the URL, Initially added on "load_more_button" click

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

syncRacesToURL();

function syncRacesToURL(){
    var currentURL = window.location.href;
    if(currentURL.indexOf('page_nr')> -1){
        console.log(currentURL.indexOf('page_nr'));
        var currentPage = parseInt(currentURL.split("#")[1].split('=')[1]);

        pageNr = currentPage; // For history.pushState
        miturida = (currentPage) * 2; // For page 3, We need additional 10 Items (not 15)

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


