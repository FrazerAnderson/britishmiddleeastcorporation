<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phonenumb"];
  $message = $_POST["subject"];

  // Set email recipient and subject
  $to = "frazerfanderson@gmail.com";
  $subject = "New message from website contact form";

  // Construct email message
  $body = "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage: $message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us. We will get back to you shortly.";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }

}
?>