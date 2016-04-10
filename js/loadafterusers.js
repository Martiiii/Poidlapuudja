
var miturida = 20;

function users() {
    console.log("siinasdasd");
    $.ajax({
        type: 'POST',
        url: "index/Proovifail",
        dataType: "json",
        data: "postuser=1",

        success: function (result) {
            console.log(JSON.stringify(result[0]))
            writeRows(result);

        }
    });

}

function writeRows(data) {
    var uusmuutuja = "";
	console.log("SIIN");
    console.log(document.location.hash);
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
        miturida += 10;


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


