<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = htmlspecialchars(trim($_POST['Full_Name']));
    $phone = htmlspecialchars(trim($_POST['Phone_Number']));
    $email = filter_var(trim($_POST['Email_Address']), FILTER_SANITIZE_EMAIL);
    $serviceType = htmlspecialchars(trim($_POST['Service_Type']));
    $message = htmlspecialchars(trim($_POST['Message']));

    if (empty($fullName) || empty($phone) || empty($email) || empty($serviceType) || empty($message)) {
        $_SESSION['form_error'] = "All fields are required.";
        header("Location: contact.php#contact_form");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['form_error'] = "Invalid email format.";
        header("Location: contact.php#contact_form");
        exit;
    }

    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'silverpal786@gmail.com';
        $mail->Password = 'jpwm ygbm oyst nhts';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender
        $mail->setFrom('silverpal786@gmail.com', 'Silver Palace Website');

        // Receiver
        $mail->addAddress('silverpal786@gmail.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Lead from Silver Palace Website - $serviceType";

        $mail->Body = "
        <h2>New Website Inquiry</h2>
        <b>Name:</b> $fullName <br>
        <b>Phone:</b> $phone <br>
        <b>Email:</b> $email <br>
        <b>Service:</b> $serviceType <br><br>
        <b>Message:</b><br>$message
        ";

        $mail->send();

        header("Location: thank-you.php");
        exit;

    } catch (Exception $e) {

        $_SESSION['form_error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: contact.php#contact_form");
        exit;

    }

} else {

    header("Location: contact.php");
    exit;

}
?>