<?php 
$Name = $_POST['name']; 
$Email = $_POST['email']; 
$Tel = $_POST['phone'];
$Message = $_POST['msg']; 

/*Sending Email*/ 
$to = "ibakyrdjiev@gmail.com, rosenkrumov95@gmail.com";  //
$subject = "Web Mail"; 
$message = " 
From: $Name <br>
E-mail: $Email <br>
Telephone: $Tel <br>
Message: $Message
" ;
$headers = 'From: ' .$email. "\r\n" .
    'Reply-To: '.$email . "\r\n" .
'Content-Type:text/html; charset=UTF-8'."\r\n".
    'X-Mailer: PHP/' . phpversion();
	
$from = "$Name"; 


if(mail($to, $subject, $message, $headers)) 
header("Location: ../contact.html"); 
else 
echo "Mail send failure - message not sent"; 
?>