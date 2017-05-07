<?php 
require_once("template.php");
function addedHeader(){
?>
	<script type='text/javascript'>
		function initMap(){
				var options = {
					zoom:15,
					center:new google.maps.LatLng(54.177991, 17.488272),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					disableDefaultUI: true
				};
				
				map = new google.maps.Map(document.getElementById('gmap'), options);
				marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(54.176167, 17.487654)});
				infowindow = new google.maps.InfoWindow({content:'<strong>Centrum Medyczne "Vita"</strong><br>Bytów Sikorskiego 57'});
				google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
				infowindow.open(map,marker);
			}
	</script>
	<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCa7QRAezj3Qsk0MR1hq1FEzxSNlFLTsKg&callback=initMap'></script>
<?php
}
function content(){
?>
	<div class="post">
		<b>Telefon Kontaktowy: </b> 59 822 23 39 </br>
		</br>
	
		<b>Poradnie objęte umową z NFZ</b>
		<ul>
			<li>Dermatologiczno-Wenerologiczna</li>
			<li>Położniczo-Ginekologiczna</li>	
			<li>Gabinet USG</li>
			<li>Punkt pobrań laboratorium <q>INVICTA</q></li>
		</ul>
		<b>Gabinety prywatne</b>
		<ul>
			<li>Dermatologiczny</li>
			<li>Medycyny Pracy</li>
			<li>Badania Kierowców</li>
			<li>Położniczo-Ginekologiczny</li>
			<li>Urologiczny</li>
			<li>USG</li>
			<li>Punkt pobrań laboratorium <q>INVICTA</q></li>
		</ul>
	</div>
	
	<div class="post">
		<div id='gmap'></div>
	</div>	
<?php 
}
showPage();
?>