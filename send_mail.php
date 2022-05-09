<?php 
if (isset($_POST['send_fridge'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Samsung Double Door Fridge";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_oven'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Oven 600/600 - Le Creuset Round Dutch";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_ac'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Air Conditioners";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_art'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Artworks";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_tv'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Smart TV";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_micro'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Microwave";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_sound'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Wireless Sound System";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_bag'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "His&Hers Bags";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_dish'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Dishwasher";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_blend'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Kitchen aid blender";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_fan'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Rechargeable fans";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_cook'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Caraway Cookware Set/Titanium";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_voucher'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Gift vouchers";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_mill'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Threadmill";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_bike'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Peloton Bike";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_mixer'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Stand mixer";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_food'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Food Processor";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_juicer'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Ninja Electric Juicer";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_toaster'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Kenwood Toaster";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}

if (isset($_POST['send_box'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gift = "Travel Box Set";
  $emailSendMessage = $_POST['msg'];
  $to = "denisonu7@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
  	<h2> Selected Gift: " . $gift . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   echo "Send Sucessfully, Good Luck Email sent";
   header("Location: gift_registry.html");
   exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: gift_registry.html");
   exit();
  }
}
?>