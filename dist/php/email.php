<?php

$naam = $_POST['naam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];


$mailTEXT = "
Naam: "."$naam"."
Telefoonnummer: "."$email"."
Bijgevoegd bericht: "."$bericht"."
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$to = "svenbril99@gmail.com";
$subject = "Nieuwe aanvraag ingevuld door $naam";
$message = "$mailTEXT";
$headers = "From: $email";

mail($to,$subject,$message,$headers);


// echo "<br>"."Naam:$naam, Telefoonnummer:$telnummer, Gekozen behandeling:$behandeling, Aantal personen:$personen, Gekozen locatie:$locatie, Straatnaam en huisnummer:$straat, Postcode:$postcode en Woonplaats:$woonplaats, Bijgevoegd commentaar:$commentaar.";


header("Location: ../../index.php");
die();
?>