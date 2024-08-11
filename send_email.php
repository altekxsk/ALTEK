<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten abrufen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail an die Zieladresse senden
    $to = "altekxsk@outlook.de"; // Ziel-E-Mail-Adresse
    $subject = "Neue Nachricht von der Webseite";
    
    $body = "Name: $name\n";
    $body .= "E-Mail: $email\n";
    $body .= "Nachricht:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden der Nachricht.";
    }
}
?>
