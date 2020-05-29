<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = 'programmintesting@gmail.com';
  $headers = "From: " . $mailFrom;
  $txt = "You have recived an email from " . $name . ".\n\n" . $message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: ../views/contacto.php?mailsend=success");
}

 ?>
