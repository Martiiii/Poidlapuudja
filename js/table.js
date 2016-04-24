var table = document.getElementById("tabel");
var tbody = table.getElementsByTagName("button")[0];

tbody.onclick = function (e) {
    e = e || window.event;
    var data = [];
    var target = e.srcElement || e.target;
    while (target && target.nodeName !== "TR") {
        target = target.parentNode;
    }
    if (target) {
        var cells = target.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            data.push(cells[i].innerHTML);
        }
    }
    alert(data[4]);

    var testdata = {lahtekoht: data[0], sihtkoht: data[1], autojuht: data[2], lisainfo: data[3], aeg: data[4] };

    //data = JSON.stringify(data);

    $.ajax({
        type: 'POST',
        url: "index/kustutasoit/",
        data: testdata,
        success: function(message) {
            console.log("JSS");
        },
        error: function(msg) {
            console.log("FAIL");
        }
    });
};