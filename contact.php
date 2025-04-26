<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Debug SMTP
    $mail->SMTPDebug = 2;  // Ajouté !
    $mail->Debugoutput = 'html';  // Ajouté !

    // Configuration serveur
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kmlkhatim@gmail.com';
    $mail->Password = 'tsub mokq udff qhkz';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Destinataire
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('kmlkhatim@gmail.com');

    // Contenu
    $mail->isHTML(false);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "Nom: {$_POST['name']}\nEmail: {$_POST['email']}\nTéléphone: {$_POST['phone']}\n\nMessage:\n{$_POST['message']}";

    $mail->send();
    header('Location: envoi_ok.html');
    exit();
} catch (Exception $e) {
    // Échec
    header('Location: echec.html');
    exit();
}
