<?php
if(!isset($_POST['submit']))
{
// Veuillez 
	echo "L'envoi du formulaire a échoué, veuillez réessayer.";
}

// Récupération des variables du formulaire
$entreprise = $_POST['entreprise'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$name = $_POST['tel'];
$mail = $_POST['mail'];
$tel = $_POST['mail'];
$demande = $_POST['demande'];
$besoin = $_POST['besoin'];

// Informations du mail
$email_from = 'willdgh.pro@gmail.com';
$email_subject = $demande;
$email_body = "Vous avez reçu un message de la part de $nom\n".
    "La demande est la suivante:\n $besoin".
    
// Destinataire du mail
$to = "william.degh@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Envoi du mail
mail($to,$email_subject,$email_body,$headers);

// Envoi effectué, redirection vers la page email-sent.php
header('Location: email-sent.html');