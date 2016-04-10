displayContact();


function displayContact() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myFunction(xmlhttp);
        }
    };
    xmlhttp.open("GET", "./xml/kontakt.xml", true);
    xmlhttp.send();
}

function myFunction(xml) {
    var xmlDoc = xml.responseXML;
    x = xmlDoc.getElementsByTagName("CT");
    document.getElementById("kontakts").innerHTML =
        "Nimi: " +
        x[0].getElementsByTagName("NIMI")[0].childNodes[0].nodeValue +
        "<br>Email: " +
        x[0].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue + "<br>" + "<br>" +
        x[1].getElementsByTagName("NIMI")[0].childNodes[0].nodeValue +
        "<br>Email: " +
        x[1].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue + "<br>" + "<br>" +
        x[2].getElementsByTagName("NIMI")[0].childNodes[0].nodeValue +
        "<br>Email: " +
        x[2].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue;

}