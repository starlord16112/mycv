<?php  
 // Include PHPMailer file   
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer-master/src/Exception.php'; 
require 'PHPMailer-master/src/PHPMailer.php'; 
require 'PHPMailer-master/src/SMTP.php';  
   $mail = new PHPMailer(true);

   $mail->SMTPDebug = 3;      
                          // Enable verbose debug output  
 $mail->isSMTP();                                       // Set mailer to use SMTP  
 $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
 $mail->SMTPAuth = true;                                // Enable SMTP authentication  
 $mail->Username = 'toanquyen16112@gmail.com';               // your SMTP username  
 $mail->Password = 'Manh16112';                      // your SMTP password  
 $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
 $mail->Port = 587;
 $ctemail = $_POST['ct_email'];                                     // TCP port to connect to  
 $mail->setFrom('toanquyen16112@gmail.com', 'starlord');  
 $mail->addAddress('toanquyen16112@gmail.com');                 // Name is optional  
 $mail->addReplyTo('toanquyen16112@gmail.com', 'Information');  
 //$mail->addCC('cc@example.com');                        // set your CC email address  
 //$mail->addBCC('bcc@example.com');           
 $mail->isHTML(true);      
 $ctname = $_POST['ct_name'];        
 $mess = $_POST['mess'];     
 $mail->Subject = "Message from ".$ctname;  
 $mail->Body  = "Name: '$ctname'--- Mail: '$ctemail'--- Content :'$mess'";
 
 if($mail->send()) {  
        header('Location: http://localhost:81/mycv/');
 } else {  
   echo 'Message could not be sent';  
 }  
 ?>