<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Configuration de l'e-mail
    $destinataire = "r53484443@gmail.com";
    $sujet = "Nouveau message de votre formulaire";
    $contenu = "
        <html>
        <head><title>Nouveau message</title></head>
        <body>
            <h1>Informations du client</h1>
            <p><strong>Nom :</strong> $nom</p>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Téléphone :</strong> $telephone</p>
            <p><strong>Message :</strong> $message</p>
        </body>
        </html>
    ";

    // En-têtes
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Merci, votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
