<?php
// Vérifie si le formulaire est envoyé
if (isset($_POST["submit"])) {
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
    $email_body = $nom . " " . $prenom . " " . "vous a envoyé un message\n" .
        "La demande est la suivante:\n $besoin\n" . "Téléphone : " . $tel . "\n" . "Mail : " . $mail;

    // Destinataire du mail
    $to = "cyprien.prouvot@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    // Envoi du mail
    mail($to, $email_subject, $email_body, $headers);

    // Envoi effectué, redirection vers la page email-sent.php
    header('Location: email-sent.html');
    exit();
} elseif (!isset($_POST["submit"])) {
    // Empêche l'accès direct à cette page si le formulaire n'est pas envoyé
    header("Location: index.html");
    exit();
}
