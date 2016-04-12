<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

<div style='position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;'>

	<div id='gmap_canvas' style='position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;'></div>

	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>

</div> 

<a href='http://www.maps-generator.com/'>www.Maps-Generator.com</a> 

<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6f6cc3db2b521023f38d9cb3afb1bdfa8aff8786'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-7.037695, 110.500764),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.037695, 110.500764)});infowindow = new google.maps.InfoWindow({content:'<strong>Office</strong><br>Batursari<br>59567 Semarang<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>