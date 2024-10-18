<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "tonemail@exemple.com";  // Remplace par ton adresse email
    $subject = "Nouveau message de " . $name;
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message ! Nous vous répondrons bientôt.";
    } else {
        echo "Désolé, une erreur est survenue. Veuillez réessayer plus tard.";
    }
}
?>
