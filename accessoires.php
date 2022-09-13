<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accessoires</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Accessoires</h1>
			<p class="text"> Hier zijn onze accessoires voor uw computer of laptop.</p>

			<img src="img/brio-stream.png" width="200px" alt="brio-stream">
			<h2>Logitech Brio Stream</h2>
				<p class="text">Beste webcam voor streamen, opnemen en videobellen in 4K HDR</p>
				<p class="text"> 
					<b>Prijs:</b>
					€ 249,95
				</p>			
				<p class="text"> 
					<b>Beschrijving:</b>
					Stream vloeiende, levensechte en supersnelle 1080p/60fps-video. Dankzij de supersnelle framefrequentie kun je indruk maken door dramatische, ongewone slow-motion replays te creëren.
				</p>


			<img src="img/Master 3.jpg" width="200px" alt="MX Master 3">
			<h2>MX Master 3</h2>
				<p class="text"> MAAK KENNIS MET DE MEESTER</p>
				<p class="text">
					<b>Prijs:</b>
					€ 109
				</p>

				<p class="text"> 
					<b>Beschrijving:</b>
					MX Master 3 is directe precies en oneindige mogelijkheden. Het is de meeste geavanceerde Master Series-muis tot nu toe, ontworpen voor creators en ontwikkeld voor programmeurs. Als je het kunt bedenken, kun je het onder de duim krijgen. We hebben het wiel opnieuw uitgevonden. Gloednieuw MagSpeed™ Elektromagnetisch scrollen is zo precies dat het op een pixel kan stoppen en snel genoeg om 1000 regels per seconde te scrollen. O ja, en het is bijna stil. Het bewerkte staal van het wiel geeft het een uitstekende tactiliteit en voldoende gewicht om een dynamische traagheid te bieden die u voelt, maar niet hoort.
				</p>

			<img src="img/bluetooth-headset-zone-wireless.png" width="200px" alt="Logitech Zone Wireless Plus">
			<h2>Logitech Zone Wireless Plus</h2>
				<p class="text"> VERBETER ELKE WERKPLEK</p>
				<p class="text">
					<b>Prijs:</b>
					€ 269,99
				</p>
				<p class="text"> <b>Beschrijving:</b>
				<span id="dots" style="display: inline;">...</span>
				<span id="more" style="display: none;">Bluetooth-headset waarmee u overal kunt werken en waarop u met één ontvanger aanvullende Unifying-randapparaten kunt aansluiten.</span>
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