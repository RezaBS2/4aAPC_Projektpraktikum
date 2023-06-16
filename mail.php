<?php
// sending to
$to      = 'harmonischreizenderotter@spam.care';
// email subject
$subject = "Section's Edge as a service";
// additional headers
$headers = array(
    'From' => 'test@example.com',
    'Reply-To' => 'test2@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);
//body template

$message = '
<html>
<head>
  <title>Node.js Deployment</title>
</head>
<body>
  <p>I have a few requests:</p>
  <ol>
    <li>How much is the cost?</li>
    <li>What is the whole procedure of delpoyment</li>
    <li>How are my appplications distributed?</li>
    <li>How flexible is the payment plans?</li>
  </ol>
</body>
</html>
';

mail($to, $subject, $message, $headers);
?>