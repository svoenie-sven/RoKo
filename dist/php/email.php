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


$to = "info@rokoproductions.com";
$subject = "[RoKo Prodctions] Nieuw contactverzoek van $naam";
$message = "$mailTEXT";
$headers = "From: $email";

mail($to,$subject,$message,$headers);

header("Location: ../../index.php");

die();
?>