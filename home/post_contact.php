<?php

use Mailgun\Mailgun;

//Your credentials
$mg = new Mailgun("key-5d424be0c125221134ef28fdd39d66b0");
$domain = "app42401434151a4b48bb4312c467ada548.mailgun.org";

$mg->sendMessage($doamin, array(
'from' => $_POST["mail"],
'to' => 'postmaster@app42401434151a4b48bb4312c467ada548.mailgun.org',
'subject' => 'TEST',
'text' => $_POST["message"]
	)
)
 
// echo "<script>alert('Merci, votre message nous a bien été envoyé ! On vous répondra au plus vite !')</script>";
// echo "<SCRIPT>history.back(1)</SCRIPT>"; 