<html><body>
  <?php
    header('Location: index.html');
    // The message
    $name = $_GET["name"];
    $email_address = $_GET["email"];
    $message = $_GET["message"];
    $full_message = $name + '\n\r' + $email_address + '\n\r' + $message;
    $subject = $_GET["subject"];
    // Send
    mail('christian.strydom@gmail.com', $subject, $full_message);
  ?>

  Your mail has been sent.
</body></html>