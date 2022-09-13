<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Informatie Reparaties</h1>
				<p class="text"> We repareren ook computers en laptops als ze kapot zijn of werken niet goed dan bent u bij de juiste want wij helpen u daarmee. Neem contact op met ons met het contactformulier.</p>


			<h1>Reparatie contactformulier</h1>
			
			<form action="backend/contactController.php" method="post">

				<!-- Vertel de controller wat we gaan doen -->
				<input type="hidden" name="action" value="send">
				
				<div class="form-group">
					<label for="senderName">Naam</label>
					<input type="text" name="senderName" id="senderName">
				</div>
				<div class="form-group">
					<label for="senderAddress">Adres</label>
					<input type="text" name="senderAddress" id="senderAddress">
				</div>
				<div class="form-group">
					<label for="senderEmail">E-mailadres</label>
					<input type="text" name="senderEmail" id="senderEmail">
				</div>
				<div class="form-group">
					<label for="senderPhoneNumber">Telefoonnummer</label>
					<input type="text" name="senderPhoneNumber" id="senderPhoneNumber">
				</div>
				<div class="form-group">
					<label for="senderBrand">Merk computer/laptop</label>
					<input type="text" name="senderBrand" id="senderBrand">
				</div>
				<div class="form-group">
					<label for="senderType">Type</label>
					<input type="text" name="senderType" id="senderType">
				</div>
				<div class="form-group">
					<label for="message">Bericht</label>
					<textarea name="message" cols="30" rows="10" id="message"></textarea>
				</div>
				<div class="form-group">
					<button id="sendForm" onclick="alertForm()">Verzend formulier</button>
				</div>

			</form>

		</div>
	</main>






	<!-- EINDE eigen code -->

	<?php require_once("footer.php"); ?>


	<script>	
		function alertForm(){
		alert ("Formulier is verzonden.")
		}

	</script>

	
</body>
</html>