<?php
$to = "asimkhan478@gmail.com,badiuddin.khan2002@gmail.com,azambrc@gmail.com";
$name = $_POST ["name"];
$phone = $_POST ["phone"];
$email = $_POST ["email"];
$msg = $_POST ["message"];

$subject = 'Message from the Website http://globalgei.in/';

$headers = "Name: " . strip_tags ( $name ) . "\r\n";
$headers = "From: " . strip_tags ( $email ) . "\r\n";
$headers = "Phone: " . strip_tags ( $phone ) . "\r\n";
// $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
// $headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Message Body

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td colspan='2'><strong>Sender Information </strong> </td></tr>";
$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags ( $name ) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags ( $email ) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags ( $phone ) . "</td></tr>";
$message .= "</table>";
$message .= "<hr>";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" width="50%">';
$message .= "<tr style='background: #eee;'><td><strong>Message content</strong> </td><tr>";
$message .= "<tr><td><strong>$msg</strong></td><tr>";
$message .= "</table>";
$message .= "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail ( $to, $subject, $message, $headers );

?>