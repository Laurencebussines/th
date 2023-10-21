<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    // Configurare e-mail
    $to = "laurflorin642@gmail.com"; // Adresa de e-mail destinatară
    $subject = "Mesaj de la Formularul de Contact";
    $message = "Nume: $nume\nE-mail: $email\nMesaj: $mesaj";

    // Trimitere e-mail
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail trimis cu succes!";
    } else {
        echo "Eroare la trimiterea e-mailului.";
    }
}
?>
