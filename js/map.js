$(document).ready(function(){

    var myCenter = new google.maps.LatLng(58.358332,26.692067);
    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:13,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    	var info = new google.maps.InfoWindow({
  	  	content:"PEAKONTOR"
          });
        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);

	google.maps.event.addListener(marker,'click',function() {
	info.open(map, marker);
  	map.setZoom(16);
  	map.setCenter(marker.getPosition());

  	});
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});



