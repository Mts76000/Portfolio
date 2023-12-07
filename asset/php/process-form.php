<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Assurez-vous d'avoir inclus PHPMailer dans votre projet

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);


    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'ssl0.ovh.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@mathis-lamotte.com';
        $mail->Password = 'Olamotte05@';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinataire
        $mail->setFrom($email, $name);
        $mail->addAddress('contact@mathis-lamotte.com');

        // Contenu du message
        $mail->isHTML(false);
        $mail->Subject = "Nouveau message de $name";
        $mail->Body = $message;

        // Envoyer l'e-mail
        $mail->send();

        // Redirection vers une page de confirmation
        header("Location: ../../index.html");
        exit();
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message. Erreur : {$mail->ErrorInfo}";
    }
}
?>
