<?php 
require_once("template.php");
	
function content(){
?>
		<div class="post">
			<b>Poradnia Dermatologiczna</b> (umowa z NFZ)<br/>
			Lek. Med. Katarzyna Szulc-Krawczyk <br/>
			<br/>
			
			<b> Godziny Przyjęć:</b>
			<table class="hours-table">
			  <tr>
				<td>Poniedziałek</td>
				<td>8.00 - 15.00</td>
			  </tr>
			  <tr>
				<td>Wtorek</td>
				<td>9.00 - 18.00</td>
			  </tr>
			  <tr>
				<td>Środa</td>
				<td>8.00 - 15.00</td>
			  </tr>
			  <tr>
				<td>Czwartek</td>
				<td>9.00 - 16.00</td>
			  </tr>
			  <tr>
				<td>Piątek</td>
				<td>8.00 - 15.00</td>
			  </tr>
			</table> 
			
			<b> Usługi:</b><br/>
			<ul>
				<li>Fototerapia (<a class="link" href="http://weromed.info.pl/kabiny-n-line/" target="_blank"> kabina N-Line </a>)</li>
				<li>Krioterapia</li>	
				<li>Elektrokoagulacja</li>
			</ul>
			
			<b>Rejestracja:</b><br/>
			Osobista lub telefoniczna: <b>59 822 23 39</b> <br/> 
			(od poniedziałku do piątku w godzinach 8.00-15.00)
		</div>
<?php  
}
showPage();
?>