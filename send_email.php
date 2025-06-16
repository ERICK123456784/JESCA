<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = $_POST['email'];
  $subject = "Your GlamorTz Cosmetics Order";
  $message = "Hello " . $_POST['name'] . ",\n\nThank you for your order!\n\nDetails:\n" . $_POST['orderDetails'] . "\n\nDelivery Address:\n" . $_POST['address'];
  $headers = "From: shop@glamortz.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "Order sent successfully!";
  } else {
    echo "Error sending email.";
  }
}
?>