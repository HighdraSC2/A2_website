<?php

if($_POST['action'] == "send")
{
	$name = $_POST['senderName'];
	$address = $_POST['senderAddress'];
	$email = $_POST['senderEmail'];
	$phonenumber = $_POST['senderPhoneNumber'];
	$message = $_POST['message'];
	$to = "repair@pc4u-tilburg.nl";

	var_dump($_POST);
	file_put_contents("contacts.txt",

"------------------------------
Bericht van: " . $name . " (" . $address . ") (" . $email . ")
------------------------------",

	FILE_APPEND
	);


/*
	//Onderstaande code mailt het bericht ook - WERKT NIET OP XAMPP

	mail($to, "Contactformulier van website",
		"------------------------------
		Bericht van: " . $name . " (" . $email . ")
		" . $message . "
		------------------------------",
	)
*/


	header("Location: ../contact.php?msg=Bericht+verstuurd");
}

?>