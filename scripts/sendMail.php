<?php

$to = 'vannieuland.geordi@gmail.com'; 
$from = 'E-mail: '.htmlspecialchars($_POST["E-mail"]); 
$fromName = 'Voornaam: ' . htmlspecialchars($_POST["Voornaam"]) .'Familienaam: ' . htmlspecialchars($_POST["Familienaam"]); 
 
$subject = "Send Text Email with PHP by CodexWorld"; 
 
$message = 'Type vraag: '. htmlspecialchars($_POST["Type-vraag"]) . "\n".'Vraag: ' . htmlspecialchars($_POST["Vraag"]); 
 
 
$headers = 'From: '.$fromName.'<'.$from.'>'; 
 

if(mail($to, $subject, $message, $headers)){ 
   echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}

?>