<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aanbiedingen</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Aanbiedingen</h1>
			<p class="text"> Hieronder staan onze producten die op dit moment in de aanbieding zijn.</p>

			<img src="img/nest.jpg" width="200px" alt="Nest">
			<h2>Google Nest Mini</h2>
				<p class="text"> 
					<b>Prijs:</b>
					Van € 59,95 voor € 29,95
				</p>			
				<p class="text"> 
					<b>Beschrijving:</b>
					De Google Nest Mini is een slimme speaker met ingebouwde assistent. De speaker is daardoor altijd je hulp in huis. Stel bijvoorbeeld vragen en krijg direct antwoord, zonder je telefoon erbij te pakken. Zo weet je of het druk is op weg naar je werk, hoe warm het wordt of wat je volgende afspraak is. Ook geef je commando's om je smart home producten aan te sturen zonder app. Dim bijvoorbeeld je smart lampen of stel je slimme thermostaat in op een aangename temperatuur. Alles zonder op te staan of je telefoon erbij te pakken. Dankzij de verbeterde speaker gebruik je de Google Nest Mini bovendien voor een achtergrondmuziekje. Je plaatst deze smart home hub op een tafel of bevestigt hem aan de muur.
				</p>


			<img src="img/Surface4.jpg" width="200px" alt="Surface4">
			<h2>Microsoft Surface Pro 4 - Uitlopend model</h2>
				<p class="text">
					<b>Prijs:</b>
					Normaal: € 1599 nu voor maar € 699
				</p>

				<p class="text"> 
					<b>Beschrijving:</b>
					De Microsoft Surface Pro 7 is een tablet en laptop in één. Op het touchscreen maak je met je vingers aantekeningen tijdens een werkoverleg of bewerk je foto's in Photoshop. Vraagt een collega aan je of je het overleg wil notuleren? Gebruik dan de optionele Type Cover. Volledig functioneel en in een uitstekende staat. Heel weinig (als er zijn) krasjes of zichtbare gebruikssporen.
				</p>

			<img src="img/IBM AS400 (refurb).jpg" width="200px" alt="IBM">
			<h2>IBM AS/400</h2>
				<p class="text">
					<b>Prijs:</b>
					€ 1999
				</p>
				<p class="text"> <b>Beschrijving:</b>
				<span id="dots" style="display: inline;">...</span>
				<span id="more" style="display: none;">Het IBM AS/400-systeem is een applicatiesysteem geschikt voor middelgrote tot grote bedrijven. Houdt de personeelsadministratie, je financieen en je rechtenstructuur op orde met deze alleskunner! Dit refurbished systeem kan voor jou zijn voor slechts € 1999</span>
				</p>
				<button class="button" id="myBtn" onclick="myFunction()">Lees meer</button> 
	</main>








	<?php require_once("footer.php"); ?>

	<script>
		function myFunction() {
  			var dots = document.getElementById("dots");
  			var moreText = document.getElementById("more");
  			var btnText = document.getElementById("myBtn");

  			  if (dots.style.display === "none") {
    			dots.style.display = "inline";
    			btnText.innerHTML = "lees meer";
    			moreText.style.display = "none";
  			} else {
    			dots.style.display = "none";
    			btnText.innerHTML = "lees minder";
    			moreText.style.display = "inline";
  			}
			}

	</script>
	
</body>
</html>