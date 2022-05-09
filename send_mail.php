<?php 
if (isset($_POST['send_mail'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = $_POST['gift'];
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<h1>" . $name . "</h1>
  	<h1>" . $email . "</h1>
  	<h1>" . $gift . "</h1>
    <p>".$emailSendMessage."</p>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
  }else{
   echo "sorry, Failed to send email. Please try again later";
  }
}
?>