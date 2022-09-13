<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Producten</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Producten</h1>
			<p class="text"> Hier zijn onze producten die wij op voorraad hebben.</p>

			<img src="img/15-cw1948nd.jpg" width="200px" alt="HP Pavilion 15-cw1948nd">
			<h2>HP Pavilion 15-cw1948nd</h2>
				<p class="text"> Ryzen Up met deze supercomputer!</p>
				<p class="text"> 
					<b>Prijs:</b>
					€ 699
				</p>			
				<p class="text"> 
					<b>Beschrijving:</b>
					Multitask terwijl je een foto bewerkt met de HP Pavilion Notebook 15-cw1948nd. Met 16 GB werkgeheugen schakel je snel tussen openstaande programma's. Op het 15,6 inch full hd scherm zet je ook 2 vensters naast elkaar open. Zo werk je efficiënter met een Word bestand terwijl je tegelijk op internet informatie zoekt. Je neemt de HP ook mee naar werk, hij weegt slechts 1,85 kilogram. De 512 GB SSD start de Pavilion op in 15 seconden en biedt voldoende opslagruimte voor duizenden foto's.
				</p>


			<img src="img/Apple MacBook.jpg" width="200px" alt="Apple MacBook Pro 13 (2020)">
			<h2>Apple MacBook Pro 13" (2020)</h2>
				<p class="text"> Het is apple...</p>
				<p class="text">
					<b>Prijs:</b>
					€ 1999
				</p>

				<p class="text"> 
					<b>Beschrijving:</b>
					Vlieg door je werk heen met de compacte Apple MacBook Pro 13" (2020) MWP42N/A Space Gray. Dit model heeft namelijk een Intel Core i5 processor van de 10e generatie en 16 GB werkgeheugen. Hierdoor werk je moeiteloos aan verschillende projecten tegelijk in Adobe Photoshop. Het vernieuwde Magic Keyboard heeft een schaarmechanisme, waardoor je prettiger en preciezer typt.
				</p>

			<img src="img/Acer Aspire TC-89517510.jpg" width="200px" alt="Acer Apsire TC-895 I7510">
			<h2>Acer Apsire TC-895 I7510</h2>
				<p class="text"> Het is geen apple...</p>
				<p class="text">
					<b>Prijs:</b>
					€ 899
				</p>
				<p class="text"> <b>Beschrijving:</b>
				<span id="dots" style="display: inline;">...</span>
				<span id="more" style="display: none;">De Acer Aspire TC-895 I7510 is een krachtige computer voor het hele gezin. Je gebruikt hem voor het bijwerken van je e-mail, het bewerken van de vakantievideo's of het maken van huiswerk. Ook voor zwaardere programma's zoals Adobe Premiere is deze computer geschikt. Door de snelle Intel Core i7 processor en 16 GB werkgeheugen, multitask je zonder haperingen. Deze desktop heeft een 256 GB SSD schijf, waardoor hij binnen 15 seconden opgestart is.</span>
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