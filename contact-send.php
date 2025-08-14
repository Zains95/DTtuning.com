<?php
// contact-send.php — Simple mail handler
// Update $to to your desired inbox
$to = 'info@dttuning.com';

// Basic spam trap (honeypot)
if (!empty($_POST['company'])) {
  http_response_code(200);
  echo 'OK';
  exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? 'Website enquiry');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
  http_response_code(400);
  echo 'Missing required fields.';
  exit;
}

$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

$body = "New contact form submission:\n\n"
      . "Name: $name\n"
      . "Email: $email\n"
      . "Phone: $phone\n"
      . "Subject: $subject\n\n"
      . "Message:\n$message\n\n"
      . "IP: $ip\nUser Agent: $ua\n";

$headers = "From: DT Tuning Website <no-reply@dttuning.com>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, "[DT Tuning] $subject", $body, $headers)) {
  header('Location: contact.html?sent=1');
  exit;
} else {
  header('Location: contact.html?sent=0');
  exit;
}
