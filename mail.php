<?php
// Vérifie si le formulaire est envoyé
if (isset($_POST["submit"])) {
    // Récupération des variables du formulaire
    $entreprise = $_POST['entreprise'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $demande = $_POST['demande'];
    $besoin = $_POST['besoin'];

    // Informations du mail
    $email_from = 'willdgh.pro@gmail.com';
    $email_subject = "Problème" . " " . $demande;
    $email_body = $nom . " " . $prenom . " de l'entreprise " . $entreprise . ", " . "vous a envoyé un message.\r\n" .
        "La demande est la suivante :\n$besoin\n" . "Téléphone : " . $tel . "\n" . "Email : " . $mail . "\r\n";

    // Destinataire du mail
    $to = "cyprien.prouvot@gmail.com";
    // $to = "willdgh.pro@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    // Envoi du mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Envoi effectué, redirection vers la page email-sent.php
        echo "Email envoyé avec succès à $to ...";
        header('Location: email-sent.html');
        exit();
    } else {
        echo "Echec de l'envoi...";
    }
} elseif (!isset($_POST["submit"])) {
    // Empêche l'accès direct à cette page si le formulaire n'est pas envoyé
    header("Location: index.html");
    exit();
}
