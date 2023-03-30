<?php
if(isset($_POST['submit'])) {
  $to = "alonsojacoboher@gmail.com"; // Replace with your own email address
  $subject = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $name <$email>\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  
  // Send email
  mail($to, $subject, $message, $headers);
  
  // Redirect to thank-you page
  header("Location: thank-you.html");
}
?>




