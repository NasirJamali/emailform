<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the email parameters
    $to = "nasirhere678@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email
    $mail_success = mail($to, $subject, $email_content, $headers);

    if ($mail_success) {
        // Redirect to a thank-you page or display a success message
        header("Location: thank_you.html");
        exit;
    } else {
        // Redirect to an error page or display an error message
        header("Location: error.html");
        exit;
    }
}
?>
