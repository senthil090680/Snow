<html>
<head>
<title>PHPMailer - Mail() basic test</title>
</head>
<body>

<?php

require_once('../class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = file_get_contents('contents.html');
//$body             = preg_replace('/[\]/','',$body);

//$body             = preg_replace('//[\]/','',$body);

$mail->SetFrom('sensarashari@shoppingmega.in', 'First Last');

//$mail->AddReplyTo("senthil.kumar@anantha.co.in","First Last");

$address = "senthil090680@gmail.com";
$mail->AddAddress($address, "John Doe");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

for($i=0; $i<=2000; $i++) {

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

}

?>

</body>
</html>