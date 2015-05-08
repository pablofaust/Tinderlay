<?php

// codigo tomado de algun lugar en la red
// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO

/* $for = 'pabfaust@gmail.com'; 
 
$subject = "Nouvelle Tinderline"; 
 
$mailheader = "From: ".$_POST["mail"]."<".$_POST["mail"].">\r\n"; 
$mailheader .= "Reply-To: ".$_POST["mail"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
 
$MESSAGE_BODY .= "Email: ".$_POST["mail"]."<br>"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
 
mail( $for, $subject, $MESSAGE_BODY, $mailheader) or die ("Votre message n'a pas pu être envoyé, veuillez réviser vos informations."); 
 */

$count_my_page = ("phrases.txt");
$hits = file($count_my_page);
$msg = $_POST["message"];
$mail = $_POST["mail"];

$fp = fopen($count_my_page , "a+");
fputs($fp , "\n $mail \n $msg \n ------ end of phrase ----");
fclose($fp);

echo "<script>alert('Merci, votre message nous a bien été envoyé ! On vous répondra au plus vite !')</script>";
echo "<SCRIPT>history.back(1)</SCRIPT>"; 
 
?>