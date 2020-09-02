<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$field_name = $_POST['mps-name']; 
$field_add1 = $_POST['mps-add1']; 
$field_add2 = $_POST['mps-add2']; 
$field_add3 = $_POST['mps-add3']; 
$field_add4 = $_POST['mps-add4']; 
$field_tel = $_POST['mps-tel']; 
$field_email = $_POST['mps-email']; 
$field_message = $_POST['mps-message']; 

$mail_to = 'info@vteximpex.com'; 
$subject = 'Message from a site visitor '.$field_name; 

$body_message = 'From    	: '.$field_name."\n"; 
$body_message .= 'Address	: '.$field_add1."\n"; 
$body_message .= '      	: '.$field_add2."\n"; 
$body_message .= '       	: '.$field_add3."\n"; 
$body_message .= '       	: '.$field_add4."\n"; 
$body_message .= 'Telephone	: '.$field_tel."\n"; 
$body_message .= 'E-mail 	: '.$field_email."\n"; 
$body_message .= 'Message	: '.$field_message; 

$headers = 'From: '.$field_email."\r\n"; 
$headers .= 'Reply-To: '.$field_email."\r\n"; 

$mail_status = mail($mail_to, $subject, $body_message, $headers); 

if ($mail_status) { ?> 
    <script language="javascript" type="text/javascript"> 
        alert('Thank you for the message. We will contact you within 24 Hours.'); 
        window.location = 'writetous.htm'; 
    </script> 
<?php 
} 
else { ?> 
    <script language="javascript" type="text/javascript"> 
        alert('Message failed.'); 
        window.location = 'writetous.htm'; 
    </script> 
<?php 
} 
?>
</body>
</html>
