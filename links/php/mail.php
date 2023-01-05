<?php


define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_HOST", "smtp.zoho.com");
define("EMAIL_SMTP_AUTH", false);
define("EMAIL_SMTP_USERNAME", "info@nimatashii.com");
define("EMAIL_SMTP_PASSWORD", "Nanda229479%asd");
define("EMAIL_SMTP_PORT", 587);
define("EMAIL_SMTP_ENCRYPTION", "tsl");



$subject    = 'E-mail from'; // Subject of your email
$to = 'info@nimatashii.com';

$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_POST['name'] . ' <br/>' .
              'E-mail: ' . $_POST['email'] . ' <br/>' .
              'Phone: ' . $_POST['phone'] . ' <br/>' .
              'Website: ' . $_POST['website'] . ' <br/>' .
              'Message: ' . $_POST['message'];

if (@mail($to, $subject, $message, $headers))
{
  echo 'sent';
}
else
{
  echo 'failed';
}
?>
